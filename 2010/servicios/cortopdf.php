<?php
session_start();
foreach($_POST as $id => $dato) {
	$bBoton=strstr($id,"btnGenera");	#Valido que no sea el boton, por ser boton	
	#$bAval = strstr($id,"sNomAv");
	
	if (!$bBoton) {
		$aDatos[$id]=$dato;
	}	
}

if (isset($aDatos['sNomAv3'])) {
	$_SESSION['aval3']=$aDatos['sNomAv3']."-".$aDatos['sNoConAv3']."-".$aDatos['iCantidadAv3']."-".$aDatos['sDomAv3'];	
}

$iFicha = "";
if (isset($aDatos['iFicha']))
	$iFicha = trim($aDatos['iFicha']);
	
$sNombre = "";
if (isset($aDatos['nombre']))
	$sNombre = strtoupper(trim($aDatos['nombre']));
	
$sTelefono = "";
if (isset($aDatos['telefono']))
	$sTelefono = strtoupper(trim($aDatos['telefono']));

$sDomicilio = "";
if (isset($aDatos['domicilio']))
	$sDomicilio = strtoupper(trim($aDatos['domicilio']));
	
$sFechaIng="";
if (isset($aDatos['fechaIng']))
	$sFechaIng = trim($aDatos['fechaIng']);

$sDependencia = "";
if (isset($aDatos['dependencia']))
	$sDependencia = strtoupper(trim($aDatos['dependencia']));
	
$sPuesto = "";
if (isset($aDatos['puesto']))
	$sPuesto = strtoupper(trim($aDatos['puesto']));

$sOficinaAds = "";
if (isset($aDatos['oficinaAds']))
	$sOficinaAds = strtoupper($aDatos['oficinaAds']);

$sFechaNom = "";
if (isset($aDatos['fechaNomb']))
	$sFechaNom = trim($aDatos['fechaNomb']);

$sLugar = "";
if (isset($aDatos['lugar']))
	$sLugar = strtoupper(trim($aDatos['lugar']));

$sOficinaSueldo = "";
if (isset($aDatos['oficinaSueldo']))
	$sOficinaSueldo = strtoupper(trim($aDatos['oficinaSueldo']));

$sSueldo = "";
if (isset($aDatos['sueldo']) && strlen($aDatos['sueldo'])>1){
	$iTempS=str_replace(",","",$aDatos['sueldo']);
	$sSueldo = number_format(trim($iTempS),2);
}

$sDescuentos = "";
if (isset($aDatos['descuentos']) && strlen($aDatos['descuentos'])>1) {
	$iTempS=str_replace(",","",$aDatos['descuentos']);
	$sDescuentos = number_format(trim($iTempS),2);
}

$sCantidad = "";
if (isset($aDatos['cantidad']) && strlen($aDatos['cantidad'])>1) {
	$iTempS=str_replace(",","",$aDatos['cantidad']);
	$sCantidad = number_format(trim($iTempS),2);
}

$sQuincenas = "";
if (isset($aDatos['quincenas']) && strlen($aDatos['quincenas'])>1)
	$sQuincenas = trim($aDatos['quincenas']);

$sFondoT = "";
if (isset($aDatos['fondo']))
	$sFondoT = trim($aDatos['fondo']);
	
#### Dibujamos el PDF
include_once('../fpdf/mc_table.php');
$pdf=new PDF_MC_Table('P','mm','Letter');
$pdf->Open();
$pdf->AddPage();

$pdf->Ln(4);
$pdf->SetFont('Arial','',9);

$pdf->Rect(10,33,196,6);
$pdf->SetWidths(array(15,117,16,48));
$pdf->SetAligns(array('L','L','L','L'));
$pdf->RowNB(array('Nombre:',$sNombre,'Télefono:',$sTelefono),0);

$pdf->Rect(10,39,196,6);
$pdf->Ln(1);
$pdf->SetWidths(array(16,111,12,57));
$pdf->SetAligns(array('L','L','L','L'));
$pdf->RowNB(array('Domicilio:',$sDomicilio,'Lugar:',$sLugar),0);

$pdf->Rect(10,45,196,6);
$pdf->Ln(1);
$pdf->SetWidths(array(41,92,43,20));
$pdf->SetAligns(array('L','L','L','L'));
$pdf->RowNB(array('Empleo(s) que desempeña:',$sPuesto,'Fecha de ingreso al servicio:',$sFechaIng),0);

$pdf->Rect(10,51,196,6);
$pdf->Ln(2);
$pdf->SetWidths(array(35,161));
$pdf->SetAligns(array('L','L'));
$pdf->RowNB(array('Oficina de Adscripción:',$sOficinaAds),0);

$pdf->Rect(10,57,196,6);
$pdf->Ln(1);
$pdf->SetWidths(array(22,106,48,20));
$pdf->SetAligns(array('L','L','L','L'));
$pdf->RowNB(array('Dependencia:',$sDependencia,'Fecha del último nombramiento:',$sFechaNom),0);

$pdf->Rect(10,63,196,6);
$pdf->SetWidths(array(46,95,29,26));
$pdf->SetAligns(array('L','L','L','L'));
$pdf->RowNB(array('Oficina que cubre sus sueldos:',$sOficinaSueldo,'Sueldo mensual: $',$sSueldo),0);

$pdf->Rect(10,69,196,6);
$pdf->Ln(1);
$pdf->SetWidths(array(42,87,36,31));
$pdf->SetAligns(array('L','L','L','L'));
$pdf->RowNB(array('Descuentos que le hacen: $',$sDescuentos,'Cantidad que solicita: $',$sCantidad),0);

$sPropF="";
$sAvalF="";
if ($sFondoT==1)
	$sPropF="X";
if ($sFondoT==2)
	$sAvalF="X";

$pdf->Rect(10,75,196,6);
$pdf->Ln(1);
$pdf->SetWidths(array(53,80,6,31,6,20));
$pdf->SetAligns(array('L','L','C','L','L','L'));
$pdf->RowNB(array('Plazo para cubrirla (en quincenas): ',$sQuincenas,$sPropF,'Fondo Propio',$sAvalF,'Con aval'),0);

$pdf->SetFont('Arial','',6);
$pdf->Rect(10,81,78,22);
$pdf->Rect(88,81,118,22);

$pdf->Ln(2);
$pdf->SetWidths(array(20,60));
$pdf->SetAligns(array('L','C'));
$pdf->RowNB(array('LUGAR Y FECHA:',''),0);

$pdf->SetFont('Arial','',8);
$pdf->SetY(82);
$pdf->SetWidths(array(116));
$pdf->SetAligns(array('C',));
$pdf->RowNB1(array('DEPARTAMENTO DE CUENTAS DE LIQUIDACIÓN'),79);

$pdf->Ln(5);
$pdf->SetWidths(array(45,30,40));
$pdf->SetAligns(array('L','L','L'));
$pdf->RowNB(array('Adeudo del Préstamo anterior No.','________________ $',"________________________"),79);
#$pdf->Ln(2);
$pdf->SetWidths(array(41,34,40));
$pdf->SetAligns(array('L','L','L'));
$pdf->RowNB(array('Menos: Intereses no acusados',' __________________ $',"________________________"),79);
#$pdf->Ln(2);
$pdf->SetWidths(array(19,56,41));
$pdf->SetAligns(array('L','L','L'));
$pdf->RowNB(array('Adeudo Neto',' ________________________________ $',"________________________"),79);

#$pdf->SetX(90);
$pdf->SetY(96);
$pdf->Cell(70,1,'             ______________________________________________  ',0,0,'C');
$pdf->Ln(3);
$pdf->SetFont('Arial','',6);
$pdf->Cell(70,1,'                 FIRMA DEL INTERESADO  ',0,0,'C');

$pdf->Rect(10,103,196,56);

$pdf->SetFont('Arial','',8);

$pdf->SetY(97);
$pdf->SetWidths(array(194));
$pdf->SetAligns(array('C',));
$pdf->Ln(7);
$pdf->RowNB1(array('(DEPARTAMENTO DE PRÉSTAMOS) A PAGAR:'),1);


$pdf->Ln(6);
$pdf->SetWidths(array(43,38,65,50));
$pdf->SetAligns(array('L','L','L','L'));
$pdf->Ln(2);
$pdf->RowNB(array('Importe del Préstamo concedido','_____________________ $',"______________________________________ $",'______________________________'),0);

$pdf->SetWidths(array(45,35,65,51));
$pdf->SetAligns(array('L','L','L','L'));
$pdf->RowNB(array('Intereses al 9% s/saldos insolutos',' ___________________ $'," ______________________________________ $",' ______________________________'),0);

$pdf->SetWidths(array(30,50,65,51));
$pdf->SetAligns(array('L','L','L','L'));
$pdf->RowNB(array('Prima de Renovación:','  ____________________________ $'," ______________________________________ $",' ______________________________'),0);

$pdf->SetFont('Arial','B',8);
$pdf->SetWidths(array(13,65,51));
$pdf->SetAligns(array('L','L','L'));
$pdf->RowNB(array('SUMA $',' ______________________________________ $'," ______________________________"),67);
#$pdf->Cell(196,0,' ',1,0,'R');

$pdf->SetFont('Arial','',8);
$pdf->Ln(1);
$pdf->Cell(20,4,'Menos: ',0,0,'L');

$pdf->Ln(4);
$pdf->SetWidths(array(52,41,103));
$pdf->SetAligns(array('L','L','L'));
$pdf->RowNB(array('Adeudo neto del Préstamo anterior No.','_______________________ $',"________________________________________________________________"),0);

$pdf->SetFont('Arial','B',8);
$pdf->SetWidths(array(18,65,51));
$pdf->SetAligns(array('L','L','L'));
$pdf->RowNB(array(' LIQUIDO $','______________________________________ $',"_______________________________"),62);

$pdf->SetFont('Arial','',8);
$pdf->SetWidths(array(18,66,34,74));
$pdf->SetAligns(array('L','L','L','L'));
$pdf->RowNB(array('Cheque No.','________________________________________',"Fecha Primer Descuento",'___________________________________________'),0);

$pdf->SetWidths(array(20,38,17,43,10,68));
$pdf->SetAligns(array('L','L','L','L'));
$pdf->RowNB(array('Préstamo No.','______________________',"Cuenta No.",'__________________________','Por $','__________________________________________'),0);

$pdf->Rect(10,159,196,36);

$pdf->SetFont('Arial','',6);

$pdf->Ln(2);
$pdf->Cell(196,4,"DEBO(emos) y PAGARÉ(emos) a la Dirección de Pensiones del Estado de Colima, la cantidad de: $ _____________________________________",0,0,'R');

$pdf->Ln(3);
$pdf->Cell(196,4,"(________________________________________________________________________________________________________________________) por concepto de préstamo a Corto Plazo No.____ de",0,0,'L');

$pdf->Ln(3);
$pdf->Cell(196,4,"de esta fecha, la que devolveré mediante __________________________________________________________________________________________________________________________________",0,0,'L');

$pdf->Ln(3);
$pdf->Cell(196,4,"__________________________________ abonos quincenales de $ ______/_____________(________________________________________________________________________________________)",0,0,'L');

$pdf->Ln(3);
$pdf->Cell(196,4,"Cada uno, los que me serán descontados en la oficina que cubre mis sueldos. En caso de separación del servicio, se aplicará el pago del adeudo, el fondo constituido con los descuentos del 5% señalado en",0,0,'L');

$pdf->Ln(3);
$pdf->Cell(196,4,"la Ley relativa, así mismo este documento se tendrá por vencido anticipadamente al no verificarse cualquiera de los pagos quincenales respectivos.",0,0,'L');

$pdf->Ln(4);
$pdf->Cell(196,4,"Me sujeto a las dispociciones legales correspondientes, y en caso de incumplimiento por mi parte: a) Me someto a los Tribunales de la Ciudad de Colima; b) Renuncio expresamente al fuero de mi domicilio ",0,0,'L');

$pdf->Ln(3);
$pdf->Cell(196,4,"y a cualquier otro que la Ley me conceda; c) Convengo de que los gastos y costas que por ello se originen, serían a mi cargo; d).- Acepto cubrir por concepto de intereses moratorios al tipo del ",0,0,'L');
$pdf->Ln(3);

$pdf->Cell(196,4,"_____________ mensual, desde la constitución en mora, hasta la total liquidación de mi adeudo.",0,0,'L');
$pdf->Ln(4);

$pdf->Cell(196,4,"Si por cualquier razón no se hicieren los descuentos correspondientes en mis sueldos, me comprometo a ahcerlo notar inmediatamente en la Oficina pagadora para que los efectúe, y si esto no fuera",0,0,'L');
$pdf->Ln(3);

$pdf->Cell(196,4,"posible, enteraré las cantidades omitidas en la propia Oficina o en la Dirección de Pensiones. De no hacerlo yo, la Dirección podrá mandar a hacer las deducciones hasta por el 50% de mis sueldos.",0,0,'L');
$pdf->Ln(4);

$pdf->Rect(10,195,196,82);

$pdf->SetWidths(array(194));
$pdf->SetAligns(array('C',));
$pdf->Ln(1);
$pdf->RowNB1(array('É L   O   L O S   A V A L E S   A D Q U I R I M O S   L A S   M I S M A S   O B L I G A C I O N E S   Y   R E S P O N S A B I L I D A D E S'),1);
$pdf->Ln(14);



$pdf->SetWidths(array(71,1,35,1,88));
$pdf->SetAligns(array('C','C','C','C','C'));
$pdf->SetY(212);
$pdf->RowNB(array(trim($sNombre),'',trim($iFicha),"",trim($sDomicilio)),0);
$pdf->SetY(213);
$pdf->RowNB(array('__________________________________________________________','',"_____________________","","_________________________________________________________________________"),0);
$pdf->SetY(216);
$pdf->SetFont('Arial','',7);
$pdf->RowNB(array("NOMBRE Y FIRMA DEL DEUDOR",'',"No. DE CONTROL","","DOMICILIO"),0);


$iCantAv1 = "";
if (isset($aDatos['iCantidadAv1']) && strlen($aDatos['iCantidadAv1'])>0) {
	$iTempS=str_replace(",","",$aDatos['iCantidadAv1']);
	$iCantAv1 = "$ ".number_format(trim($iTempS),2);
}
$pdf->Ln(8);
$pdf->SetWidths(array(65,1,25,1,27,1,76));
$pdf->SetAligns(array('C','C','C','C','C','C','C'));
if (isset($aDatos['sNomAv1'])) {
	$pdf->SetY(232);
	$pdf->Cell(1);
	$pdf->Cell(64,3,trim($aDatos['sNomAv1']),0,1,'C'); 	#Nombre Aval
	$pdf->SetY(232);
	$pdf->Cell(68);
	$pdf->Cell(21,3,trim($aDatos['sNoConAv1']),0,1,'C'); #No Control Aval
	$pdf->SetY(232);
	$pdf->Cell(95);
	$pdf->Cell(21,3,$iCantAv1,0,1,'C'); #Cantidad Avalada
	$pdf->SetY(232);
	$pdf->Cell(119);
	$pdf->Cell(77,3,trim($aDatos['sDomAv1']),0,1,'C');	#Domicilio Aval
}
$pdf->SetY(232);
$pdf->SetFont('Arial','',6);
$pdf->RowNB(array('_____________________________________________________','',"__________________","","__________________","","______________________________________________________________"),0);
$pdf->SetY(235);
$pdf->SetFont('Arial','',7);
$pdf->RowNB(array("NOMBRE Y FIRMA DEL AVAL",'',"No. DE CONTROL","","CANTIDAD AVALADA","","DOMICILIO"),0);

$iCantAv2 = "";
if (isset($aDatos['iCantidadAv2']) && strlen($aDatos['iCantidadAv2'])>0) {
	$iTempS=str_replace(",","",$aDatos['iCantidadAv2']);
	$iCantAv2 = "$ ".number_format(trim($iTempS),2);
}

$pdf->Ln(11);
$pdf->SetWidths(array(65,1,25,1,27,1,76));
$pdf->SetAligns(array('C','C','C','C','C','C','C'));
if (isset($aDatos['sNomAv2'])) {
	$pdf->SetY(251);
	$pdf->Cell(1);
	$pdf->Cell(64,3,trim($aDatos['sNomAv2']),0,1,'C'); 	#Nombre Aval
	$pdf->SetY(251);
	$pdf->Cell(68);
	$pdf->Cell(21,3,trim($aDatos['sNoConAv2']),0,1,'C'); #No Control Aval
	$pdf->SetY(251);
	$pdf->Cell(95);
	$pdf->Cell(21,3,$iCantAv2,0,1,'C'); #Cantidad Avalada
	$pdf->SetY(251);
	$pdf->Cell(119);
	$pdf->Cell(77,3,trim($aDatos['sDomAv2']),0,1,'C');	#Domicilio Aval
}
$pdf->SetY(251);
$pdf->SetFont('Arial','',6);
$pdf->RowNB(array('_____________________________________________________','',"__________________","","__________________","","______________________________________________________________"),0);
$pdf->SetY(254);
$pdf->SetFont('Arial','',7);
$pdf->RowNB(array("NOMBRE Y FIRMA DEL AVAL",'',"No. DE CONTROL","","CANTIDAD AVALADA","","DOMICILIO"),0);		

$pdf->Output();
?>