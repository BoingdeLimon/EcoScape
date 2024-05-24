<?php
require 'connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $details = $_POST['details'];
    $imagen = null;

    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $dir_subida = 'assets/';
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

        $stmt = $conn->prepare("INSERT INTO paquetes SET nombre = ?, descripcion = ?, imagen = ?, precio = ?, detalles = ?");
        $stmt->bind_param("sssds", $name, $desc, $imagen, $price, $details);
    } else {
        $stmt = $conn->prepare("INSERT INTO paquetes SET nombre = ?, descripcion = ?, imagen = ?, precio = ?");
        $stmt->bind_param("sssd", $name, $desc, $imagen, $price);
    }

    if ($stmt->execute()) {
        $response = array('success' => true, 'message' => 'Paquete creado exitosamente');
    } else {
        $response = array('success' => false, 'message' => 'Error al insertar los datos: '.$stmt->error);
    }

    echo json_encode($response);
    $stmt->close();
    $conn->close();
    exit;
}
