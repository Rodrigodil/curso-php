<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 26/11/2018
 * Time: 16:37
 */
// Variaveis Básicas
$nome = "Rodrigo";
$site = 'www.rodrigodil.com';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

/////////////////////////////////////////////////
// Variaveis compostas

$frutas = array("abacaxi", "laranja", "manga");

//echo $frutas[0];
//var_dump($frutas);

$nascimento = new DateTime();

//var_dump($nascimento);

$arquivo = fopen("exemplo-03.php", "r");

//var_dump($arquivo);


// Variaveis especiais

$nulo = NULL; // Ausência de valor
$vazio = ""; // Foi iniciado sem informação