<?php  

/*A empresa ABC solicitou um programa para calcular o salario de seus funcionarios porém deve se levar em consideração algumas regras de negócio e peculiaridades da empresa, segue abaixo:

Deve-se aplicar ao valor bruto do salário os descontos de INSS(11%) e o valor que será recolhido pela empresa de FGTS(9%).

Caso o valor bruto do salário seja maior que 1.904,00 reais deve ser aplicado um desconto de IRRF no valor de 7,5%.

Caso o valor bruto do salário seja maior que 2.826,00 reais deve ser aplicado um desconto de IRRF no valor de 15% .

Caso o valor bruto do sálario não ultrapssse as regras do IRRF o programa não deve descontar nenhum valor a mais do salário.

No final do programa deve ser apresentado o valor do salário bruto e liquído, com seus respectivos descontos, caso obtiverem.*/






$salarioB=5000;

$salarioL=$salarioB-($salarioB*0.11);

$fgts=($salarioB*0.9)/100;

################################################################################################################################

if ($salarioB < 1904) {

echo "Sem desconto de IRRF";

} elseif ($salarioB > 2826){


$IRRF2=($salarioB*0.15)/100;
echo "Salario acima de 2.826,,00 reais, desconto de:".$IRRF2." reais referente ao IRFF";print "<br>";


} else {
  
$IRRF1=($salarioB*7.5)/100;
echo " Salario acima de 1.904,00 reais, desconto de:".$IRRF1." reais referente ao IRRF";print "<br>";


}



echo "O salario bruto é: ".$salarioB." Reais"; print "<br>";
echo "O salario liquido é: ".$salarioL." Reais"; print "<br>";
echo "O fgts recolhido é: ".$fgts." Reais, este não é descontado "; print "<br>";





?> 