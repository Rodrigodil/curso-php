<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 27/12/2018
 * Time: 21:15
 */
echo "<br>";
$pessoa = array(

    'nome'=>'João',
    'idade'=>20

);
foreach ($pessoa as &$value) {

    // Pega o valor inteiro e adiciona mais 10
    if (gettype($value) === 'integer') $value += 10;

    echo $value . '<br>';
}