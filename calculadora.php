<?php 

	function ad ($num1,$num2){
			
			return ($num1 + $num2);
				}
	function sub ($num1,$num2){
			
			return ($num1 - $num2);
				}
	function mult ($num1,$num2){
			
			return ($num1 * $num2);
				}
	function div ($num1,$num2){
			
			return ($num1 / $num2);
				}

	echo "Qual operação você deseja?(responda com o número correspondente)<br/>
	1- sub<br/>
	2- ad<br/>
	3- mult<br/>
	4- div<br/><br/>";

	$op = "mult";

	echo = "mult<br/><br/>";

	echo "E quais os números a serem calculados?";

	$num1 = 9;

	$num2 = 3;

	if($op == 1) {

		sub($num1,$num2);

		echo $num1 "-" $num2

	} else if($op == 2) {

		ad($num1,$num2);

		echo $num1 "+" $num2

	} else if($op == 3) {

		mult($num1,$num2);

		echo $num1 "*" $num2

	} else if($op == 4) {

		div($num1,$num2);

		echo $num1 "/" $num2

	} else {

		echo "Digite um número válido se não for doer seu dedo"

	}

	echo 

 ?>