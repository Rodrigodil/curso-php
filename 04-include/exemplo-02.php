<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 29/11/2018
 * Time: 20:52
 */

// include tenta funcionar mesmo que o arquivo não exista ou com erros
include "exemplo-01.php";

// include_once tras somente uma vez o arquivo
include_once "exemplo-01.php";

// require obriga que o arquivo incluido exista e esteja funcionando corretamente ou tera erro fatal
require "exemplo-01.php";

// require_once tras somente uma vez o arquivo
require_once "exemplo-01.php";

function somar($a, $b) {

    return $a + $b;

}

$resultado = somar(10, 20);

echo $resultado;