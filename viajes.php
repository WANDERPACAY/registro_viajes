<?php
require_once 'db/conn.php';

if (isset($_GET['id'])) {
    $idViajero = $_GET['id'];
    // Consulta para seleccionar todos los registros de la tabla Viajeros
    $sql = "SELECT * FROM Viajes WHERE IdViajero = $idViajero";
    $result = $conn->query($sql);
} else {
    echo "ID de viajero no especificada en la URL.";
}
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
        <h1>Viajes Realizados</h1>
        <a class="btn btn-outline-primary" href="registroviajes.php">Nuevo Viaje</a>
        <a class="btn btn-outline-warning" href="viajeros.php">Regresar</a>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>No. Viaje</th>
                    <th>Destino</th>
                    <th>Fecha Salida</th>
                    <th>Fecha Retorno</th>
                    <th>Fecha Registro</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Imprimir los datos de cada fila
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["Id"] . "</td>";
                        echo "<td>" . $row["Destino"] . "</td>";
                        echo "<td>" . $row["FechaSalida"] . "</td>";
                        echo "<td>" . $row["FechaRegreso"] . "</td>";
                        echo "<td>" . $row["FechaRegistro"] . "</td>";
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