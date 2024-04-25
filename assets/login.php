<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "manuel";
$password = "root123";
$dbname = "nombre_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];
// Consulta para verificar los datos del usuario
$sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

// Verificar si la consulta devuelve resultados
if ($result->num_rows > 0) {
    // Usuario autenticado, redireccionar a la página de inicio
    header("Location: inicio.php");
} else {
    // Usuario no autenticado, mostrar mensaje de error
    echo "Usuario o contraseña incorrectos";
}

// Cerrar conexión
$conn->close();
?>
