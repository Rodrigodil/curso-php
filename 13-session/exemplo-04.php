<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 19/12/2018
 * Time: 19:34
 */

require_once ("config.php");
// Gera novos id de sessão
session_regenerate_id();

echo session_id();

var_dump($_SESSION);