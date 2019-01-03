<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 10/12/2018
 * Time: 21:51
 */

$json = '[{"nome":"Rodrigo","idade":25},{"nome":"Jo\u00e3o","idade":30}]';

// Transforma json em array - colocar true para não virar objeto
$data = json_decode($json, true);

var_dump($data);

print_r($data);