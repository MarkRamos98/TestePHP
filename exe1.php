<?php 

	function se ($resp) {
		
		if ($resp > 20){

			$so = $resp + 8;

			echo "$resp + 8 = $so";

		} else {

			$so = $resp - 5;

			echo "$resp - 5 = $so";

		}

	}

	function somar ($num1,$num2){
			
			return $resp = $num1 + $num2;

		}

		se(somar(3,2));

 ?>