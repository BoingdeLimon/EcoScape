<?php
require 'connection.php';
// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta para verificar usuario y contraseña
$sql = "SELECT * FROM users WHERE username='$username' AND password=SHA1('$password')";
$result = $conn->query($sql);

// Verificar si hay algún resultado
if ($result->num_rows > 0) {
    // Usuario y contraseña válidos, establecer variable de sesión y redirigir a la página de inicio
    session_start();
    $_SESSION['username'] = $username;
    $response = array('success' => true);
} else {
    // Usuario o contraseña incorrectos, redirigir de nuevo a la página de inicio de sesión con un mensaje de error
    // header("Location: index.php?error=1");
    $response = array('success' => false, 'message' => 'Usuario o contraseña incorrectos');
}

echo json_encode($response);
$conn->close();
exit;
?>
