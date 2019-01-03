<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 30/12/2018
 * Time: 17:34
 */

echo "<br>";

function soma(float ...$valores):float {

    // array_sum() retorna a soma dos valores de um array.
    return array_sum($valores);

}

echo var_dump(soma (2, 2));
echo "<br>";
echo soma (25, 33);
echo "<br>";
echo soma (1.5, 3.2);
echo "<br>";
