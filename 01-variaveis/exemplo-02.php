<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 26/11/2018
 * Time: 16:08
 */

// Tipos de dados

$anoNascimento = 1990;

$nome = "Rodrigo";
$sobreNome = "Palombo Chisté";

$nomeCompleto = $nome . " " . $sobreNome . " " . $anoNascimento;

echo $nomeCompleto;
exit; //PHP para de ler aqui


echo "<br/>";

// unset - destroi a variavel
unset($nomeCompleto);


// isset se a variavel existir
if (isset($nomeCompleto)) {

    echo $nomeCompleto;
}

