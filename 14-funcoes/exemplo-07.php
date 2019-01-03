<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 30/12/2018
 * Time: 17:28
 */
echo "<br>";

function soma(int ...$valores) {

    // array_sum() retorna a soma dos valores de um array.
    return array_sum($valores);

}

echo soma (2, 2);
echo "<br>";
echo soma (25, 33);
echo "<br>";
echo soma (1.5, 3.2);
echo "<br>";
