<?php
include './db/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $fechaNacimiento = $_POST['fecha_nacimiento'];
    $direccion = $_POST['direccion'];

    // Verificar que los campos no estén vacíos
    if (!empty($nombre) && !empty($apellido) && !empty($correo) && !empty($telefono) && !empty($fechaNacimiento) && !empty($direccion)) {
        $sql = "INSERT INTO Viajeros (Nombre, Apellido, Correo, Telefono, FechaNacimiento, Direccion)
                VALUES ('$nombre', '$apellido', '$correo', '$telefono', '$fechaNacimiento', '$direccion')";

        if ($conn->query($sql) === TRUE) {
            echo "Nuevo viajero registrado exitosamente";
        } else {
            echo "Error al registrar al nuevo viajero: " . $conn->error;
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
}

// Cerrar la conexión
$conn->close();
?>
