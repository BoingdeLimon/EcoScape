<?php
require 'connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $email = $_POST['email'];
    $userId = $_SESSION['id'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $image = $_FILES['image']['tmp_name'];
        $imgContent = base64_encode(file_get_contents($image)); // Codificar la imagen en base64

        $stmt = $conn->prepare("UPDATE users SET username = ?, password = ?, email = ?, imagen = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $username, $password, $email, $imgContent, $userId);
    } else {
        $stmt = $conn->prepare("UPDATE users SET username = ?, password = ?, email = ? WHERE id = ?");
        $stmt->bind_param("sssi", $username, $password, $email, $userId);
    }

    if ($stmt->execute()) {
        $response = array('success' => true, 'message' => 'Datos actualizados correctamente');
    } else {
        $response = array('success' => false, 'message' => 'Error al actualizar los datos: '.$stmt->error);
    }

    echo json_encode($response);
    $stmt->close();
    $conn->close();
    exit;
}
