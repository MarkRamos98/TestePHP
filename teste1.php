<?php 

	$texto = "micro Computador";

	$tamanho = strlen($texto);

	echo "<br/>".$texto." possui ".$tamanho." caracteres";

	echo "<br />".strtoupper($texto);

	echo "<br />".strtolower($texto);

	echo "<br />".ucfirst($texto);

	echo "<br />".ucwords($texto);

 ?>