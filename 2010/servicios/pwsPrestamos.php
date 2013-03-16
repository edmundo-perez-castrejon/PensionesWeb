<?php

		//$UrlWsLogin = "http://10.10.20.20/pensiones/2010/servicios/ws/wsprestamos.php?wsdl"; 
		$UrlWsLogin = "http://10.10.1.30/pensiones/servicios/ws/wsprestamos.php?wsdl"; 
		$Usuario = 8;
		
		//require 'nusoap.php';
		require_once("../ws/lib/nusoap.php");
		
		$WSLogin = new nusoap_client($UrlWsLogin, 'wsdl');
		//$respuesta_login = $WSLogin->call('BuscarPrestamoDts', array('NoPrestamo' =>$Usuario));
		
		var_dump($WSLogin);
		//var_dump($respuesta_login);
		$CadResult=$respuesta_login;
		
		//echo $CadResult;
		//$PathArchivo="ResultadosWS.txt";
		
		//$openfile = fopen($PathArchivo, "w");
		//fwrite($openfile, $CadResult);
		
?>	
