<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 29/11/2018
 * Time: 19:05
 */

$frase = "A repetição é a mãe da retenção.";

$palavra = "mãe";

// Conta quantas casas ate chegar em mãe
$q = strpos($frase, $palavra);

var_dump($q);

// Mostra a frase antes de mãe
$texto = substr($frase, 0, $q);

var_dump($texto);

// Mostra a frase seguinte a mãe
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($texto2);