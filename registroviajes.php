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
    <form class="content" method="post" action="newviaje.php">
        <h1>Registro Viajes</h1>
        <div class="input-group">
            <span class="input-group-text">Destino</span>
            <input type="text" aria-label="Nombre" class="form-control" name= "destino">
        </div>
        <div class="input-group">
            <span class="input-group-text">Fecha de salida</span>
            <input type="date" aria-label="Apellido" class="form-control" name="fechasalida">
        </div>
        <div class="input-group">
            <span class="input-group-text">Fecha de regreso</span>
            <input type="date" aria-label="Correo" class="form-control" name="fecharegreso">
        </div>
        <div class="d-grid d-md-flex justify-content-md-end">
            <input class="btn btn-outline-primary" type="submit" value="Registrar">
        </div>
    </form>
</body>

</html>