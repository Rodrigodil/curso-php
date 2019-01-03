<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 02/12/2018
 * Time: 20:55
 */

// Switch case
date_default_timezone_set ("America/Sao_Paulo");
// "w" Representação numérica do dia da semana, 0 (para domingo) até 6 (para sábado)

$diaDaSemana = date("w");

switch ($diaDaSemana) {
// Caso caia o valor 0, mostrar "Domingo"
    case 0:
        echo "Domingo";
        break;

    case 1:
        echo "Segunda";
        break;

    case 2:
        echo "Terça";
        break;

    case 3:
        echo "Quarta";
        break;

    case 4:
        echo "Quinta";
        break;

    case 5:
        echo "Sexta";
        break;

    case 6:
        echo "Sabado";
        break;

        // default se caso não cair nenhum valor acima
    default:
        echo "Data inválida";
        break;

}

