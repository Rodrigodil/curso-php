<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 27/11/2018
 * Time: 19:37
 */

// Variaveis Pré-definidas ou Arrays super globais

// (int) converte de string para int
// http://localhost/curso/curso-php/variaveis/exemplo-04.php?a=123&b=456

$nome = (int)$_GET["a"];

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];

echo $ip;