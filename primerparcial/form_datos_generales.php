<?php
    $txtNombre = "";
    $txtEdad = "";
 
    if(isset($_POST["btnEnviar"]))
    {
 
        $txtNombre = $_POST["txtNombre"] ?? "";
        $txtEdad = $_POST["txtEdad"] ?? "";
 
    }
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capturar Formulario en PHP</title>
</head>
<body>
 
    <h1>Formulario PHP</h1>
 
    <form action="" method="post">
 
        <label for="txtNombre">Nombre Completo:</label>
        <input type="text" id="txtNombre" name="txtNombre" 
        placeholder="Ingrese su nombre completo" required><br><br>
 
        <label for="txtEdad">Edad:</label>
        <input type="number" id="txtEdad" name="txtEdad"
        placeholder="Ingrese su edad" min="0" required><br><br>
 
        <button type="submit" name="btnEnviar">Enviar</button>
 
    </form>
 
    <div>
        <?php
            if($txtNombre != "" && $txtEdad != ""){
                echo "<strong>Hola " . htmlspecialchars($txtNombre) . 
                     ", tu edad es: " . htmlspecialchars($txtEdad) . " años.</strong>";
            }
        ?>
    </div>
 
</body>
</html>