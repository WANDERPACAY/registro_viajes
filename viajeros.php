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
        <h1>Viajeros</h1>
        <a class="btn btn-outline-primary" href="registroviajeros.php">Nuevo viajero</a>
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
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Imprimir los datos de cada fila
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["Nombre"] . "</td>";
                        echo "<td>" . $row["Apellido"] . "</td>";
                        echo "<td>" . $row["Correo"] . "</td>";
                        echo "<td>" . $row["Telefono"] . "</td>";
                        echo "<td>" . $row["FechaNacimiento"] . "</td>";
                        echo "<td>" . $row["Direccion"] . "</td>";
                        echo '<td><div class="d-grid gap-2 d-md-block">
                        <a class="btn btn-outline-success" href="viajes.php?id=' . $row["id"] . '">Viajes</a>
                        </div></td>';
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