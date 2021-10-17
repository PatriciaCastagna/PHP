<?php 
/*Uma empresa de financiamentos solicitou um programa que faz simuluções de empréstimos, porém haverá taxas diferentes conforme o número de parcelas, segue elas:
Caso o cliente opite por 1 parcela, o programa acrescentará uma taxa de 15% do valor a ser emprestado
Caso o cliente opite por 6 parcelas, o programa acrescentará uma taxa de de 31,99% do valor a ser emprestado
Caso o cliente opite por 12 parcelas, o programa acrescentará uma taxa de de 47,99% do valor a ser emprestado
Caso o cliente opite por outra quantia de parcela, o programa informará que não será possivel
Ao final do programa deve ser apresentado o valor solicitado, a quantia e o valor de cada parcela e o total a ser pago.*/


$valor=500;

$parcela;

$tx1=$valor1*0.15;
$tx2=$valor2*0.3199;
$tx3=$valor3*0.4799;



if ($parcela=1) {

	$parc=($valor+$tx1);



echo <p>"O valor do empréstimo solicitado é de R$:".number_format($valor, 2 ',','.')."sera parcelado em 1x de R$:".number_format($parc, 2 ',','.'). ", o total a ser pago sera: R$:".number_format($parc, 2 ',','.')."</p>";
 


}if ($parcela=6){


    $parc=($valor+$tx2)/6;
    $totalv=valor+$tx2;


echo <p>"O valor do empréstimo solicitado é de R$:".number_format($valor, 2 ',','.')."sera parcelado em 6x de R$:".number_format($parc, 2 ',','.'). ", o total a ser pago sera: R$:".number_format($totalv, 2 ',','.')."</p>";



}if($parcela=12) {

  
$parc=($valor+$tx3)/12;
$totalv=valor+$tx3;


echo <p>"O valor do empréstimo solicitado é de R$:".number_format($valor, 2 ',','.')."sera parcelado em 12x de R$:".number_format($parc, 2 ',','.'). ", o total a ser pago sera: R$:".number_format($totalv, 2 ',','.')."</p>";

}else{

echo "<p> opção invalida,  </p>";

}






















?>