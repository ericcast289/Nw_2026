<?php
session_start();
require_once "src/Reserva.php";

$reservas = $_SESSION["reservas"] ?? [];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listado de Reservas</title>

    <style>
        table{
            border-collapse: collapse;
            width: 80%;
        }

        th,td{
            border:1px solid black;
            padding:8px;
        }

        th{
            background:#ddd;
        }
    </style>

</head>
<body>

<h2>Listado de Reservas</h2>

<table>

    <tr>
        <th>Cliente</th>
        <th>Habitación</th>
        <th>Fecha Entrada</th>
        <th>Fecha Salida</th>
    </tr>

    <?php foreach($reservas as $item): ?>

        <?php $reserva = unserialize($item); ?>

        <tr>
            <td><?= $reserva->getCliente(); ?></td>
            <td><?= $reserva->getHabitacion(); ?></td>
            <td><?= $reserva->getFechaEntrada(); ?></td>
            <td><?= $reserva->getFechaSalida(); ?></td>
        </tr>

    <?php endforeach; ?>

</table>

<br>

<a href="index.php">Nueva Reserva</a>

</body>
</html>