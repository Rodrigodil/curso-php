<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 06/12/2018
 * Time: 19:50
 */

$total = 100;
$desconto = 0.9;
// Pelo menos uma vez o desconto
// faça do, pegue o total, e igual ele mesmo vezes o desconto

do {

    $total *= $desconto;

    // Apenas enquanto o total for acima de 100
} while ($total > 100);

echo $total;