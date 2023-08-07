<?php
require_once 'db/conn.php';

// Consulta para seleccionar todos los registros de la tabla Viajeros
$sql = "SELECT * FROM Viajeros";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Fecha Nacimiento</th>
                    <th>Direccion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Imprimir los datos de cada fila
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td> ID: " . $row["id"] . "</td>";
                        echo "<td>Nombre: " . $row["Nombre"] . "</td>";
                        echo "<td>Apellido: " . $row["Apellido"] . "</td>";
                        echo "<td>Correo: " . $row["Correo"] . "</td>";
                        echo "<td>Teléfono: " . $row["Telefono"] . "</td>";
                        echo "<td>Fecha de Nacimiento: " . $row["FechaNacimiento"] . "</td>";
                        echo "<td>Dirección: " . $row["Direccion"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "No se encontraron registros.";
                }
                ?>

            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>