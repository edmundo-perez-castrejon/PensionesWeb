<?php
	// Pull in the NuSOAP code
	 require_once('clases/nusoap.php');
   require_once('clases/clsMysqlDB.php');
    require_once('clases/clsRPPCServer.php');
	// Create the server instance
	$server = new soap_server();
	// Initialize WSDL support
	$server->configureWSDL('datos_rppc', 'urn:datos_rppc');
	$server->wsdl->addComplexType(
 			"estructura_datos",
 			"complexType",
 			"struct",
 			"all",
 			"",
 			array(
 				  "folio_real" => array("name"=>"folio_real","type"=>"xsd:string"),
 				  "id_gen" => array("name"=>"id_gen","type"=>"xsd:string"),
 				  "superficie" => array("name"=>"superficie","type"=>"xsd:string"),
 				  "fecha" => array("name"=>"fecha","type"=>"xsd:string"),
 				  "libro" => array("name"=>"libro","type"=>"xsd:string"),
 				  "documento" => array("name"=>"documentp","type"=>"xsd:string"),
 				  "seccion" => array("name"=>"seccion","type"=>"xsd:string"),
 				  "ap_paterno" => array("name"=>"ap_paterno","type"=>"xsd:string"),
 				  "ap_materno" => array("name"=>"am_paterno","type"=>"xsd:string"),
 				  "nombre" => array("name"=>"nombre","type"=>"xsd:string"),
 			)

		);

	// Register the method to expose
	$server->register('informacion_rppc',                // method name
		array('codigo'   => 'xsd:string',
				'sesion'   => 'xsd:string' ),	        // input parameters
		array('return' => 'tns:estructura_datos'),      // output parameters
		'urn:datos_rppc',                      // namespace
		'urn:datos_rppc#datos',                // soapaction
		'rpc',                                // style
		'encoded',                            // use
		'Devuelve informacion del Registro Publico'            // documentation
	);
	
	// Define the method as a PHP function		
	  function informacion_rppc($codigo,$sesion) {
      		$ini=parse_ini_file("clases/rppcServer.ini.php");
/*	     		if(!sesionValida($sesion)){
        		return new soap_fault('client','',$ini['invses']);
        	}
*/
			//quita todos los no numericos por seguridad
			//echo $codigo;
			$codigo = ereg_replace("[^0-9]", "", $codigo);
			$rppcServer= new clsRPPCServer();
			if ($rppcServer->connected == false){
				return new soap_fault('Client','',$ini['dbaconnect']);
			}
			else{
				 //echo $codigo;
				 $resultado=$rppcServer->informacion($codigo);
				 //print_r($resultado);
				 //echo $resultado;
				 if(!is_array($resultado)){
				 	return new soap_fault('client','',"informacion no encontrada");
				 }
				// $swap=$resultado;
				//***************--------------------------------------- POLO <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
				//cuando se definen el tipo complejo, el array tiene que tener los mismos nombres
				//que los del tipo complejo, porque hace una busqueda de esos identificadores para
				//meter los datos en el xml, por eso se tiene que regresar el campo del array
				//con el nombre definido
				$swap=  array();
				$swap['folio_real']=$resultado[0];
				$swap['id_gen']=$resultado[1];
				$swap['superficie']=$resultado[2];
				$swap['fecha']=$resultado[3];
				$swap['libro']=$resultado[4];
				$swap['documento']=$resultado[5];
				$swap['seccion']=$resultado[6];
				$swap['ap_paterno']=$resultado[7];
				$swap['ap_materno']=$resultado[8];
				$swap['nombre']=$resultado[9];
 				/*
 				Array
				 (
    			 [0] => 45000
    			 [1] => 1
    			 [2] => 16.00 m2
    			 [3] => 2003-05-16
    			 [4] => 23
    			 [5] => 345
    			 [6] => 1
    			 [7] => mondragon
    			 [8] => garcia
    			 [9] => jose luis
				 )*/
				 return $swap;
			}

        }
//funcion para validar que la sesion sea la valida
      function sesionValida($sesion){
        	$ini=parse_ini_file("clases/rppcServer.ini.php");
 			$client = new soapclient($ini[authserver],true);
			$err = $client->getError();
			if ($err) {
			   return false;
			}
			$result = $client->call('ValidaSesion', array("sesion"=>"$sesion", "clave_servicio" => "rppc" ));
			if ($client->fault) {
    		   return false;
			}
			else {
			   return true;
			}
		}


	// Use the request to (try to) invoke the service
	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
	$server->service($HTTP_RAW_POST_DATA);
?>
