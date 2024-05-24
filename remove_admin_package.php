<?php
session_start();
require 'connection.php';

header('Content-Type: application/json');

if (!isset($_SESSION['id'])) {
    echo json_encode(['error' => 'Usuario no autenticado']);
    exit();
}

$paquete_id = $_POST['paquete_id'] ?? null;

if (!$paquete_id) {
    echo json_encode(['error' => 'paquete ID no proporcionado']);
    exit();
}

$sql = "DELETE FROM paquetes WHERE id = ?";
if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("i", $paquete_id);
    if ($stmt->execute()) {
        echo json_encode(['success' => 'Paquete eliminado de correctamente']);
    } else {
        echo json_encode(['error' => 'Error al eliminar el paquete']);
    }
    $stmt->close();
} else {
    echo json_encode(['error' => 'Error en la consulta: ' . $conn->error]);
}

$conn->close();
?>
