<?php

function extraerCuentas($texto)
{
    $partes = preg_split('/[\s]+/', $texto);

    $cuentas = [];

    foreach ($partes as $parte) {
        if (preg_match('/^\d{13}$/', $parte)) {
            $cuentas[] = $parte;
        }
    }

    return $cuentas;
}
?>