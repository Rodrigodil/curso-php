<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 10/12/2018
 * Time: 21:48
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
// Transforma array em json
echo json_encode($pessoas);