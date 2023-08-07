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
<form class="content" method="get" action="viajeros.php">
    <h1>Registro Viajeros</h1>
    <div class="input-group">
        <span class="input-group-text">Nombre</span>
        <input type="text" aria-label="Nombre" class="form-control">
    </div>
    <div class="input-group">
        <span class="input-group-text">Apellido</span>
        <input type="text" aria-label="Apellido" class="form-control">
    </div>
    <div class="input-group">
        <span class="input-group-text">Correo</span>
        <input type="text" aria-label="Correo" class="form-control">
    </div>
    <div class="input-group">
        <span class="input-group-text">Telefono</span>
        <input type="text" aria-label="Telefono" class="form-control">
    </div>
    <div class="input-group">
        <span class="input-group-text">Fecha Nacimiento</span>
        <input type="text" aria-label="Fecha Nacimiento" class="form-control">
    </div>
    <div class="input-group">
        <span class="input-group-text">Direccion</span>
        <input type="text" aria-label="Direccion" class="form-control">
    </div>
    <div class="d-grid d-md-flex justify-content-md-end">
        <input class="btn btn-outline-primary" type="submit" value="Registrar">
    </div>
</form>

</body>

</html>