<?php
$servername = "localhost"; // Nombre del servidor de la base de datos
$username = "root";     // Nombre de usuario de la base de datos
$password = "";            // Contraseña del usuario de la base de datos
$dbname = "viajes"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
