<?php 

	$num = array(1,2,3,4,5);

	foreach($num as $valor){

		echo "Valor é $valor <br />";

	}

	$num[0] = "Um";
	$num[1] = "Dois";
	$num[2] = "Três";
	$num[3] = "Quatro";
	$num[4] = "Cinco";

	foreach ($num as $valor) {
		
		echo "Valor é $valor <br />";

	}

 ?>