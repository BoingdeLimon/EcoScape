<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "admin";
$password = "13579";
$database = "ecoscapes";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>
