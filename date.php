<?php 

	date_default_timezone_set('UTC');

	$dataAtual = date("d/m/Y");

	echo "<br/>Hoje é: ".$dataAtual." <br/>";

	$hora = date("h:i:s");

	echo "<br/> Agora são: ".$hora."<br/>";

	$dataHora = date("d/m/Y h:i:s");

	echo "<br/>Data e Hora: ".$dataHora."<br/>"

 ?>