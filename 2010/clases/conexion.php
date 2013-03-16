<?php
	
	$usuario = "icc";
	$pass = "webicc2003"; 
	$bd = "colimaedo";
	$host = "localhost";
	$conecta = mysql_connect($host,$usuario,$pass) or die("Error al conectar a la bd");
	$sel_db = mysql_select_db($bd);
	

	
?>