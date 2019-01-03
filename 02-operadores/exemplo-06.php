<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 29/11/2018
 * Time: 18:06
 */

$a = NULL;
$b = NULL;

$c = 10;

// Mostra pra min 'a' mas se ela não existir mostre o 'b' se não existir mostre 'c'

echo $a ?? $b ?? $c;