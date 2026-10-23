<?php

require_once("vendor/autoload.php");

use Unicah\Oop\Math\Point as MPoint;
use Unicah\Oop\Shapes\Point as SPoint;

use Unicah\Oop\Security;

use Unicah\Oop\Security\UserPasswordAuth;
use Unicah\Oop\Security\UserPasswordFromTokenAuth;
use Unicah\Oop\Security\JWTAuth;

$instanciaUnaClase = new Unicah\Oop\UnaClase();

$instanciaUnaClase->printHola();

$MPuntoA = new MPoint(0, 0);
$MPuntoB = new MPoint(10, 10);

echo sprintf(
    "La distancia entre %s y %s es %f <hr/>",
    $MPuntoA->toString(),
    $MPuntoB->toString(),
    $MPuntoA->distance($MPuntoB)
);

$SPuntoA = new SPoint(-10, 0);
$SPuntoB = new SPoint(20, 20);

echo sprintf(
    "Punto a: <br/> %s <br/> Punto b: <br/> %s",
    $SPuntoA->toString(),
    $SPuntoB->toString()
);

echo '<hr\> <h2>Herencia</h2>';

$basicAuth = new UserPasswordAuth();
$tokenAuth = new UserPasswordFromTokenAuth();
$jwtAuth = new JWTAuth();

$basicAuth->setUserAndPassword('admin','');
$tokenAuth->getUserAndPasswordFromToken('admin|pwd1234.1AB');
$jwtAuth->setJWT('');

echo 'La validacion de basicAuth: ' . ($basicAuth->authorize() ? 'OK' : 'No valido') . '<br/>';
echo 'La validacion de tokenAuth: ' . ($tokenAuth->authorize() ? 'OK' : 'No valido') . '<br/>';
echo 'La validacion de jwtAuth: ' . ($jwtAuth->authorize() ? 'OK' : 'No valido'). '<br/>';

$basicAuth->registerNext($jwtAuth);
$jwtAuth->registerNext($tokenAuth);

echo '<hr>La validacion de Chain of Responsibility: ' . ($basicAuth->authorize() ? 'OK' : 'No valido') . '<br/>';