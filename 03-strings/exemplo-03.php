<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 29/11/2018
 * Time: 19:01
 */

// Trocar

$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);

echo $empresa;