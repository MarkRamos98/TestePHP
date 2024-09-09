<?php 

	function ContarIdd($F){

		return$Idd = $F * 1.5;

	}

	function ContarAlt($F){

		return$Alt = ($F * 1.2) + 120;

	}

	function Media($max,$min,$qua) {

		return $R = ($max + $min) / $qua 

	}

	$People = 5;
	$MaxAlt;
	$MinAlt;
	$FMaxAlt;
	$FMinAlt;
	$Midd;
	$Female;
	$Fidd;

	$F = 0;

	while ($F < $People) {
		// code...

		If (($F % 2) == 1){

			if (ContarIdd() > $Midd){

				$Midd = ContarIdd($F);

			}
		
		} else {

			if (ContarIdd() < $Fidd){

				$Fidd = ContarIdd($F);

			}

			if (ContarAlt() > $FMaxAlt){

				$FMaxAlt = ContarAlt($F);

			} if (ContarAlt() < $FMaxAlt){

				$FMinAlt = ContarAlt($F);

			}

			if (ContarAlt() > $MaxAlt){

				$MaxAlt = ContarAlt($F);

			} if (ContarAlt() < $MaxAlt){

				$MinAlt = ContarAlt($F);

			}

			$Female++;

		}

		$F++;

	}

	Media($FMaxAlt,$FMinAlt,$People)

 ?>