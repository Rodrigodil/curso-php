<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 06/12/2018
 * Time: 20:03
 */

$valorProduto = 14500.00;
$desconto = 5; // 5% de desconto em programação é * 0.05, para isso divida esse valor por 100

if ($valorProduto > 1000) {

// Ordem da soma 0,05 * 14500 - 725 = 13775
    echo $valorProduto = $valorProduto - ($valorProduto * ($desconto / 100));

}