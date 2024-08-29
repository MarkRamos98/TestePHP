<?php 
	//criando uma função
	function soma (){
			
			$num1 = 10;
			$num2 = 20;
			$resp = $num1 + $num2;
			echo $resp;

	}
	

	//criando uma função
	function somar ($num1,$num2){
			
			$resp = $num1 + $num2;
			echo $resp;

	}

	// executando a função
	soma();

	echo "<br />";

	// executando a função com parâmetros
	somar(10,20);

 ?>