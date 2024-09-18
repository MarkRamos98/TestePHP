3<?php 

	function ContarIdd($F){

		return$Idd = $F * 1.5;

	}

	function ContarAlt($F){

		return$Alt = ($F * 1.2) + 120;

	}

	function Media($max,$min,$qua) {

		return $R = (($max + $min) / $qua);

	}

	$People = 5;
	$MaxAlt = 0;
	$MinAlt = 0;
	$FMaxAlt = 0;
	$FMinAlt = 0;
	$Midd = 0;
	$Female = 0;
	$Fidd = 0;
	$ContarIdd;
	$ContarAlt;

	$F = 0;

	$ContarIdd = ContarIdd($F);
	$ContarAlt = ContarAlt($F);

	while ($F < $People) {
		// code...

		If (($F % 2) == 1){

			if ($ContarIdd > $Midd){

				$Midd = $ContarIdd;

			}
		
		} else {

			if ($ContarIdd < $Fidd){

				$Fidd = $ContarIdd;

			}

			if ($ContarAlt > $FMaxAlt){

				$FMaxAlt = $ContarAlt;

			} if ($ContarAlt < $FMaxAlt){

				$FMinAlt = $ContarAlt;

			}

			$Female++;

		}

		if ($ContarAlt > $MaxAlt){

			$MaxAlt = $ContarAlt;

		} if ($ContarAlt < $MaxAlt){

			$MinAlt = $ContarAlt;

		}

		$F++;

	}

	$Mid = Media($FMaxAlt,$FMinAlt,$Female);

	echo "A maior altura é: $MaxAlt e a menor é: $MinAlt</br>A média de altura de mulheres é: $Mid</br>U homi mai veiu tem: $Midd i a muie mai nova é: $Fidd";

 ?>