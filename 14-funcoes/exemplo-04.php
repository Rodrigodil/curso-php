<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 27/12/2018
 * Time: 17:17
 */

function ola(){

    $argumentos = func_get_args();
    return $argumentos;

}

var_dump(ola("Bom dia"));