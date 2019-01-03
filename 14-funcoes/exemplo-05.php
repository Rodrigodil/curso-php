<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 27/12/2018
 * Time: 17:54
 */
echo "<br>";
// Variavel
$a = 10;

// Parametro de função
function trocaValor($a){

// & passagem de parâmetro por referência
//function trocaValor(&$a){

    $a += 50;

    return $a;

}

echo trocaValor($a);
echo "<br>";
echo $a;