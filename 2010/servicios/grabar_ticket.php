<?php

session_start();

$iNoControl=0;
$iError=1;

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


//var_dump($aDatos);


if($iError==1){
	$msg= "ES%20NECESARIO%20INICIAR%20SESION";
	header("Location: index.php?msg=.$msg");
}

$sNombre = "";
if (isset($aDatos['nombre'])==true)
	$sNombre = strtoupper(trim($aDatos['nombre']));

//echo $sNombre;

$sDomicilio = "";
if (isset($aDatos['domicilio']))
	$sDomicilio = strtoupper(trim($aDatos['domicilio']));

//echo $sDomicilio;

$sTelefono = "";
if (isset($aDatos['telefono']))
	$sTelefono = strtoupper(trim($aDatos['telefono']));

$sLugar = "";
if (isset($aDatos['lugar']))
	$sLugar = strtoupper(trim($aDatos['lugar']));
	
$sPuesto = "";
if (isset($aDatos['puesto']))
	$sPuesto = strtoupper(trim($aDatos['puesto']));
	
$sFechaIng = "";
if (isset($aDatos['fechaIng']))
	$sFechaIng = strtoupper(trim($aDatos['fechaIng']));
		
$ofadsc = "";
if (isset($aDatos['oficinaAds']))
	$ofadsc = strtoupper(trim($aDatos['oficinaAds']));		
		
$sDependencia = "";
if (isset($aDatos['dependencia']))
	$sDependencia = strtoupper(trim($aDatos['dependencia']));
		
$sFecnom = "";
if (isset($aDatos['fechaNomb']))
	$sFecnom = strtoupper(trim($aDatos['fechaNomb']));

$sOffsueldo = "";
if (isset($aDatos['oficinaSueldo']))
	$sOffsueldo = strtoupper(trim($aDatos['oficinaSueldo']));
	
$sueldo = 0;
if (isset($aDatos['sueldo']))
	$sueldo = $aDatos['sueldo'];
	
//descuentos
$descuentos = 0;
if (isset($aDatos['descuentos']))
	$descuentos = $aDatos['descuentos'];

//cantidad
$cantidad = 0;
if (isset($aDatos['cantidad']))
	$cantidad = $aDatos['cantidad'];
	
//quincenas
$quincenas = 0;
if (isset($aDatos['quincenas']))
	$quincenas = strtoupper(trim($aDatos['quincenas']));
	
//quincenas
$fondo = 0;
if (isset($aDatos['fondo']))
	$fondo = strtoupper(trim($aDatos['fondo']));
	

	
$iError=1;
$NumTicket=0;


//include_once('clases/ClsRegPrestamos.php');

//$gPrestamo=new RegistroPrestamo();

include_once('clases/fpdf/mc_table.php');
include_once('clases/cls_cdbarras.php');
include_once('clases/ClsRegPrestamos.php');
include_once('clases/funciones.php');




$gPrestamo=new RegistroPrestamo();
$gPrestamo->SetNoControl($iNoControl);
$gPrestamo->SetNoDependencia($iDep);
$gPrestamo->SetDomicilio($sDomicilio);
$gPrestamo->SetOfi_Adscripcion($ofadsc);
$gPrestamo->SetFecNombramiento(cambiaf_a_mysql($sFecnom));
$gPrestamo->SetOfi_Sueldo($sOffsueldo);
$gPrestamo->SetSueldo_Mes($sueldo);
$gPrestamo->SetDescuento($descuentos);
$gPrestamo->SetCantidad_Prestamo($cantidad);
$gPrestamo->SetPlazo($quincenas);
$gPrestamo->SetTipo_Fondo($fondo);
$gPrestamo->SetEstatus(1);

$gPrestamo->SetNombre($sNombre);
$gPrestamo->SetTelefono($sTelefono);

$gPrestamo->SetLugar($sLugar);
$gPrestamo->SetEmpleo($sPuesto);

$gPrestamo->SetFechaIngreso(cambiaf_a_mysql($sFechaIng));
$gPrestamo->SetDependencia($sDependencia);

$NumTicket=$gPrestamo->RegistrarPrestamo();

//echo 1;
if($fondo == 2){
	$varUsrNoEncontrado=strtoupper(trim("** Usuario no encontrado"));
	$sNoConAv1 = 0;
	
	if (isset($aDatos['sNoConAv1']))
		$sNoConAv1 = strtoupper(trim($aDatos['sNoConAv1']));
		
	if ($sNoConAv1>0){
		$sNomAval1 = "";
		if (isset($aDatos['sNomAval1']))
			$sNomAval1 = strtoupper(trim($aDatos['sNomAval1']));
			
			if ($sNomAval1!=$varUsrNoEncontrado and strlen($sNomAval1)>0){
				$depAval1 = 0;
				if (isset($aDatos['depAval1']))
					$depAval1 = strtoupper(trim($aDatos['depAval1']));
					
				$iCantidadAv1 = 0;
				if (isset($aDatos['iCantidadAv1']))
					$iCantidadAv1 = strtoupper(trim($aDatos['iCantidadAv1']));
					
				$sDomAv1 = "";
				if (isset($aDatos['sDomAv1']))
					$sDomAv1 = strtoupper(trim($aDatos['sDomAv1']));	
				
				
				$sNombreDep1 = "";
				if (isset($aDatos['sNombreDep1']))
					$sNombreDep1 = strtoupper(trim($aDatos['sNombreDep1']));	
				
				$gPrestamo->SetNoPrestamo($NumTicket);
				$gPrestamo->SetNoControlAval($sNoConAv1);
				$gPrestamo->SetNombreAval($sNomAval1);
				$gPrestamo->SetNoDependenciaAval($depAval1);
				$gPrestamo->SetNombreDependenciaAval($sNombreDep1);
				$gPrestamo->SetDomicilioAval($sDomAv1);
				$gPrestamo->SetCantidadAvaladaAval($iCantidadAv1);
				
				$gPrestamo->RegistrarAval();
			}
		
	}
	
	
	
	
	//Checando Aval2
	
	$sNoConAv2 = 0;
	
	if (isset($aDatos['sNoConAv2']))
		$sNoConAv2 = strtoupper(trim($aDatos['sNoConAv2']));
		
	if ($sNoConAv2>0){
		$sNomAval2 = "";
		if (isset($aDatos['sNomAval2']))
			$sNomAval2 = strtoupper(trim($aDatos['sNomAval2']));
			
		if ($sNomAval2!=$varUsrNoEncontrado and strlen($sNomAval2)>0){
			$depAval2 = 0;
			if (isset($aDatos['depAval2']))
				$depAval2 = strtoupper(trim($aDatos['depAval2']));
				
			$iCantidadAv2 = 0;
			if (isset($aDatos['iCantidadAv1']))
				$iCantidadAv2 = strtoupper(trim($aDatos['iCantidadAv2']));
				
			$sDomAv2 = "";
			if (isset($aDatos['sDomAv2']))
				$sDomAv2 = strtoupper(trim($aDatos['sDomAv2']));
				
			$sNombreDep2 = "";
			if (isset($aDatos['sNombreDep2']))
				$sNombreDep2 = strtoupper(trim($aDatos['sNombreDep2']));
			
			$gPrestamo->SetNoPrestamo($NumTicket);
			$gPrestamo->SetNoControlAval($sNoConAv2);
			$gPrestamo->SetNombreAval($sNomAval2);
			$gPrestamo->SetNoDependenciaAval($depAval2);
			$gPrestamo->SetNombreDependenciaAval($sNombreDep2);
			$gPrestamo->SetDomicilioAval($sDomAv2);
			$gPrestamo->SetCantidadAvaladaAval($iCantidadAv2);
			
			$gPrestamo->RegistrarAval();
		}
		
	}
	
	//Fin chequeo aval2
	
	
	//Checando Aval3
	
	$sNoConAv3 = 0;
	
	if (isset($aDatos['sNoConAv3']))
		$sNoConAv3 = strtoupper(trim($aDatos['sNoConAv3']));
		
	if ($sNoConAv3>0){
		$sNomAval3 = "";
		if (isset($aDatos['sNomAval3']))
			$sNomAval3 = strtoupper(trim($aDatos['sNomAval3']));
			
		if ($sNomAval3!=$varUsrNoEncontrado and strlen($sNomAval3)>0){
			
			$depAval3 = 0;
			if (isset($aDatos['depAval3']))
				$depAval3 = strtoupper(trim($aDatos['depAval3']));
				
			$iCantidadAv3 = 0;
			if (isset($aDatos['iCantidadAv3']))
				$iCantidadAv3 = strtoupper(trim($aDatos['iCantidadAv3']));
				
			$sDomAv3 = "";
			if (isset($aDatos['sDomAv3']))
				$sDomAv3 = strtoupper(trim($aDatos['sDomAv3']));	
				
			$sNombreDep3 = "";
			if (isset($aDatos['sNombreDep3']))
				$sNombreDep3 = strtoupper(trim($aDatos['sNombreDep3']));
			
			$gPrestamo->SetNoPrestamo($NumTicket);
			$gPrestamo->SetNoControlAval($sNoConAv3);
			$gPrestamo->SetNombreAval($sNomAval3);
			$gPrestamo->SetNoDependenciaAval($depAval3);
			$gPrestamo->SetNombreDependenciaAval($sNombreDep3);
			$gPrestamo->SetDomicilioAval($sDomAv3);
			$gPrestamo->SetCantidadAvaladaAval($iCantidadAv3);
			
			$gPrestamo->RegistrarAval();
		}
		
	}
	
	//Fin chequeo aval3
}


if($NumTicket<=0){
	header("Location: corto.php?ofadsc=$ofadsc&fecnom=$fecnom&ofsaldos=$ofsaldos");
}
else {

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Direcci&oacute;n de Pensiones de Gobierno del Estado de Colima</title>

<script language="javascript">
function enviarDatos() {
	var d = document.frmCorto;
	if (d.NumTicket.value>0) {
		document.frmCorto.submit();
		open("saldos.php","_self");
	}
	
}

</script>

</head>
<body onload="javascript:enviarDatos()">
    <form action="cortoticket.php" method="post" name="frmCorto" target="_blank" id="frmCorto" style="display:none">
        <input name="NumTicket" type="text" id="NumTicket" size="40" maxlength="60" value="<?php echo $NumTicket?>" readonly="readonly"/>
        <input name="telefono" type="text" id="telefono" size="40" maxlength="60" value="<?php echo $sTelefono?>" readonly="readonly"/>
        <input name="nombre" type="text" id="nombre" size="40" maxlength="100" value="<?php echo $sNombre?>" readonly="readonly"/>
        <input name="dependencia" type="text" id="dependencia" size="40" maxlength="80" value="<?php echo $sDependencia?>" readonly="readonly"/>
      <input name="btnGenera" type="button" id="btnGenera" onclick="enviarDatos()" value="Generar Formato" />
    </form>
</body>
</html>

