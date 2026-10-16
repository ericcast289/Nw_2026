<?php
require_once "libreria.php";

$reservas = obtenerReservas();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reservas</title>
</head>
<body>

<h2>Reservas realizadas</h2>

<table border="1">
    <tr>
        <th>Cliente</th>
        <th>Personas</th>
        <th>Habitaciones</th>
        <th>Tipo</th>
        <th>Vista</th>
        <th>Desayuno</th>
        <th>Días</th>
        <th>Subtotal</th>
        <th>ISR 15%</th>
        <th>Hotelero 18%</th>
        <th>Total</th>
    </tr>

    <?php foreach ($reservas as $r) { ?>
    <tr>
        <td><?php echo $r["cliente"]; ?></td>
        <td><?php echo $r["personas"]; ?></td>
        <td><?php echo $r["habitaciones"]; ?></td>
        <td><?php echo $r["tipo"]; ?></td>
        <td><?php echo $r["vista"]; ?></td>
        <td><?php echo $r["desayuno"]; ?></td>
        <td><?php echo $r["dias"]; ?></td>
        <td><?php echo number_format($r["subtotal"], 2); ?></td>
        <td><?php echo number_format($r["isr"], 2); ?></td>
        <td><?php echo number_format($r["hotelero"], 2); ?></td>
        <td><?php echo number_format($r["total"], 2); ?></td>
    </tr>
    <?php } ?>

</table>

</body>
</html>