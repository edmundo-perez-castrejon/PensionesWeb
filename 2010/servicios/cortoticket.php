<?php

session_start();

foreach($_POST as $id => $dato) {
	$bBoton=strstr($id,"btnGenera");	#Valido que no sea el boton, por ser boton	
	#$bAval = strstr($id,"sNomAv");
	
	if (!$bBoton) {
		$aDatos[$id]=$dato;
	}	
}


//session_start();

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



if($iError==1){
	$ofadsc= "";
	$fecnom="";
	$ofsaldos="";
	header("Location: saldos.php");
}
else {

}

$sNombre2 = "";
if (isset($aDatos['nombre']))
	$sNombre2 = strtoupper(trim($aDatos['nombre']));
	
$sTelefono = "";
if (isset($aDatos['telefono']))
	$sTelefono = strtoupper(trim($aDatos['telefono']));
	
$sDependencia = "";
if (isset($aDatos['dependencia']))
	$sDependencia = strtoupper(trim($aDatos['dependencia']));

$sID = "";
if (isset($aDatos['NumTicket']))
	$sID = $aDatos['NumTicket'];
	
	
if(strlen($sTelefono)<=0) $sTelefono="----------------";
#### Dibujamos el PDF
include_once('clases/fpdf/mc_table.php');
include_once('clases/cls_cdbarras.php');
 //$new_code = new cd_barra($_GET['code']);

 
//$pdf=new PDF_MC_Table('P','mm','Letter');

$pdf=new PDF_MC_Table('P','mm','Letter');

$pdf->Open();
$pdf->AddPage();

$sFolio = $sID;

$pdf->SetFont('Arial','B',9);
$pdf->SetWidths(array(100,0));
$pdf->SetAligns(array('L','L'));

$pdf->RowNB(array('Solicitud de Préstamo a Corto Plazo'),22);
$pdf->RowNB(array('a la Dirección de Pensiones del Estado'),20);


$pdf->SetFont('Arial','B',9);
$pdf->Ln(9);
$pdf->SetWidths(array(35,161));
$pdf->SetAligns(array('L','L'));
$pdf->RowNB(array('Datos del solicitante.'),0);

$pdf->SetFont('Arial','',7);
$pdf->SetWidths(array(160,161));
$pdf->SetAligns(array('L'));
$pdf->RowNB(array('No Control: '.$iNoControl),4);

$pdf->SetWidths(array(160,161));
$pdf->SetAligns(array('L','L'));
$pdf->RowNB(array('Dependencia: '.$sDependencia),4);

$pdf->SetWidths(array(160,161));
$pdf->SetAligns(array('L','L'));
$pdf->RowNB(array('Telefono: '.$sTelefono),4);


$pdf->Ln(5);

$pdf->SetFont('Arial','',6);
$pdf->SetWidths(array(230,161));
$pdf->SetAligns(array('L','L'));
$pdf->RowNB(array('Ubicación: Torres Quintero No. 156 CP 28000. Col. Centro Colima, Col.'),0);


$pdf->SetWidths(array(230,161));
$pdf->SetAligns(array('L','L'));
$pdf->RowNB(array('Teléfonos: 312 31 36858'),0);

$pdf->SetWidths(array(230,161));
$pdf->SetAligns(array('L','L'));
$pdf->RowNB(array('Correo electrónico: dir_pensiones@prodigy.net.mx'),0);

$pdf->SetWidths(array(230,161));
$pdf->SetAligns(array('L','L'));
$pdf->RowNB(array('Horario: Lunes a Viernes de 8:30 a 15:00 hrs.'),0);


$pdf->Ln(4);

$pdf->SetWidths(array(230,161));
$pdf->SetAligns(array('L','L'));
$pdf->RowNB(array('_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _'),0);

$pdf->printcodebar($sFolio,15,90,120,15);

$pdf->Ln(20);

$pdf->SetFont('Arial','',19);
$pdf->SetWidths(array(150,107,5,38));
$pdf->SetAligns(array('L','L','L','L'));

$folioTmp="";
if (strlen($sFolio)<21){
	$folioTmp=str_pad($sFolio, ((21-strlen($sFolio))*2)+strlen($sFolio), ' ', STR_PAD_BOTH);
	}
else{
	$folioTmp=$sFolio;
}
	
$pdf->RowNB(array($folioTmp),0);






//$pdf->SetFont('Arial','',9);
//$pdf->SetWidths(array(150,107,5,38));
//$pdf->SetAligns(array('L','L','L','L'));
//$pdf->RowNB(array($sFolio),0);
//new_code

//$pdf->RowNB(array($new_code),0);


$pdf->Output();
?>