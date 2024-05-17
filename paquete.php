<?php
require 'connection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numPersons = $_POST['numPersons'];
    $selectDate = $_POST['selectDate'];
    $id_usuario = $_SESSION['id'];
    
    // Suponiendo que tienes un ID de paquete predefinido
    $id_paquete = rand(1, 6); // Cambia esto por el ID del paquete correspondiente

    $sql = "INSERT INTO usuarios_paquetes (id_usuario, id_paquete, personas, fecha) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiis", $id_usuario, $id_paquete, $numPersons, $selectDate);

    if ($stmt->execute()) {
        $response = array('success' => true, 'message' => 'Reserva realizada correctamente');
    } else {
        $response = array('success' => false, 'message' => 'Error al realizar la reserva: '.$stmt->error);
    }

    echo json_encode($response);
    $stmt->close();
    $conn->close();
    exit;
}
?>
