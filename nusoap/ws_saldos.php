<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

#$namespace='http://10.10.20.62/dirpensiones/dir_pensiones/nusoap/';
$namespace='http://dirpensiones.dyndns.org/nusoap/';

include_once("../nusoap/lib/nusoap.php");
$server = new soap_server();
// Initialize WSDL support	
$server->configureWSDL('Saldos', $namespace);

/************ Inicia Registro de estructuras de los datos que se usaran *****************/

$server->wsdl->addComplexType(		### Info del Empleado
	"infoEmpleado", 
	"complexType", 
	"struct",
	"all",
	'',		
	array("clave" => array("name" => "clave", "type" => "xsd:int"),
		  "nombre" => array("name"=>"nombre","type"=>"xsd:string"),
		  "puesto" => array("name"=>"puesto","type"=>"xsd:string"),
		  "tipoTrabajador" => array("name"=>"tipoTrabajador","type"=>"xsd:string"),
		  "telefono" => array("name"=>"telefono","type"=>"xsd:string"),
		  "domicilio" => array("name"=>"domicilio","type"=>"xsd:string"),
		  "fechaIng" => array("name"=>"fechaIng","type"=>"xsd:string"),
		  "dependencia" => array("name"=>"dependencia","type"=>"xsd:string")
	)	
);

$server->wsdl->addComplexType(		#### Adeudo Corto Plazo
	"adeudo", 
	"complexType", 
	"struct",
	"all",
	'',		
	array("adeudo" => array("name" => "adeudo", "type" => "xsd:float"),
		  "quincenas" => array("name"=>"quincenas","type"=>"xsd:int"),
		  "fechaAbo" => array("name"=>"fechaAbo","type"=>"xsd:string")
	)
);

$server->wsdl->addComplexType(		#### Saldo del Fondo del Empleado
	"fondo", 
	"complexType", 
	"struct",
	"all",
	'',		
	array("fondo" => array("name" => "fondo", "type" => "xsd:float"))
);

$server->wsdl->addComplexType(		#### Datos del Avalado
	"avalado", 
	"complexType", 
	"struct",
	"all",
	'',		
	array("nombre" => array("name" => "nombre", "type" => "xsd:string"),
		  "avalado" => array("name"=>"avalado","type"=>"xsd:float"),
		  "pagado" => array("name"=>"pagado","type"=>"xsd:float"),
		  "debe" => array("name"=>"debe","type"=>"xsd:float")
	)
);

$server->wsdl->addComplexType(	#### Personas Avaladas por el Empleado Corto Plazo
	'listAvalados',
	'complexType',
	'array',
	'',
	'SOAP-ENC:Array',
	array(),
	array(array('ref'=>'SOAP-ENC:arrayType','wsdl:arrayType'=>'avalado[]')),
	'avalado'
);

$server->wsdl->addComplexType(		#### Saldo Adeudo Prestamo Hipotecario
	"adeudoHip", 
	"complexType", 
	"struct",
	"all",
	'',		
	array("adeudo" => array("name" => "adeudo", "type" => "xsd:float"),
		  "quincenas" => array("name"=>"quincenas","type"=>"xsd:int")
	)
);

$server->wsdl->addComplexType(		#### Adeudo de Seguro sobre Prestamo Hipotecario
	"seguroHip", 
	"complexType", 
	"struct",
	"all",
	'',		
	array("adeudo" => array("name" => "adeudo", "type" => "xsd:float"),
		  "quincenas" => array("name"=>"quincenas","type"=>"xsd:int")
	)
);

$server->wsdl->addComplexType(		#### Datos Entidad
	"entidad", 
	"complexType", 
	"struct",
	"all",
	'',		
	array("clave" => array("name" => "clave", "type" => "xsd:int"),
		  "descripcion" => array("name"=>"descripcion","type"=>"xsd:string")
	)
);

$server->wsdl->addComplexType(	#### Listado de Entidades
	'listEntidades',
	'complexType',
	'array',
	'',
	'SOAP-ENC:Array',
	array(),
	array(array('ref'=>'SOAP-ENC:arrayType','wsdl:arrayType'=>'entidad[]')),
	'entidad'
);

$server->wsdl->addComplexType(		#### Datos del Usuario
	"usuario", 
	"complexType", 
	"struct",
	"all",
	'',		
	array("noControl" => array("name" => "noControl", "type" => "xsd:int"),
		  "curp" => array("name"=>"curp","type"=>"xsd:string"),
		  "dpcia" => array("name"=>"dpcia","type"=>"xsd:int")
	)
);

$server->wsdl->addComplexType(		#### Cambio de contrase�a
	"nuevoPas", 
	"complexType", 
	"struct",
	"all",
	'',		
	array("mensaje" => array("name" => "mensaje", "type" => "xsd:string"))
);
/************ Termina Registro de estructuras de los datos que se usaran *****************/


/*********************** Registros de los Metodos ***************************/

#Informacion del emepleado 
$server->register('infoEmpleado',                    			// NOmbre del metodo
	array('curp' => 'xsd:string', 'noControl' => 'xsd:int'),  	// Parametros de entrada: fecha, dep(Dependencia)
	array('return' => 'tns:infoEmpleado'),    					// Parametros de salida
	'urn:infoEmpleadowsdl',                         			// namespace
	'urn:infoEmpleadowsdl#infoEmpleado',                   		// soapaction
	'rpc',                                    					// style
	'encoded',                               					// use
	'Informaci�n general del empleado'        					// documentation
);

#Adeudo del empleado
$server->register('adeudo',                    					// NOmbre del metodo
	array('curp' => 'xsd:string', 'noControl' => 'xsd:int'),  	// Parametros de entrada: fecha, dep(Dependencia)
	array('return' => 'tns:adeudo'),    						// Parametros de salida
	'urn:adeudowsdl',                         					// namespace
	'urn:adeudowsdl#adeudo',                   					// soapaction
	'rpc',                                    					// style
	'encoded',                               					// use
	'Informaci�n de Adeudo a Corto Plazo del empleado'			// documentation
);

#Saldo del Fondo del empleado
$server->register('fondo',                    					// Nombre del metodo
	array('curp' => 'xsd:string', 'noControl' => 'xsd:int'),  	// Parametros de entrada: fecha, dep(Dependencia)
	array('return' => 'tns:fondo'),    							// Parametros de salida
	'urn:fondowsdl',                         					// namespace
	'urn:fondowsdl#fondo',                   					// soapaction
	'rpc',                                    					// style
	'encoded',                               					// use
	'Fondo acumulado del Empleado'		        				// documentation
);

### Listado de los Avalados por el Empleado
$server->register('avalados',                			// method name
	array('clave' => 'xsd:int', 'noControl' => 'xsd:int'),  // input parameters
	array('return' => 'tns:listAvalados'),      			// output parameters
	'urn:Avaladoswsdl',                      				// namespace
	'urn:Avaladoswsdl#Avalados',       						// soapaction
	'rpc',                                					// style
	'encoded',                            					// use
	'Listado de los Avalados por el Empleado'       		// documentation
);

#Adeudo Prestamo Hipotecario del Empleado
$server->register('adeudoHip',                    				// NOmbre del metodo
	array('clave' => 'xsd:int', 'noControl' => 'xsd:int'),  	// Parametros de entrada: clave y no control del empleado
	array('return' => 'tns:adeudoHip'),    						// Parametros de salida
	'urn:adeudowsdl',                         					// namespace
	'urn:adeudowsdl#adeudo',                   					// soapaction
	'rpc',                                    					// style
	'encoded',                               					// use
	'Informaci�n de Adeudo Hipotercario del empleado'			// documentation
);

#Adeudo de Seguro sobre Prestamo Hipotercario
$server->register('seguroHip',                    				// NOmbre del metodo
	array('clave' => 'xsd:int', 'noControl' => 'xsd:int'),  	// Parametros de entrada: clave y no control del empleado
	array('return' => 'tns:seguroHip'),    						// Parametros de salida
	'urn:seguroHipwsdl',                         				// namespace
	'urn:seguroHipwsdl#seguroHip',                   			// soapaction
	'rpc',                                    					// style
	'encoded',                               					// use
	'Adeudo de Seguro sobre Prestamo Hipotecario'				// documentation
);

#Listado Entidades
$server->register('entidades',                    				// NOmbre del metodo
	array('clave' => 'xsd:int'),  								// Parametros de entrada: clave y no control del empleado
	array('return' => 'tns:entidades'),    						// Parametros de salida
	'urn:entidadeswsdl',                         				// namespace
	'urn:entidadeswsdl#entidades',                   			// soapaction
	'rpc',                                    					// style
	'encoded',                               					// use
	'Descripcion Entidades'										// documentation
);

### Listado de Entidades
	$server->register('entidades',     	           			// method name
	array('cve' => 'xsd:int'),  							// input parameters
	array('return' => 'tns:listEntidades'),      			// output parameters
	'urn:entidadeswsdl',                      				// namespace
	'urn:entidadeswsdl#entidades',       					// soapaction
	'rpc',                                					// style
	'encoded',                            					// use
	'Listado de Entidades'       							// documentation
);

#Datos del usuario que inicia sesion
$server->register('usuario',                    							 // Nombre del metodo
	array('noControl' => 'xsd:int', 'pass' => 'xsd:string', 'dep' => 'xsd:int'), // Param. de entrada: NoControl(Ficha),Password y Depcia
	array('return' => 'tns:usuario'),    									 // Parametros de salida
	'urn:usuariowsdl',                         								 // namespace
	'urn:usuariowsdl#usuario',                   							 // soapaction
	'rpc',                                    								 // style
	'encoded',                               								 // use
	'Claves del usuario que inicia sesion en el sistema'					 // documentation
);

#Datos del Cambio de contrase�a
$server->register('nuevoPas',                    							 // Nombre del metodo
	array('noControl' => 'xsd:int', 'curp' => 'xsd:string', 'dep' => 'xsd:int', 'pass' => 'xsd:string'), // Param. de entrada: NoControl(Ficha),Password y Depcia
	array('return' => 'tns:nuevoPas'),    									 // Parametros de salida
	'urn:nuevoPaswsdl',                         								 // namespace
	'urn:nuevoPaswsdl#nuevoPas',                   							 // soapaction
	'rpc',                                    								 // style
	'encoded',                               								 // use
	'Actualizacion de contrase�a'					 // documentation
);

/***************** Se Definen los metodos ******************/
function infoEmpleado($curp,$noControl) {		######### Metodo para obtener los datos del empleado
	$iConn = odbc_connect("pensiones","","","");	#Realizo Conexion
	
	$iClave = 0;
    $sNombre = "";
 	$sPuesto = "";
	$sTipoTrabajador = "";
	$sTelefono = "";
	$sDomicilio = "";
	$sFechaIng = "";
	$sDependencia = "";
	
	###### Funcion para obtener el numero de registros que devuelve un Select, ya que no funciona la funcion de odbc
	function numRows ($result,$odbcId,$sCriterio)
	{
		$numRecords = odbc_num_rows ($result);
		if ($numRecords < 0)
		{
			$sQry = "SELECT count(*) as results FROM ".$sCriterio;
			$count = odbc_exec ($odbcId, $sQry);
			$numRecords = odbc_result ($count, "results");
		}
		
		return $numRecords;
	} 
	####### Fin Funcion
	
	$sQryInf = "SELECT e.ficha_df, e.nom_df, e.curp, e.telefono, e.domi_df, e.numint_df, e.ingreso_em, e.cve_ea, e.cve_tt, e.cve_de, e.cve_pto FROM ";
	$sCriterio = "empleados as e
				  WHERE e.ficha_df=".$noControl." AND ltrim(upper(e.curp))='".trim(strtoupper($curp))."'";
	$sQryInf.= $sCriterio;
	
	if ($iConn) {
		$iRs = odbc_exec($iConn, $sQryInf);
		
		$iNumRegs = numRows($iRs, $iConn, $sCriterio);
		
		if ($iNumRegs > 0 ){	#Valido que exista al menos un registro
			$rows = odbc_fetch_object($iRs);
			
			$sTipoTrabajador = "";
			$sDependencia = "";
			$sPuesto = "";
			
			$iClave = $rows->cve_ea;
			$iCveTT = $rows->cve_tt;	#Clave del tipo de trabajador
			$iCveDep = $rows->cve_de;	#Clave de la dependencia
			$iCvePu = $rows->cve_pto;	#Clave del puesto
			
			#########  Obtengo el TIPO DE TRABAJADOR
			$sQryTipoT = "SELECT nom_tt FROM ";
			$sCriterioT = "tipotrab WHERE cve_tt=".$iCveTT;
			$sQryTipoT.= $sCriterioT;
			$iRsTT = odbc_exec($iConn, $sQryTipoT);
		
			$iNumRegs = numRows($iRsTT, $iConn, $sCriterioT);
			if ($iNumRegs > 0 ){	#Valido que exista al menos un registro
				$aTipoT = odbc_fetch_object($iRsTT);
				$sTipoTrabajador = $aTipoT->nom_tt;	###
			}
			
			#########  Obtengo el Nombre de la DEPENDENCIA
			$sQryTipoD = "SELECT nom_de FROM ";
			$sCriterioD = "depend WHERE cve_de=".$iCveDep;
			$sQryTipoD.= $sCriterioD;
			$iRsD = odbc_exec($iConn, $sQryTipoD);
		
			$iNumRegs = numRows($iRsD, $iConn, $sCriterioD);
			if ($iNumRegs > 0 ){	#Valido que exista al menos un registro
				$aTipoD = odbc_fetch_object($iRsD);
				$sDependencia = $aTipoD->nom_de;	###
			}
			
			#########  Obtengo el Nombre de la PUESTO
			$sQryTipoP = "SELECT nom_pto FROM ";
			$sCriterioP = "puestos WHERE cve_pto=".$iCvePu;
			$sQryTipoP.= $sCriterioP;
			$iRsP = odbc_exec($iConn, $sQryTipoP);
		
			$iNumRegs = numRows($iRsP, $iConn, $sCriterioP);
			if ($iNumRegs > 0 ){	#Valido que exista al menos un registro
				$aTipoP = odbc_fetch_object($iRsP);
				$sPuesto = $aTipoP->nom_pto;	###
			}
							
			$sNombre = $rows->nom_df;								
			$sTelefono = $rows->telefono;
			$sDomicilio = $rows->domi_df;
			
			$aFechaI = explode("-",$rows->ingreso_em);
			$sFechaIng=$aFechaI[2]."/".$aFechaI[1]."/".$aFechaI[0];			
		}
	}
	odbc_close($iConn);
	
	return array("clave" => $iClave,
				 "nombre" => $sNombre,
				 "puesto" => $sPuesto,
				 "tipoTrabajador" => $sTipoTrabajador,
				 "telefono" => $sTelefono,
				 "domicilio" => $sDomicilio,
				 "fechaIng" => $sFechaIng,
				 "dependencia" => $sDependencia
			);
}

function adeudo($curp, $noControl) {
	$iConn = odbc_connect("pensiones","","","");
	
	$iAdeudo=0;
	$sFechaAbono="";
	$iQuincFaltan=0;
	
	###### Funcion para obtener el numero de registros que devuelve un Select, ya que no funciona la funcion de odbc
	function numRows ($result,$odbcDbId,$sCriterio)
	{
		$numRecords = odbc_num_rows ($result);
		if ($numRecords < 0)
		{
			$countQueryString = "SELECT count(*) as results FROM ".$sCriterio;
			$count = odbc_exec ($odbcDbId, $countQueryString);
			$numRecords = odbc_result ($count, "results");
		}
		
		return $numRecords;
	} 
	####### Fin Funcion
	if ($iConn) {
		#$sQry = "SELECT e.ficha_df, e.cve_ea, p.pripal_pcp, p.int_pcp, p.pr_rn_pcp, p.ab_pr_pcp, p.ab_int_pcp, 
		#		 p.qnas_pcp, p.qna_ab_pcp, p.feud_pcp  FROM ";				 
		$sQry = "SELECT e.ficha_df, e.cve_ea, p.pripal_pcp, p.int_pcp, p.pr_rn_pcp, p.qnas_pcp FROM ";	
		$sCriterio = "empleados as e
				   INNER JOIN solc_pcp as p ON p.cve_ea=e.cve_ea
				   WHERE e.ficha_df=".$noControl." AND ltrim(upper(e.curp))='".trim(strtoupper($curp))."' AND p.ficha_df=e.ficha_df";		
		$sQry.= $sCriterio;
		
		$iRs = odbc_exec($iConn, $sQry);
		
		$iNumRegs = numRows($iRs, $iConn, $sCriterio);
		$iAdeudo=0;
		$sFechaAbono="";
		$iQuincFaltan=0;
		
		if ($iNumRegs > 0 ){	#Valido que exista al menos un registro
			while ($rows = odbc_fetch_object($iRs)) {									
				/*$iPrinc = $rows->pripal_pcp;
				$iInt = $rows->int_pcp;
				$iPrrn = $rows->pr_rn_pcp;
				$iAbpr = $rows->ab_pr_pcp;
				$iAbInt = $rows->ab_int_pcp;
				$aFechaA = explode("-",$rows->feud_pcp);									
				$sFechaAbono = $aFechaA[2]."/".$aFechaA[1]."/".$aFechaA[0];
				$iQuincFaltan = $rows->qnas_pcp - $rows->qna_ab_pcp;
				$iAbInt = $rows->ab_int_pcp;
				$iRes1 = $iPrinc + $iInt + $iPrrn;
				$iRes2 = $iAbpr + $iAbInt;
				
				$iAdeudo= $iRes1 - $iRes2;	*/
				$iPrinc = $rows->pripal_pcp;
				$iInt = $rows->int_pcp;
				$iPrrn = $rows->pr_rn_pcp;
				$iQuincFaltan = $rows->qnas_pcp;
				$iAdeudo = $iPrinc + $iInt + $iPrrn;
			}
		}
		else {	##Busco si tiene adeudos en la tabla PMOS
			$sQry = "SELECT e.ficha_df, e.cve_ea, p.pripal_pcp, p.int_pcp, p.pr_rn_pcp, p.ab_pr_pcp, p.ab_int_pcp, 
					 p.qnas_pcp, p.qna_ab_pcp, p.feud_pcp  FROM ";				 
			$sCriterio = "empleados as e
					   INNER JOIN pmos_cp as p ON p.cve_ea=e.cve_ea
					   WHERE e.ficha_df=".$noControl." AND ltrim(upper(e.curp))='".trim(strtoupper($curp))."' AND p.ficha_df=e.ficha_df";		
			$sQry.= $sCriterio;
			
			$iRs = odbc_exec($iConn, $sQry);
			
			$iNumRegs = numRows($iRs, $iConn, $sCriterio);
			
			if ($iNumRegs > 0 ){	#Valido que exista al menos un registro
				while ($rows = odbc_fetch_object($iRs)) {									
					$iPrinc = $rows->pripal_pcp;
					$iInt = $rows->int_pcp;
					$iPrrn = $rows->pr_rn_pcp;
					$iAbpr = $rows->ab_pr_pcp;
					$iAbInt = $rows->ab_int_pcp;
					$aFechaA = explode("-",$rows->feud_pcp);									
					$sFechaAbono = $aFechaA[2]."/".$aFechaA[1]."/".$aFechaA[0];
					$iQuincFaltan = $rows->qnas_pcp - $rows->qna_ab_pcp;
					$iAbInt = $rows->ab_int_pcp;
					$iRes1 = $iPrinc + $iInt + $iPrrn;
					$iRes2 = $iAbpr + $iAbInt;
					
					$iAdeudo= $iRes1 - $iRes2;									
				}
			}
		}
	}
	odbc_close($iConn);
	
	return array("adeudo" => $iAdeudo,
				 "quincenas" => $iQuincFaltan,
				 "fechaAbo" => $sFechaAbono				 
			);
}

function fondo($curp, $noControl) {
	$iConn = odbc_connect("pensiones","","","");
	
	$iFondo=0;
	
	###### Funcion para obtener el numero de registros que devuelve un Select, ya que no funciona la funcion de odbc
	function numRows ($result,$odbcDbId,$sCriterio)
	{
		$numRecords = odbc_num_rows ($result);
		if ($numRecords < 0)
		{
			$countQueryString = "SELECT count(*) as results FROM ".$sCriterio;
			$count = odbc_exec ($odbcDbId, $countQueryString);
			$numRecords = odbc_result ($count, "results");
		}
		
		return $numRecords;
	} 
	####### Fin Funcion
	
	if ($iConn) {
		$sQry = "SELECT f.aport_fp  FROM ";
										 
		$sCriterio = "empleados as e
				   INNER JOIN fondo as f ON f.ficha_df=e.ficha_df
				   WHERE e.ficha_df=".$noControl." AND ltrim(upper(e.curp))='".trim(strtoupper($curp))."' AND f.cve_ea=e.cve_ea";
		
		$sQry.= $sCriterio;
		
		$iRs = odbc_exec($iConn, $sQry);
		
		$iNumRegs = numRows($iRs, $iConn, $sCriterio);
		
		$iFondo=0;
		if ($iNumRegs > 0 ){	#Valido que exista al menos un registro
			while ($rows = odbc_fetch_object($iRs)) {								
				$iFondo+= $rows->aport_fp;
			}
		}
	}
	odbc_close($iConn);
	
	return array("fondo" => $iFondo);
}

function avalados($clave, $noControl) {		#Metodo para obtener un Listado de los Avalados por el Empleado
	$iConn = odbc_connect("pensiones","","","");
	
	$aAvales=array();
	###### Funcion para obtener el numero de registros que devuelve un Select, ya que no funciona la funcion de odbc
	function numRows ($result,$odbcDbId,$sCriterio)
	{
		$numRecords = odbc_num_rows ($result);
		if ($numRecords < 0)
		{
			$countQueryString = "SELECT count(*) as results FROM ".$sCriterio;
			$count = odbc_exec ($odbcDbId, $countQueryString);
			$numRecords = odbc_result ($count, "results");
		}
		
		return $numRecords;
	} 
	####### Fin Funcion
	
	if ($iConn) {
		$sQry = "SELECT a.fondo_av, a.pagad_av,e.nom_df,a.cve_ea_o, a.ficha_df_o,e.ficha_df FROM ";
										 
		$sCriterio = "avales as a
				   INNER JOIN empleados as e ON a.cve_ea_o=e.cve_ea
				   WHERE a.ficha_df_l=".$noControl." AND a.cve_ea_l=".$clave." AND a.ficha_df_o=e.ficha_df";													
		$sQry.= $sCriterio;
		
		$iRs = odbc_exec($iConn, $sQry);
		
		$iNumRegs = numRows($iRs, $iConn, $sCriterio);	
		
		if ($iNumRegs > 0 ){	#Valido que exista al menos un registro
			while ($rows = odbc_fetch_object($iRs)) {																		
				$iFichaA = $rows->ficha_df;
				$iFondoA = $rows->fondo_av;
				$iPagadoA = $rows->pagad_av;
				$sNombreA = $rows->nom_df;
				$iFondoPendAval=$iFondoA-$iPagadoA;	#Pago Pendiente del Aval
				if ($iFondoPendAval > 0) {
					$aAvales[]=array("nombre"=>$sNombreA,"avalado"=>$iFondoA,"pagado"=>$iPagadoA,"debe"=>$iFondoPendAval);
				}
			}
		}
	}
	odbc_close($iConn);
	
	return $aAvales;
}

function adeudoHip($clave, $noControl){		#Metodo para obtener el Adeudo y quincenas pendientes del Prestamo Hipotecario
	$iConn = odbc_connect("pensiones","","","");
	
	$iQuinPendH=0;
	$iPrestamoH=0;
	###### Funcion para obtener el numero de registros que devuelve un Select, ya que no funciona la funcion de odbc
	function numRows ($result,$odbcDbId,$sCriterio)
	{
		$numRecords = odbc_num_rows ($result);
		if ($numRecords < 0)
		{
			$countQueryString = "SELECT count(*) as results FROM ".$sCriterio;
			$count = odbc_exec ($odbcDbId, $countQueryString);
			$numRecords = odbc_result ($count, "results");
		}
		
		return $numRecords;
	} 
	####### Fin Funcion
	if ($iConn) {
		$sQry = "SELECT p.pripal_mph, p.int_mph, ab_pr_mph, ab_int_mph, qnas_mph, qna_ab_mph, feud_mph  FROM ";									
		$sCriterio = "ampl_ph AS p 
					  WHERE p.ficha_df=".$noControl."  AND p.cve_ea=".$clave." ORDER BY feud_mph";		
		$sQry.= $sCriterio;
		
		$iRs = odbc_exec($iConn, $sQry);
		
		$iNumRegs = numRows($iRs, $iConn, $sCriterio);
		
		$iPrestamoH=0;
		$iQuinPendH=0;
		$iPrin=0;
		$iIntH=0;
		$iAbonoHp=0;
		$iAbonoHi=0;
		$iQna=0;
		$iQnaAb=0;
		if ($iNumRegs > 0 ){	#Valido que exista al menos un registro
			while ($rows = odbc_fetch_object($iRs)) {									
				$iPrin+=trim($rows->pripal_mph);
				$iIntH+=trim($rows->int_mph);
				$iAbonoHp+=trim($rows->ab_pr_mph);
				$iAbonoHi+=trim($rows->ab_int_mph);
				$iQna=$rows->qnas_mph;
				$iQnaAb=$rows->qna_ab_mph;
			}
		}
		
		$iQuinPendH=$iQna-$iQnaAb;	#Quincenas por pagar
		$iPrestamoH=($iPrin+$iIntH)-($iAbonoHp+$iAbonoHi);	#Obtenemos el Saldo Hip. pendiente
	}
	odbc_close($iConn);
	
	return array("adeudo" => $iPrestamoH,
				 "quincenas" => $iQuinPendH			 
			);
}

function seguroHip($clave, $noControl){		#Metodo para obtener el Adeudo y quincenas pendientes del Prestamo Hipotecario
	$iConn = odbc_connect("pensiones","","","");
	
	$iSaldoSeguro = 0;
	$iQuinSeguro = 0;
	###### Funcion para obtener el numero de registros que devuelve un Select, ya que no funciona la funcion de odbc
	function numRows ($result,$odbcDbId,$sCriterio)
	{
		$numRecords = odbc_num_rows ($result);
		if ($numRecords < 0)
		{
			$countQueryString = "SELECT count(*) as results FROM ".$sCriterio;
			$count = odbc_exec ($odbcDbId, $countQueryString);
			$numRecords = odbc_result ($count, "results");
		}
		
		return $numRecords;
	} 
	####### Fin Funcion
	if ($iConn) {
		$sQry = "SELECT p.prima_ph, p.ab_prm_ph, qn_prm_ph, qa_prm_ph  FROM ";									 
		$sCriterio = "pmos_hip AS p 
					  WHERE p.ficha_df=".$noControl."  AND p.cve_ea=".$clave;
		
		$sQry.= $sCriterio;
		
		$iRs = odbc_exec($iConn, $sQry);
		
		$iNumRegs = numRows($iRs, $iConn, $sCriterio);
		
		$iSaldoSeguro=0;
		$iQuinSeguro=0;
		$iPrima=0;
		$iPrimaAb=0;
		$iQuin=0;
		$iQuinA=0;
		if ($iNumRegs > 0 ){	#Valido que exista al menos un registro
			while ($rows = odbc_fetch_object($iRs)) {									
				$iPrima+=trim($rows->prima_ph);
				$iPrimaAb+=trim($rows->ab_prm_ph);
				$iQuin+=trim($rows->qn_prm_ph);
				$iQuinA+=trim($rows->qa_prm_ph);
			}
		}
		
		$iSaldoSeguro=$iPrima-$iPrimaAb;
		$iQuinSeguro=$iQuin-$iQuinA;
	}
	odbc_close($iConn);
	
	return array("adeudo" => $iSaldoSeguro,
				 "quincenas" => $iQuinSeguro			 
			);
}

function entidades($clave) {		#Metodo para obtener un Listado de las entidades
	$iConn = odbc_connect("pensiones","","","");
	
	$aEntidades=array();
	###### Funcion para obtener el numero de registros que devuelve un Select, ya que no funciona la funcion de odbc
	function numRows ($result,$odbcDbId,$sCriterio)
	{
		$numRecords =0;
		$numRecords = odbc_num_rows ($result);
		if ($numRecords < 0)
		{
			$countQueryString = "SELECT count(*) as results FROM ".$sCriterio;
			$count = odbc_exec ($odbcDbId, $countQueryString);
			$numRecords = odbc_result ($count, "results");
		}
		
		return $numRecords;
	} 
	####### Fin Funcion
	
	if ($iConn) {
		$sQry = "SELECT cve_ea, nom_ea FROM ";
		$sCriterio = "entidades ORDER BY nom_ea";													
		$sQry.= $sCriterio;
		
		$iRs = odbc_exec($iConn, $sQry);
		
		$iNumRegs = numRows($iRs, $iConn, $sCriterio);	
		
		if ($iNumRegs > 0 ){	#Valido que exista al menos un registro
			while ($rows = odbc_fetch_object($iRs)) {				
				$aEntidades[]=array("clave"=>$rows->cve_ea,"descripcion"=>trim($rows->nom_ea));
			}
		}
	}
	odbc_close($iConn);
	
	return $aEntidades;
}


function usuario($ficha,$passw,$dep) {		#Metodo para realizar la auntentificacion del usuario para el uso de los servicios
	$iConn = odbc_connect("pensiones","","","");
	$iError=0;
	$aClaves=array("noControl"=>0,"dpcia"=>0,"curp"=>"0");
	
	###### Funcion para obtener el numero de registros que devuelve un Select, ya que no funciona la funcion de odbc
	function numRows ($result,$odbcDbId,$sCriterio)
	{
		$numRecords = odbc_num_rows ($result);
		if ($numRecords < 0)
		{
			$countQueryString = "SELECT count(*) as results FROM ".$sCriterio;
			$count = odbc_exec ($odbcDbId, $countQueryString);
			$numRecords = odbc_result ($count, "results");
		}
		
		return $numRecords;
	} 
	####### Fin Funcion
	
	if ($iConn) {
		
		$sQryP = "SELECT curp,passw FROM ";
		$sCriterioP = "empleados_web WHERE ficha_df=".$ficha." AND cve_ea=".$dep;
		$sQryP.= $sCriterioP;
		$iRsP = odbc_exec($iConn, $sQryP);
		$iNumRegsP = numRows($iRsP, $iConn, $sCriterioP);
		
		if ($iNumRegsP > 0 ){			
			$aDatos = odbc_fetch_object($iRsP);
			
			if (strlen($aDatos->passw)>0)
				$sPas=" AND ltrim(passw)='".trim($passw)."'";
			elseif (strlen($aDatos->curp)==18 && strlen($passw)==18)
				$sPas=" AND ltrim(upper(curp))='".trim(strtoupper($passw))."'";
			else
				$iError=1;
			
			/*if (strlen($passw)==18)
				$sPas=" AND ltrim(upper(curp))='".trim(strtoupper($passw))."'";
			else
				$sPas=" AND ltrim(passw)='".trim($passw)."'";*/
			
			if ($iError==0) {			
				$sQry = "SELECT cve_ea, ficha_df,curp FROM ";
				$sCriterio = "empleados_web WHERE ficha_df=".$ficha.$sPas." AND cve_ea=".$dep;
				$sQry.= $sCriterio;
				
				$iRs = odbc_exec($iConn, $sQry);
				
				$iNumRegs = numRows($iRs, $iConn, $sCriterio);	
				
				if ($iNumRegs > 0 ){	#Valido que exista al menos un registro
					while ($rows = odbc_fetch_object($iRs)) {				
						$aClaves=array("noControl"=>$rows->ficha_df,"dpcia"=>$rows->cve_ea,"curp"=>trim($rows->curp));
					}
				}
			}
			#else
				#$aClaves=array("noControl"=>0,"dpcia"=>0,"curp"=>"0");
		}
	}
	odbc_close($iConn);
	
	return $aClaves;
}

function nuevoPas($ficha,$curp,$dep,$passw) {		#Metodo para realizar la actualizacion de la contrase�a del usuario
	$iConn = odbc_connect("pensiones","","","");
	
	$aMensaje=array("mensaje"=>"");
	
	###### Funcion para obtener el numero de registros que devuelve un Select, ya que no funciona la funcion de odbc
	function numRows ($result,$odbcDbId,$sCriterio)
	{
		$numRecords = odbc_num_rows ($result);
		if ($numRecords < 0)
		{
			$countQueryString = "SELECT count(*) as results FROM ".$sCriterio;
			$count = odbc_exec ($odbcDbId, $countQueryString);
			$numRecords = odbc_result ($count, "results");
		}
		
		return $numRecords;
	} 
	####### Fin Funcion
	
	if ($iConn) {		
		$sQry = "SELECT cve_ea, ficha_df,curp FROM ";
		$sCriterio = "empleados_web WHERE ficha_df=".$ficha." AND ltrim(upper(curp))='".strtoupper(trim($curp))."' AND cve_ea=".$dep;
		$sQry.= $sCriterio;
		
		$iRs = odbc_exec($iConn, $sQry);
		
		$iNumRegs = numRows($iRs, $iConn, $sCriterio);	
		
		if ($iNumRegs > 0 ){	#Valido que exista al menos un registro
			$sQryA = "UPDATE empleados_web SET passw='".$passw."' WHERE ficha_df=".$ficha.$sPas." AND cve_ea=".$dep;
			
			$iRsA = odbc_exec($iConn, $sQryA);
		    if ($iRsA)
				$aMensaje["mensaje"]="SE HA REALIZADO EL CAMBIO DE CLAVE, ES NECESARIO QUE INICIES SESI�N NUEVAMENTE";
			else 
				$aMensaje["mensaje"]="Surgi� un error al intentar actualizar la contrase�a, intentalo de nuevo";						
		}
		else
			$aMensaje["mensaje"]="No es posible actualizar la contrase�a en este momento, intentalo mas tarde.";
		odbc_close($iConn);
	}	
	
	if (strlen($aMensaje['mensaje'])<=1)
		$aMensaje["mensaje"]="No es posible cambiar la contrase�a, intentalo mas tarde.";
	
	return $aMensaje;
}

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
/*
echo "<pre>";
print_r($resp);
echo "</pre>";*/
?>