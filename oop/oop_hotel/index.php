<?php
session_start();

require_once "src/Reserva.php";

use Poo_hotel\src\Reserva;

if (!isset($_SESSION["reservas"])) {
    $_SESSION["reservas"] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $reserva = new Reserva(
        $_POST["cliente"],
        $_POST["habitacion"],
        $_POST["entrada"],
        $_POST["salida"]
    );

    $_SESSION["reservas"][] = serialize($reserva);

    header("Location: listado.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reserva de Hotel</title>
</head>
<body>

<h2>Registro de Reserva</h2>

<form method="post">

    <label>Cliente:</label><br>
    <input type="text" name="cliente" required><br><br>

    <label>Habitación:</label><br>
    <select name="habitacion" required>
        <option>Simple</option>
        <option>Doble</option>
        <option>Suite</option>
    </select><br><br>

    <label>Fecha Entrada:</label><br>
    <input type="date" name="entrada" required><br><br>

    <label>Fecha Salida:</label><br>
    <input type="date" name="salida" required><br><br>

    <button type="submit">
        Guardar Reserva
    </button>

</form>

<br>

<a href="listado.php">Ver Reservas</a>

</body>
</html>