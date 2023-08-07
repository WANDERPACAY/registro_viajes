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
<form class="content" method="post" action="newviajero.php">
    <h1>Registro Viajeros</h1>
    <div class="input-group">
        <span class="input-group-text">Nombre</span>
        <input type="text" aria-label="Nombre" class="form-control name" name="nombre">
    </div>
    <div class="input-group">
        <span class="input-group-text">Apellido</span>
        <input type="text" aria-label="Apellido" class="form-control" name="apellido">
    </div>
    <div class="input-group">
        <span class="input-group-text">Correo</span>
        <input type="email" aria-label="Correo" class="form-control" name="correo">
    </div>
    <div class="input-group">
        <span class="input-group-text">Telefono</span>
        <input type="number" aria-label="Telefono" class="form-control" name="telefono">
    </div>
    <div class="input-group">
        <span class="input-group-text">Fecha Nacimiento</span>
        <input type="date" aria-label="Fecha Nacimiento" class="form-control" name="fecha_nacimiento">
    </div>
    <div class="input-group">
        <span class="input-group-text">Direccion</span>
        <input type="text" aria-label="Direccion" class="form-control" name="direccion">
    </div>
    <div class="d-grid d-md-flex justify-content-md-end">
        <input class="btn btn-outline-primary" type="submit" value="Registrar">
    </div>
</form>

</body>

</html>