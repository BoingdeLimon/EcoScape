<?php
require 'connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $userId = $_SESSION['id'];
    $imagen = null;

    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $dir_subida = 'assets/profile_pics/';
        if (!is_dir($dir_subida)) {
            mkdir($dir_subida, 0777, true); // Crear el directorio si no existe
        }
        $imagen_nombre = basename($_FILES['image']['name']);
        $imagen_ruta = $dir_subida . $imagen_nombre;
        
        if (move_uploaded_file($_FILES['image']['tmp_name'], $imagen_ruta)) {
            $imagen = $imagen_ruta; // Guardar la ruta de la imagen
        } else {
            die("Error al subir la imagen.");
        }

        $stmt = $conn->prepare("UPDATE users SET username = ?, password = ?, email = ?, imagen = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $username, $password, $email, $imagen, $userId);
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
