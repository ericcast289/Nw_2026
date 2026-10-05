<?php

require_once "library.php";

$txtNombre = "";
$txtApellido = "";
$txtTelefono = "";

if (isset($_POST['btnEnviar'])) {
    $txtNombre = $_POST["txtnombre"] ?? '';
    $txtApellido = $_POST["txtapellido"] ?? '';
    $txtTelefono = $_POST["txttelefono"] ?? '';

    addContact($txtNombre, $txtApellido, $txtTelefono);
}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="form.php" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre"
    placeholder="Nombre Completo" value="<?php echo $_POST['txtnombre'] ?? ''; ?>"
    <br>
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido"
    placeholder="Apellido" value="<?php echo $_POST['txtapellido'] ?? ''; ?>"
    <br>
    <label for="telefono">Teléfono</label>
    <input type="text" name="telefono" id="telefono"
    placeholder="Número de Teléfono" value="<?php echo $_POST['txttelefono'] ?? ''; ?>"
    <br>
    <input type="submit" value="Enviar">
    </form>

</body>
</html>