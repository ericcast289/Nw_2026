<?php
$numero = 0;
$invertir = false;
$mensaje = "";
$resultado = "";

if(isset($_POST["btnMostrar"])){

    $numero = $_POST["cmbNumero"] ?? 0;
    $mensaje = $_POST["txtMensaje"] ?? "";

    $invertir = isset($_POST["chkInvertir"]);

    if($invertir){
        // Descendente
        for($i = $numero; $i >= 1; $i--){
            $resultado .= $i . " " . $mensaje . "<br>";
        }
    }else{
        // Ascendente
        for($i = 1; $i <= $numero; $i++){
            $resultado .= $i . " " . $mensaje . "<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iteraciones PHP</title>
</head>
<body>

<h2>Iteraciones con PHP</h2>

<form method="post">

    <label>Seleccione el valor a iterar:</label>
    <select name="cmbNumero">
        <?php
        for($x = 1; $x <= 10; $x++){
            echo "<option value='$x'>$x</option>";
        }
        ?>
    </select>

    <br><br>

    <label>Escriba un mensaje:</label>
    <input type="text" name="txtMensaje" required>

    <br><br>

    <input type="checkbox" name="chkInvertir">
    <label>Iterar Inversamente (Descendente)</label>

    <br><br>

    <input type="submit" name="btnMostrar" value="Mostrar">

</form>

<hr>

<?php
if($resultado != "")
    {

    if($invertir){
        echo "<h3>Descendente</h3>";
    }else{
        echo "<h3>Ascendente</h3>";
    }

    echo $resultado;
}
?>

</body>
</html>