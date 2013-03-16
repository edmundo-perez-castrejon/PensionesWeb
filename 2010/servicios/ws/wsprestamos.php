<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);


include_once("../clases/nusoap.php");
require_once("../clases/sql.php");

$server = new soap_server();

$server->configureWSDL('Prestamos',  "urn:Prestamos");

// Parametros de entrada
$server->wsdl->addComplexType(
'Empleado',
'complexType',
'struct',
'all',
'',
	array("NoPrestamo" => array("name" => "NoPrestamo", "type" => "xsd:int"),
		  "NoControl" => array("name" => "NoControl", "type" => "xsd:int"),
		  "Nombre" => array("name"=>"Nombre","type"=>"xsd:string"),
		  "NoDependencia" => array("name" => "NoDependencia", "type" => "xsd:int"),
		  "Dependencia" => array("name"=>"Dependencia","type"=>"xsd:string"),
		  
		  "Domicilio" => array("name"=>"Domicilio","type"=>"xsd:string"),
		  "Telefono" => array("name"=>"Telefono","type"=>"xsd:string"),
		  "Lugar" => array("name"=>"Lugar","type"=>"xsd:string"),
		  "Empleo" => array("name"=>"Empleo","type"=>"xsd:string"),
		  
		  "FechaIngreso" => array("name"=>"FechaIngreso","type"=>"xsd:string"),
		  "Ofi_Adscripcion" => array("name"=>"Ofi_Adscripcion","type"=>"xsd:string"),
		  
		  "FecNombramiento" => array("name"=>"FecNombramiento","type"=>"xsd:string"),
		  "Ofi_Sueldo" => array("name"=>"Ofi_Sueldo","type"=>"xsd:float"),
		  "Sueldo_Mes" => array("name"=>"Sueldo_Mes","type"=>"xsd:float"),
		  
  		  "Descuento" => array("name"=>"Descuento","type"=>"xsd:float"),
		  "Cantidad_Prestamo" => array("name"=>"Cantidad_Prestamo","type"=>"xsd:float"),
		  "Plazo" => array("name"=>"Plazo","type"=>"xsd:int"),
		  "Tipo_Fondo" => array("name"=>"Tipo_Fondo","type"=>"xsd:int"),
		  "Estatus" => array("name"=>"Estatus","type"=>"xsd:int")
)
);



// Parametros de entrada
$server->wsdl->addComplexType(
'Avalado',
'complexType',
'struct',
'all',
'',
	array("NoControlAval" => array("name" => "NoControlAval", "type" => "xsd:int"),
		  "NombreAval" => array("name"=>"NombreAval","type"=>"xsd:string"),
		  "NoDependenciaAval" => array("name"=>"NoDependenciaAval","type"=>"xsd:int"),
		  "NombreDependencia" => array("name"=>"NombreDependencia","type"=>"xsd:string"),
		  "Domicilio_Aval" => array("name"=>"Domicilio_Aval","type"=>"xsd:string"),
		  "Cantidad_Avalada" => array("name"=>"Cantidad_Avalada","type"=>"xsd:float")
)
);


// Parametros de salida
$server->wsdl->addComplexType(
	'ListaAvalados', 			// Nombre
	'complexType', 					// Tipo de Clase
	'array', 						// Tipo de PHP
	'', 							// definición del tipo secuencia(all|sequence|choice)
	'SOAP-ENC:Array', 				// Restricted Base
	array(),
	array(
		array('ref' => 'SOAP-ENC:arrayType', 'wsdl:arrayType' => 'tns:Avalado[]') // Atributos
	),
	'tns:Avalado'
);


/*
// Parametros de salida
$server->wsdl->addComplexType(
'DatosEmpleado',
'complexType',
'struct',
'all',
'',
array(

'AvalesPrestamo' => array('ref' => 'SOAP-ENC:arrayType', 'wsdl:arrayType' => 'tns:Avalado[]')															
)
);

*/




//Registramos el metodo a exponer
$server->register('BuscarPrestamo',                // method name
array('IdPrestamo' => 'xsd:int'),        // input parameters
array('return' => 'tns:Empleado'),    // output parameters
'urn:Prestamos',                // namespace
'urn:Prestamos#BuscarEmpleadoPrestamo',                // soapaction
'rpc',                        // style
'encoded',                    // use
'Greet a person entering the sweepstakes'    // documentation
);

//Registramos el metodo a exponer
$server->register('BuscarPrestamoDts',                // method name
array('NoPrestamo' => 'xsd:int'),        // input parameters
array('return' => 'xsd:string'),    // output parameters
'urn:Prestamos',                // namespace
'urn:Prestamos#BuscarPrestamoDts',                // soapaction
'rpc',                        // style
'encoded',                    // use
'Buscar persona con retorno de un dataset'     // documentation
);


//Registramos el metodo a exponer
$server->register('BuscarEmpleadoPrestamo',                // method name
array('Avalado' => 'xsd:int'),        // input parameters
array('return' => 'tns:Empleado'),    // output parameters
'urn:Prestamos',                // namespace
'urn:Prestamos#BuscarEmpleadoPrestamo',                // soapaction
'rpc',                        // style
'encoded',                    // use
'Greet a person entering the sweepstakes'    // documentation
);

//Registramos el metodo a exponer
$server->register('BuscarAvalesPrestamo',                // method name
array('Avalado' => 'xsd:int'),        // input parameters
array('return' => 'tns:Avalado'),    // output parameters
'urn:Prestamos',                // namespace
'urn:Prestamos#BuscarAvalesPrestamo',                // soapaction
'rpc',                        // style
'encoded',                    // use
'Greet a person entering the sweepstakes'    // documentation
);


function BuscarPrestamo($Empleado) {
return array(
'greeting' => $greeting,
'winner' => $winner
);
}


function BuscarPrestamoDts($idPrestamo) {
	$CadResult="";
	$CadResult=$CadResult.'<NewDataSet>'.chr(13).chr(10);
	
	if ($sDatosEmp = BuscarEmpleado($idPrestamo)){		
		$CadResult=$CadResult.'  <DatosEmpleado>'.chr(13).chr(10);
		$CadResult=$CadResult.'    <NoPrestamo>'.$sDatosEmp['NoPrestamo'].'</NoPrestamo>'.chr(13).chr(10);
		$CadResult=$CadResult.'    <NoControl>'.$sDatosEmp['NoControl'].'</NoControl>'.chr(13).chr(10);
		$CadResult=$CadResult.'    <Nombre>'.$sDatosEmp['Nombre'].'</Nombre>'.chr(13).chr(10);
		$CadResult=$CadResult.'    <NoDependencia>'.$sDatosEmp['NoDependencia'].'</NoDependencia>'.chr(13).chr(10);
		$CadResult=$CadResult.'    <Dependencia>'.$sDatosEmp['Dependencia'].'</Dependencia>'.chr(13).chr(10);
		$CadResult=$CadResult.'    <Domicilio>'.$sDatosEmp['Domicilio'].'</Domicilio>'.chr(13).chr(10);
		$CadResult=$CadResult.'    <Telefono>'.$sDatosEmp['Telefono'].'</Telefono>'.chr(13).chr(10);
		$CadResult=$CadResult.'    <Lugar>'.$sDatosEmp['Lugar'].'</Lugar>'.chr(13).chr(10);
		$CadResult=$CadResult.'    <Empleo>'.$sDatosEmp['Empleo'].'</Empleo>'.chr(13).chr(10);
		$CadResult=$CadResult.'    <FechaIngreso>'.$sDatosEmp['FechaIngreso'].'</FechaIngreso>'.chr(13).chr(10);
		$CadResult=$CadResult.'    <Ofi_Adscripcion>'.$sDatosEmp['Ofi_Adscripcion'].'</Ofi_Adscripcion>'.chr(13).chr(10);
		$CadResult=$CadResult.'    <FecNombramiento>'.$sDatosEmp['FecNombramiento'].'</FecNombramiento>'.chr(13).chr(10);
		$CadResult=$CadResult.'    <Ofi_Sueldo>'.$sDatosEmp['Ofi_Sueldo'].'</Ofi_Sueldo>'.chr(13).chr(10);
		$CadResult=$CadResult.'    <Sueldo_Mes>'.$sDatosEmp['Sueldo_Mes'].'</Sueldo_Mes>'.chr(13).chr(10);
		$CadResult=$CadResult.'    <Descuento>'.$sDatosEmp['Descuento'].'</Descuento>'.chr(13).chr(10);
		$CadResult=$CadResult.'    <Cantidad_Prestamo>'.$sDatosEmp['Cantidad_Prestamo'].'</Cantidad_Prestamo>'.chr(13).chr(10);
		$CadResult=$CadResult.'    <Plazo>'.$sDatosEmp['Plazo'].'</Plazo>'.chr(13).chr(10);
		$CadResult=$CadResult.'    <Tipo_Fondo>'.$sDatosEmp['Tipo_Fondo'].'</Tipo_Fondo>'.chr(13).chr(10);
		$CadResult=$CadResult.'    <Estatus>'.$sDatosEmp['Estatus'].'</Estatus>'.chr(13).chr(10);
		$CadResult=$CadResult.'  </DatosEmpleado>'.chr(13).chr(10);	
		
		if ($sDatosAvales = BuscarAvales($idPrestamo)){		
			foreach ($sDatosAvales as $DtAval) {
				$CadResult=$CadResult.'  <DatosAval>'.chr(13).chr(10);
				$CadResult=$CadResult.'    <NoDaPrestamo>'.$DtAval['NoDaPrestamo'].'</NoDaPrestamo>'.chr(13).chr(10);
				$CadResult=$CadResult.'    <NoPrestamo>'.$DtAval['NoPrestamo'].'</NoPrestamo>'.chr(13).chr(10);
				$CadResult=$CadResult.'    <NoControlAval>'.$DtAval['NoControlAval'].'</NoControlAval>'.chr(13).chr(10);
				$CadResult=$CadResult.'    <NombreAval>'.$DtAval['NombreAval'].'</NombreAval>'.chr(13).chr(10);
				$CadResult=$CadResult.'    <NoDependenciaAval>'.$DtAval['NoDependenciaAval'].'</NoDependenciaAval>'.chr(13).chr(10);
				$CadResult=$CadResult.'    <NombreDependencia>'.$DtAval['NombreDependencia'].'</NombreDependencia>'.chr(13).chr(10);
				$CadResult=$CadResult.'    <Domicilio_Aval>'.$DtAval['Domicilio_Aval'].'</Domicilio_Aval>'.chr(13).chr(10);
				$CadResult=$CadResult.'    <Cantidad_Avalada>'.$DtAval['Cantidad_Avalada'].'</Cantidad_Avalada>'.chr(13).chr(10);
				$CadResult=$CadResult.'  </DatosAval>'.chr(13).chr(10);	
			}		
		}
	}				
	
	
	
	$CadResult=$CadResult.'</NewDataSet>';
	
	
	
	
	
	return $CadResult;
}

function BuscarEmpleadoPrestamo($Empleado) {
	return "";
}


function BuscarAvalesPrestamo($Empleado) {
	return "";
}



//#Region "Funciones Privadas WebServies"


	function BuscarEmpleado($idPrestamo) {
		
		$sEmpleado=array();
		
		$sTabla="ma_prestamocortoplazo as e";	
		$sCampos = "e.Nombre, e.NoControl, e.NoDependencia, e.Domicilio, e.Telefono, e.Lugar, e.Empleo, e.FechaIngreso, e.Ofi_Adscripcion, e.Dependencia, e.FecNombramiento, e.Ofi_Sueldo, e.Sueldo_Mes, e.Descuento, e.Cantidad_Prestamo, e.Plazo, e.Tipo_Fondo, e.Estatus";
		$sCriterio = "where e.NoPrestamo=".$idPrestamo;
			
		$QuerySql = new sqlQry();
		$sDatos=$QuerySql->buscar($sTabla,$sCampos,$sCriterio); 
		
		if($rs = mysql_fetch_array($sDatos)){
					
			$NoControl = $rs["NoControl"];
			$Nombre = $rs["Nombre"];
			$NoDependencia = $rs["NoDependencia"];
			$Domicilio = $rs["Domicilio"];
			$Telefono = $rs["Telefono"];
			$Lugar = $rs["Lugar"];
			$Empleo = $rs["Empleo"];
			$FechaIngreso = $rs["FechaIngreso"];
			$Ofi_Adscripcion = $rs["Ofi_Adscripcion"];
			$Dependencia = $rs["Dependencia"];
			$FecNombramiento = $rs["FecNombramiento"];
			$Ofi_Sueldo = $rs["Ofi_Sueldo"];
			$Sueldo_Mes = $rs["Sueldo_Mes"];
			$Descuento = $rs["Descuento"];
			$Cantidad_Prestamo = $rs["Cantidad_Prestamo"];
			$Plazo = $rs["Plazo"];
			$Tipo_Fondo = $rs["Tipo_Fondo"];
			$Estatus = $rs["Estatus"];
			
			$sEmpleado= array("NoPrestamo" => $idPrestamo,
							  "NoControl" => $NoControl,
							  "Nombre" => $Nombre,
							  "NoDependencia" => $NoDependencia,
							  "Dependencia" => $Dependencia,
							  
							  "Domicilio" => $Domicilio,
							  "Telefono" => $Telefono,
							  "Lugar" => $Lugar,
							  "Empleo" => $Empleo,
							  
							  "FechaIngreso" => $FechaIngreso,
							  "Ofi_Adscripcion" => $Ofi_Adscripcion,
							  
							  "FecNombramiento" => $FecNombramiento,
							  "Ofi_Sueldo" => $Ofi_Sueldo,
							  "Sueldo_Mes" => $Sueldo_Mes,
							  
							  "Descuento" => $Descuento,
							  "Cantidad_Prestamo" => $Cantidad_Prestamo,
							  "Plazo" => $Plazo,
							  "Tipo_Fondo" => $Tipo_Fondo,
							  "Estatus" => $Estatus);
			}
			
			return $sEmpleado;
	}
	
	
	function BuscarAvales($idPrestamo) {
		
		$sAvales= array();
	
		$sTabla="da_avalprestamocortoplazo as e";	
		$sCampos = "e.NoDaPrestamo, e.NoPrestamo, e.NoControlAval, e.NombreAval, e.NoDependenciaAval, e.NombreDependencia, e.Domicilio_Aval, e.Cantidad_Avalada";
		$sCriterio = "where e.NoPrestamo=".$idPrestamo;
		
		$QuerySql = new sqlQry();
	
		if($sDatos=$QuerySql->buscar($sTabla,$sCampos,$sCriterio)){
			$Encontrados=count($sDatos);
			$i=0;
			while($rs = mysql_fetch_array($sDatos))
			{
				if ($i==0){$sAvales= array_fill(0,1,array());}
				
				$NoDaPrestamo = $rs["NoDaPrestamo"];
				$NoPrestamo = $rs["NoPrestamo"];
				$NoControlAval = $rs["NoControlAval"];
				$NombreAval = $rs["NombreAval"];
				$NoDependenciaAval = $rs["NoDependenciaAval"];
				$NombreDependencia = $rs["NombreDependencia"];
				$Domicilio_Aval = $rs["Domicilio_Aval"];
				$Cantidad_Avalada = $rs["Cantidad_Avalada"];
				
				$sAvales[$i]= array("NoDaPrestamo" => $NoDaPrestamo,
								  "NoPrestamo" => $NoPrestamo,
								  "NoControlAval" => $NoControlAval,
								  "NombreAval" => $NombreAval,
								  "NoDependenciaAval" => $NoDependenciaAval,
								  "NombreDependencia" => $NombreDependencia,
								  "Domicilio_Aval" => $Domicilio_Aval,
								  "Cantidad_Avalada" => $Cantidad_Avalada);	
				$i++;
			}	
		}
		return $sAvales;
	}


//#End Region "Funciones Privadas WebServies"




$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);

?>