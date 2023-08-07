<?php
require_once 'db/conn.php';

// Consulta para seleccionar todos los registros de la tabla Viajeros
$sql = "SELECT * FROM Viajeros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Imprimir los datos de cada fila
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Nombre: " . $row["Nombre"] . "<br>";
        echo "Apellido: " . $row["Apellido"] . "<br>";
        echo "Correo: " . $row["Correo"] . "<br>";
        echo "Teléfono: " . $row["Telefono"] . "<br>";
        echo "Fecha de Nacimiento: " . $row["FechaNacimiento"] . "<br>";
        echo "Dirección: " . $row["Direccion"] . "<br><br>";
    }
} else {
    echo "No se encontraron registros.";
}

// Cerrar la conexión
$conn->close();
?>
