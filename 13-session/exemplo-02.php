<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 19/12/2018
 * Time: 19:08
 */

require_once ("config.php");
//session_start();


// Limpa todas as variaveis de sessões
//session_unset();

// Limpa somente a variavel da sessão nome
session_unset($_SESSION["nome"]);

// Destroi a variavel nome para ter um novo acesso
session_destroy($_SESSION["nome"]);

echo $_SESSION["nome"];