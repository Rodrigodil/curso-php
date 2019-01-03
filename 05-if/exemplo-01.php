<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 02/12/2018
 * Time: 16:30
 */

// Estruturas Condicionais - if

$suaIdade = 28;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;


// Se $suaIdade 28; for menor que $idadeCrianca 12 retorne criança
/*if ($suaIdade < $idadeCrianca) {

    echo "Criança";

// se não, retorne "Não é criança"
} else {

    echo "Não e criança";

}*/

//////////////////////////////////// Usando varios else if
echo "<br>";
if ($suaIdade < $idadeCrianca) {

    echo "Criança";

} else if ($suaIdade < $idadeMaior){

    echo "Adolecente";

} else if ($suaIdade < $idadeMelhor) {

    echo "Adulto";

} else {

    echo "Idoso";
}

echo "<br>";

// ? se for verdade : alterne para "Maior de Idade"
echo ($suaIdade < $idadeMaior) ? "Menor de Idade":"Maior de Idade";