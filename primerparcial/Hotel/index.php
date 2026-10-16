<?php
require_once "libreria.php";

$tipos = getTiposHabitacion();
$opciones = getOpciones();

if (isset($_POST["btnGuardar"])) {

    $cliente = $_POST["cliente"];
    $personas = $_POST["personas"];
    $habitaciones = $_POST["habitaciones"];
    $tipo = $_POST["tipo"];
    $vista = $_POST["vista"];
    $desayuno = $_POST["desayuno"];
    $dias = $_POST["dias"];

    $tipoH = $tipos[$tipo];
    $vistaH = $opciones["vista"][$vista];
    $desaH = $opciones["desayuno"][$desayuno];

    $subtotal = (
        $tipoH["precio"] +
        $vistaH["precio"] +
        $desaH["precio"]
    ) * $habitaciones * $dias;

    $isr = $subtotal * 0.15;
    $hotelero = $subtotal * 0.18;

    $total = $subtotal + $isr + $hotelero;

    $reserva = [
        "cliente" => $cliente,
        "personas" => $personas,
        "habitaciones" => $habitaciones,
        "tipo" => $tipoH["nombre"],
        "vista" => $vistaH["nombre"],
        "desayuno" => $desaH["nombre"],
        "dias" => $dias,
        "subtotal" => $subtotal,
        "isr" => $isr,
        "hotelero" => $hotelero,
        "total" => $total
    ];

    nuevaReserva($reserva);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hotel Reserva</title>
</head>
<body>

<h2>Formulario de Reserva</h2>

<form method="post">

Cliente: <input type="text" name="cliente"><br><br>

Personas: <input type="number" name="personas"><br><br>

Habitaciones: <input type="number" name="habitaciones"><br><br>

Tipo:
<?php echo generarSelect("tipo", $tipos); ?>
<br><br>

Vista:
<?php echo generarSelect("vista", $opciones["vista"]); ?>
<br><br>

Desayuno:
<?php echo generarSelect("desayuno", $opciones["desayuno"]); ?>
<br><br>

Días: <input type="number" name="dias"><br><br>

<button type="submit" name="btnGuardar">Reservar</button>

</form>

<br>
<a href="tabla.php">Ver Reservas</a>

</body>
</html>