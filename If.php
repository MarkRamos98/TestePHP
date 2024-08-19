<?php 

	$salario = 2100;

	$desconto = 0;

	echo "Seu salario: $salario <br/>";

	if ( $salario <= 1500 ){

		$desconto = $salario * 0.1;
		echo "Desconto: 10% <br/>";
		echo "Desconto do salario: $desconto" * 0,1;

	} else if ( $salario > 1500 && $salario <= 1600 ){

		$desconto = $salario * 0.15;
		echo "Desconto: 15% <br/>";
		echo "Desconto do salario: $desconto" * 0,15;

	} else if ( $salario > 1600 && $salario <= 1800 ){

		$desconto = $salario * 0.2;
		echo "Desconto: 20% <br/>";
		echo "Desconto do salario: $desconto" * 0,2;

	} else if ( $salario > 1800 && $salario <= 2500 ){

		$desconto = $salario * 0.275;
		echo "Desconto: 27,5% <br/>";
		echo "Desconto do salario: $desconto";

	}

 ?>