<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 29/11/2018
 * Time: 18:54
 */

$nome = "Rodrigo Palombo";

// Todas as Letras maiusculas
$nome = strtoupper($nome);

echo "<br>";

echo $nome;
// Todas as Letras minusculas
$nome = strtolower($nome);

echo "<br>";

echo $nome;
// Primeira letra do texto maiuscula
$nome = ucfirst($nome);

echo "<br>";

echo $nome;
// Primeira letra de cada nome maiuscula
$nome = ucwords($nome);

echo "<br>";

echo $nome;