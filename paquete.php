<?php
require 'connection.php';
session_start();

if (!isset($_SESSION['id'])) {
    $response = array('success' => false, 'message' => 'Usuario no autenticado');
    echo json_encode($response);
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numPersons = $_POST['numPersons'];
    $selectDate = $_POST['selectDate'];
    $id_usuario = $_SESSION['id'];
    $id_paquete = $_POST['paquete_id'];

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
