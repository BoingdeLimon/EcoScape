<?php
require 'connection.php';

// Recibir datos del formulario
$username = $_POST['username'];
$password = sha1($_POST['password']);
$email = $_POST['email'];

// Consulta SQL para insertar el usuario
$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    $_SESSION['username'] = $username;
    $response = array('success' => true);
} else {
    // If the credentials are not valid, display an error message
    // header("Location: index.php?rerror=1");
    $response = array('success' => false, 'message' => 'Error registrando usuario');
    echo $conn->error;
}

echo json_encode($response);
$conn->close();
exit;
?>