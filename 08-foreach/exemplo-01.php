<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 04/12/2018
 * Time: 19:09
 */
echo "<br>";
$meses = array (
    "Janeiro", "Fevereiro", "Março",
    "Abril", "Maio", "Junho",
    "Julho", "Agosto", "Setembro",
    "Outubro", "Novembro", "Dezembro"
);

// foreach, para cada $mes
foreach ($meses as $index => $mes) {

    echo "Indice: ".$index. "<br>";
    echo "O mês é: " . $mes . "<br><br>";

}