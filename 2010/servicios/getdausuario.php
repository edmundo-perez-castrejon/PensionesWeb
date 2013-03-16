<?php
session_start();

require_once("../ws/lib/nusoap.php");
require_once("clases/conexcionws.php");

$acentosNormal = array("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ü","Ü","ñ","Ñ","à","è","ì","ò","ù","À","È","Ì","Ò","Ù");
$acentosHTML = array("&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;","&uuml;","&Uuml;","&ntilde;","&Ntilde;","&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;");

$iNoControl=0;

if (isset($_SESSION['cioiap']) && isset($_SESSION['seraes']) && !empty($_SESSION['seraes']) && !empty($_SESSION['seraes'])){
	$sChkSes=sha1($_SESSION['cioiap']."P3nz1.nE$");	#Recibo los datos del usuario, y genero el SHA1
	if ($sChkSes==$_SESSION['seraes']) {	#Valido que los datos del usuario no ha sido alterados
		$aTemp=explode("-",$_SESSION['cioiap']);
		if (is_array($aTemp) && count($aTemp)==3) {	#Valido que traigo los datos completos del usuario
			$iNoControl=$aTemp[0];
			$iDep=$aTemp[1];
			$sCurp=$aTemp[2];
			
			$iError=0;
		}
	}
}


foreach($_POST as $id => $dato) {
	$bBoton=strstr($id,"btnGenera");	#Valido que no sea el boton, por ser boton	
	#$bAval = strstr($id,"sNomAv");
	
	if (!$bBoton) {
		$aDatos[$id]=$dato;
	}	
}

$idEmpleado = "";
if (isset($aDatos['idEmpleado'])==true)
	$idEmpleado = strtoupper(trim($aDatos['idEmpleado']));
	
$idDependencia = "";
if (isset($aDatos['idDependencia'])==true)
	$idDependencia = strtoupper(trim($aDatos['idDependencia']));

$numAval = "";
if (isset($aDatos['numAval'])==true)
	$numAval = strtoupper(trim($aDatos['numAval']));
									

	$client = new nusoap_client($UrlWebService, true);	#Server
	
	if ($sError = $client->getError()) {
			echo "No se pudo realizar la operación [" . $sError . "]";
		die();
		}
								
	$aInfoEmpleado= $client->call("iEmpleado_dep", array("noDependencia"=>trim($idDependencia),"noControl"=>trim($idEmpleado)));

	$iClave = $aInfoEmpleado['clave'];
	$sTipoTrabajador = $aInfoEmpleado['tipoTrabajador'];
	$sNombre =  htmlentities($aInfoEmpleado['nombre']);								
	$sDomicilio = $aInfoEmpleado['domicilio'];							
	$sFechaIng = $aInfoEmpleado['fechaIng'];							
	$sDependencia = $aInfoEmpleado['dependencia'];
	$sPuesto = $aInfoEmpleado['puesto'];
	
	if (strlen(trim($sNombre))==0) {$sNombre="** Usuario no encontrado";}
	
	$datos=$sNombre.' <input name="sNomAval'.$numAval.'" id="sNomAval'.$numAval.'"type="hidden" value="'.$sNombre.'">';
	
	echo $datos;

?>

