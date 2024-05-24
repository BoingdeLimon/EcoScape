<?php
require 'connection.php';
header('Content-Type: application/json');

$sql = "SELECT * FROM paquetes";

if ($stmt = $conn->prepare($sql)) {
    // $stmt->bind_param("i", $id);
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
