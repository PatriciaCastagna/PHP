<?php 
/*Uma empresa de financiamentos solicitou um programa que faz simuluções de empréstimos, porém haverá taxas diferentes conforme o número de parcelas, segue elas:
Caso o cliente opite por 1 parcela, o programa acrescentará uma taxa de 15% do valor a ser emprestado
Caso o cliente opite por 6 parcelas, o programa acrescentará uma taxa de de 31,99% do valor a ser emprestado
Caso o cliente opite por 12 parcelas, o programa acrescentará uma taxa de de 47,99% do valor a ser emprestado
Caso o cliente opite por outra quantia de parcela, o programa informará que não será possivel
Ao final do programa deve ser apresentado o valor solicitado, a quantia e o valor de cada parcela e o total a ser pago.*/

$valor=5000;
$tx1=$valor*0.15;
$tx2=$valor*0.3199;
$tx3=$valor*0.4799;


$emprestimo=0;

$emprestimo=array('parcela1','parcela2','parcela3');

for($count=0; $count<$emprestimo; count++){



	
while($emprestimo[0]){

$um=($valor+$tx1);
$valortotal=$valor+$tx1;	

echo "<p> + primeira opção, valor total: ".$valortotal.", parcelamento em 1 x de : ".$um."</p>";



}while($emprestimo[1]){

$seis=($valor+$tx2)/6;
$valortotal=$valor+$tx2;

echo "<p> + segunda opção, valor total: ".$valortotal.",  parcelamento em 6 x de : ".$seis."</p>";




}while($emprestimo[2]){

$doze=($valor+$tx3)/12;	
$valortotal=$valor+$tx3;

echo "<p> + terceira opção, valor total: ".$valortotal.", parcelamento em 12 x de : ".$doze."</p>";



}while{

echo "<p> opção invalida </p>";




}
 }








 ?>