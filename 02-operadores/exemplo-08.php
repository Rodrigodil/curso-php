<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 29/11/2018
 * Time: 18:17
 */

// Ordem de 02-operadores, adicione ( valor ) para somar primeiro

$resultado = (10 + 2) / 2;


$resultado2 = (10 + 2) / 2 > 5 && 10 + 5 < 3;

// o simbolo || equivale a um ou outro
$resultado3 = (10 + 2) / 2 > 5 || 10 + 5 < 3;

echo "<br>";

echo $resultado;

echo "<br>";

var_dump($resultado2);