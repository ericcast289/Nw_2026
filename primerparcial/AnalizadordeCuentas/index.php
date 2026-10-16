<?php
require_once("libreria.php");

$resultado = [];

if(isset($_POST['procesar']))
{
    $texto = $_POST['texto'];
    $resultado = extraerCuentas($texto);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Extraer Cuentas</title>
</head>
<body>

<h2>Extracción de Números de Cuenta</h2>

<form method="post">
    <textarea name="texto" rows="15" cols="100"></textarea><br><br>
    <input type="submit" name="procesar" value="Procesar">
</form>

<?php
if(count($resultado) > 0)
{
    echo "<h3>Cuentas encontradas:</h3>";

    foreach($resultado as $cuenta)
    {
        echo $cuenta . "<br>";
    }

    echo "<br><b>Total de cuentas: ".count($resultado)."</b>";
}
?>

</body>
</html>