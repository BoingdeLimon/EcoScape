<?php
session_start();
require 'connection.php';

header('Content-Type: application/json');

if (!isset($_SESSION['id'])) {
    echo json_encode(['error' => 'Usuario no autenticado']);
    exit();
}

$id = $_SESSION['id'];

// Preparar la consulta
$sql = "
    SELECT p.id as paquete_id, p.nombre, p.imagen, p.precio, p.detalles, u.id, u.personas, u.fecha
    FROM paquetes p
    JOIN usuarios_paquetes u ON u.id_paquete = p.id
    WHERE u.id_usuario = ?
";

if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $paquetes = $result->fetch_all(MYSQLI_ASSOC);
    // error_log(json_encode($paquetes));
    echo json_encode($paquetes);
} else {
    echo json_encode(['error' => 'Error en la consulta: ' . $conn->error]);
}

$stmt->close();
$conn->close();
?>
