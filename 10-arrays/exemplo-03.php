<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 10/12/2018
 * Time: 21:38
 */

// Arrays dentro de array

$pessoas = array();

array_push($pessoas, array(
    'nome'=>'Rodrigo',
    'idade'=>25
));

array_push($pessoas, array(
    'nome'=>'João',
    'idade'=>30

));

var_dump($pessoas);
print_r($pessoas);
print_r($pessoas[0]['nome']);