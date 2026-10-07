<?php

//Arreglos
$arrOrdinal = [];
$arrOrdinal[] = "Hola";
$arrOrdinal[] = 123;
$arrOrdinal[5] = "Captain Planet";
$arrOrdinal[] = "Este sera el indice ???";
//
//for ($i = 0; $i < 6; $i++) {
//    echo $arrOrdinal[$i];
//}

foreach($arrOrdinal as $valor) {
    echo sprintf("Valor: %s <br/>", $valor);
}
echo "<hr/>";
print_r($arrOrdinal);

$arrPersona = [];

$arrPersona["nombre"] = "Eric";
$arrPersona["apellido"] = "Cartman";
$arrPersona["telefono"] = "0000-0000";
$arrPersona["correo"] = "eric.cartman@example.com";

$arrPersona2 = [];
$arrPersona2["nombre"] = "Stan";
$arrPersona2["apellido"] = "Marsh";
$arrPersona2["telefono"] = "1111-1111";
$arrPersona2["correo"] = "stan.marsh@example.com";

$arrPersonas = [];
$arrPersonas[] = $arrPersona;
$arrPersonas[] = $arrPersona2;

echo "<pre>";
echo json_encode($arrPersona,JSON_PRETTY_PRINT);
echo "</pre>";

foreach($arrPersonas as $persona) {
    echo "<hr/>";
    foreach($persona as $columna => $valorCampo) {
        echo sprintf("%s: %s;<br/>", $columna, $valorCampo);
    }
}
