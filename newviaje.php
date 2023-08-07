<?php
include './db/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['destino'];
    $fechasalida = $_POST['fechasalida'];
    $fecharegreso = $_POST['fecharegreso'];

    // Verificar que los campos no estén vacíos
    if (!empty($nombre) && !empty($fechasalida) && !empty($fecharegreso)) {
        $sql = "INSERT INTO Viajes (Destino, FechaSalida, FechaRegreso, FechaRegistro, IdViajero)
                VALUES ('$nombre', '$fechasalida', '$fecharegreso', NOW(), 1)";

        if ($conn->query($sql) === TRUE) {
            echo "Nuevo viaje registrado exitosamente";
        } else {
            echo "Error al registrar el nuevo viaje: " . $conn->error;
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
}

// Cerrar la conexión
$conn->close();
?>
