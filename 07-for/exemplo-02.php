<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 04/12/2018
 * Time: 18:49
 */



echo "<select>";

//  $i e igual data atual "Y" Ano, em 4 digitos // Diminua a data de 1 em 1 $i-- ate - 100

for ($i = date("Y"); $i > date("Y") - 100; $i--){

    echo '<option value="' .$i. '">' .$i. '</option>';

}

echo "</select>";