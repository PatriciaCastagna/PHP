<?php 
/*Faça um programa em PHP que receba o nome e a idade de uma pessoa, o programa deve informar se essa é menor ou maior de idade, ou se é idoso.*/

$nome = "Patricia";
$idade = 80;

if ($idade < 18) {
	echo "De menor";

} elseif ($idade < 65) {
    echo "Adulto";

} else {
    echo "Idoso";

}


 ?>