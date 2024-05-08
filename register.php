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
        echo json_encode($response);
    } else {
        // If the credentials are not valid, display an error message
        // header("Location: index.php?rerror=1");
        $response = array('success' => false, 'message' => 'Error registrando usuario: '.$conn->error);
        echo json_encode($response);
    }
} catch (mysqli_sql_exception $e) {
    $response = array('success' => false, 'message' => 'Error registrando usuario (El email ya existe)');
    echo json_encode($response);
}

$conn->close();
exit;
?>