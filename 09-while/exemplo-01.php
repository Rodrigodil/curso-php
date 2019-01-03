<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 06/12/2018
 * Time: 19:41
 */
echo "<br>";

// while enquanto for true repita

$condicao = true;

while ($condicao) {

    $numero = rand(1, 100);

    // Quando for 3 pare
    if ($numero === 3) {

        echo "Três!";
        $condicao = false;

    }
// espaço entre os numeros
    echo $numero . " - ";
}