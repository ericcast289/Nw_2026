<?php
session_start();

function getTiposHabitacion()
{
    return [
        "STD" => ["nombre" => "Estándar", "precio" => 50.00],
        "DLX" => ["nombre" => "Deluxe", "precio" => 80.00],
        "SUI" => ["nombre" => "Suite", "precio" => 120.00]
    ];
}

function getOpciones()
{
    return [
        "vista" => [
            "SI" => ["nombre" => "Con Vista", "precio" => 20.00],
            "NO" => ["nombre" => "Sin Vista", "precio" => 0.00]
        ],
        "desayuno" => [
            "SI" => ["nombre" => "Con Desayuno", "precio" => 15.00],
            "NO" => ["nombre" => "Sin Desayuno", "precio" => 0.00]
        ]
    ];
}

function generarSelect($name, $array, $useKey = true)
{
    $html = "<select name='$name'>";

    foreach ($array as $key => $item) {
        if ($useKey) {
            $html .= "<option value='$key'>{$item['nombre']}</option>";
        } else {
            $html .= "<option value='$key'>$item</option>";
        }
    }

    $html .= "</select>";
    return $html;
}

function nuevaReserva($reserva)
{
    if (!isset($_SESSION["reservas"])) {
        $_SESSION["reservas"] = [];
    }

    $_SESSION["reservas"][] = $reserva;
}

function obtenerReservas()
{
    return $_SESSION["reservas"] ?? [];
}