<?php 

	function verificar ($nome,$SX,$IDD){

		IF ($SX == "F" && $IDD < 25){

			echo "$nome</br>$SX</br>$IDD</br>aceito";

		} else {

			echo "$nome</br>$SX</br>$IDD</br>não aceito";

		}

	}

	verificar("jaguncio","F",64);

 ?>