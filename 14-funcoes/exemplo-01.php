<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 20/12/2018
 * Time: 19:17
 */

// função e o nome da função "ola"
function ola(){

    echo "Olá Mundo!<br>";

}
// Chama a função
ola();

function ola(){

    return "Olá Mundo!<br>";

}

echo ola();