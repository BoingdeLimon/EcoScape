<?php
require 'connection.php';

// Recibir datos del formulario
$username = $_POST['username'];
$password = sha1($_POST['password']);
$email = $_POST['email'];

// Consulta SQL para insertar el usuario
$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

// Ejecutar la consulta
try {
    if ($conn->query($sql) === TRUE) {
        session_start();
        $_SESSION['username'] = $username;
        $response = array('success' => true);
    } else {
        // If the credentials are not valid, display an error message
        // header("Location: index.php?rerror=1");
        $response = array('success' => false, 'message' => 'Error registrando usuario: ' . $conn->error);
    }
} catch (mysqli_sql_exception $e) {
    $response = array('success' => false, 'message' => 'Error: ' . $e->getMessage());
}

echo json_encode($response);
$conn->close();
exit;
?>