<?php
     $num1 = "";
     $num2 = "";
     $resultado = "";

        function factorial($n)
        {
            $fact = 1;
    
            for($i = 1; $i <= $n; $i++)
            {
                $fact = $fact * $i;
            }
    
            return $fact;
        }

    if(isset($_POST["btnOperacion"])){

        $num1 = $_POST["txtNum1"] ?? 0.00;
        $num2 = $_POST["txtNum2"] ?? 0.00;

        $operacion = $_POST["btnOperacion"];

        switch($operacion){

            case "Sumar":
                $resultado = $num1 + $num2;
                $mensaje = "La suma es: " . $resultado;
            break;

            case "Restar":
                $resultado = $num1 - $num2;
                $mensaje = "La resta es: " . $resultado;
            break;

            case "Multiplicar":
                $resultado = $num1 * $num2;
                $mensaje = "La multiplicación es: " . $resultado;
            break;

            case "Dividir":

                if($num2 != 0)
                {
                    $resultado = $num1 / $num2;
                    $mensaje = "La división es: " . $resultado;
                }else
                {
                    $mensaje = "No se puede dividir entre cero";
                }

            break;

            case "Factorial":

                $suma = $num1 + $num2;
                $resultado = factorial($suma);

                $mensaje = "El factorial de la suma (" . $suma . ") es: " . $resultado;

            break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones PHP</title>
</head>
<body>
    <h2>Formulario de Operaciones</h2>

    <form method="POST">

    <label for="txtNum1">Número 1:</label>
    <input type="number" id="txtNum1" name="txtNum1" value="<?php echo $num1; ?>" required>
    <br><br>

    <label for="txtNum2">Número 2:</label>
    <input type="number" id="txtNum2" name="txtNum2" value="<?php echo $num2; ?>" required>
    <br><br>

    <button type="submit" name="btnOperacion" value="Sumar">Sumar</button>

    <button type="submit" name="btnOperacion" value="Restar">Restar</button>

    <button type="submit" name="btnOperacion" value="Multiplicar">Multiplicar</button>

    <button type="submit" name="btnOperacion" value="Dividir">Dividir</button>

    </form>

    <br>

<?php
    if(isset($mensaje)){
        echo "<h3>" . $mensaje . "</h3>";
    }

?>
    
</body>
</html>
