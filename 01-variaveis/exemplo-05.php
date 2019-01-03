<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 27/11/2018
 * Time: 19:54
 */

// Escopo de Variavel

$nome = "Rodrigo";

function teste() {

    global $nome;
    echo $nome;

}

function teste2 () {

    $nome = "Dil";
    echo $nome . "agora no teste2";

}

teste();
teste2();