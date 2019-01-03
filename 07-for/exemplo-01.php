<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 03/12/2018
 * Time: 21:23
 */


echo "<br>";

// $i e igual a 0, se o $i for menor que 1000, some de 5 em 5 até chegar em 995


for ($i = 0; $i < 1000; $i += 5) {

    if ($i > 200 && $i < 800) continue;

    if ($i === 900) break;

    echo $i . "<br>";
}