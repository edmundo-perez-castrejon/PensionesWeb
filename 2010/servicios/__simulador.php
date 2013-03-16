<?php
session_start();

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
	$msg= "ES%20NECESARIO%20INICIAR%20SESION";
	header("Location: index.php?msg=.$msg");
}
 
$sUrl="http://www.colima-estado.gob.mx/cfg/menu.php";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$sUrl);
curl_setopt($ch,CURLOPT_HEADER,false);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$sMenu=curl_exec($ch);
$error=curl_error($ch);
curl_close($ch);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/contenido.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Direcci&oacute;n de Pensiones de Gobierno del Estado de Colima</title>
<script type="text/javascript" src="../js/jquery.js"></script>
<!-- InstanceEndEditable -->
<link href="../styles/main.css" rel="stylesheet" type="text/css" />
<link href="../styles/variaciones/layout_variacion_icc.css" rel="stylesheet" type="text/css" />
<link href="../styles/nav_vertical_icc.css" rel="stylesheet" type="text/css" />
<link href="../styles/layout_icc_int.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://www.colima-estado.gob.mx/js/mainmenu.js"></script>
<script type="text/javascript" src="../js/menu_vertical_ie.js"></script>
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
.style5 {color: #000000}
.style6 {color: #333333}
-->
</style>
<!-- InstanceEndEditable -->
</head>

<body>

<div id="wrap">
    
    	<div id="header">
        		<div id="logo_administracion"></div>
                <div id="header_left">
                	<div id="titulo_dependencia"></div>
                	<div id="escudo_gobierno_header"></div>
	                <div id="navegacion_header">
					<?php 
					echo $sMenu;                  
					?>
					</div>
                </div>
        </div>
      <div id="container">
      
		<!--Navegacion vertical-->      

           <div id="navegacion_vertical_icc">
           						

				<div id="menu2">
						<!--<ul>
							<li><a href="http://pensiones.col.gob.mx/legislacion.php" title="Ley de Pensiones">Ley de pensiones</a></li>
							<li><a href="http://pensiones.col.gob.mx/mision.php" title="Misión y visión">Misión y Visi&oacute;n</a></li>							
							<li><a href="http://pensiones.col.gob.mx/servicios/index.php" title="Consulta tu saldo de pensiones">Consulta tu saldo</a></li>
							<li><a href="http://pensiones.col.gob.mx/reglamento.php" title="Reglamento de servicios médicos">Reglamento de servicios médicos</a></li>
							<li><a href="http://pensiones.col.gob.mx/organigrama.php" title="Organigrama">Organigrama</a></li>
							<li><a href="http://pensiones.col.gob.mx/cortoplazo.php" title="Requisitos para prestamos a corto plazo">Requisitos para prestamos a corto plazo</a></li>
							<li><a href="http://pensiones.col.gob.mx/hipotecarios.php" title="Requisitos para prestamos hipotecarios">Requisitos para prestamos hipotecarios</a></li>							
							<li><a href="http://pensiones.col.gob.mx/ubicacion.php" title="Ubicación">Ubicación</a></li>                                
						</ul>-->
                        <?php
						require_once('/var/http/htdocs/dirpensiones/2010/clases/sql.php');
						require_once('/var/http/htdocs/dirpensiones/2010/clases/menu/menu.php');
                        $oMenuDpcia = new menu(190000);                                  
                        echo $oMenuDpcia->getMenuLista();                                    
                    	?>
				</div>

             </div>
                                          

        
            
          <!--  Fin de la navegacion vertical-->
      
           
          <!-- inicio de area de contenido    -->
          <div id="contenido_interior_icc">
          			<div id="ruta_sitio"><a href="http://pensiones.col.gob.mx/2010/index.php"><strong>inicio</strong></a>  &nbsp;&nbsp;&nbsp; •  &nbsp; <!-- InstanceBeginEditable name="seccion" --><a href="#">Servicios</a><!-- InstanceEndEditable -->   &nbsp;&nbsp;•    &nbsp;&nbsp;<!-- InstanceBeginEditable name="contenido" --><a href="#">Consulta tu saldo </a><!-- InstanceEndEditable -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <!-- Búsqueda Google -->
</div>
                    <div id="titulo_contenido"><a name="start" id="start"></a><!-- InstanceBeginEditable name="titulo" -->Simulador de prestamos<!-- InstanceEndEditable --></div>
                    <div id="texto_contenido">
                      <p><!-- InstanceBeginEditable name="cuerpo" -->
					  <table width="100%"  border="0" cellspacing="0" cellpadding="0">
						  <tr>
							<td><div align="center">
							  <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
								<tr>
								  <td>
								  <?
								  if (!isset($_POST['btnEnvia'])) {								  	
								  	?>
										<table width="100%"  border="0" cellspacing="0" cellpadding="0">
										  <tr>
											<td width="100%" class="textoPies">
											<form action="simulador.php" method="post" enctype="multipart/form-data" name="frmCambio" id="frmCambio">
											  <table width="64%" border="0" align="center" cellpadding="0" cellspacing="1">
												<tr>
												  <td height="25" colspan="2" bgcolor="#345474" class="textoPies"><div align="center" class="titulos_secciones_blanco">
												  SIMULADOR</div></td>
												</tr>
												<tr>
												  <td class="txt_normal"><div align="right">Tipo Pr&eacute;stamo:</div></td>
												  <td class="textoPies"><select name="iTipo" size="1" id="iTipo">
												    <option value="1" selected>Pr&eacute;stamo Corto Plazo</option>
												    <option value="2">Pr&eacute;stamo Hipotecario</option>
												    </select>
												  </td>
											    </tr>
												<tr>
												  <td class="txt_normal"><div align="right">Cantidad Solicitada:</div></td>
												  <td class="textoPies"><input name="iCantidad" type="text" id="iCantidad" size="15" maxlength="10"></td>
												</tr>
												<tr>
												  <td width="26%" class="txt_normal"><div align="right">No. de Quincenas:</div></td>
												  <td width="74%" class="textoPies"><div align="left">
													<input name="iQuincenas" type="text" id="iQuincenas" size="4" maxlength="3">
												  </div></td>
												</tr>
												<tr>
												  <td class="textoPies">&nbsp;</td>
												  <td class="textoPies">&nbsp;</td>
												</tr>
												<tr>
												  <td colspan="2" class="textoPies"><div align="center">
													<input name="btnEnvia" type="submit" id="btnEnvia" value="Simular de Prestamo">
												  </div></td>
											    </tr>
											  </table>
											 </form>
										  </tr>
										</table>
								  	<?
								  }
								  else {								  	
									#$sError=0;																		
									require_once("../ws/lib/nusoap.php");
						
									#$client = new soapclient('http://10.10.20.62/dirpensiones/dir_pensiones/rppc/ws_saldos.php?wsdl', true);	#local
									$client = new nusoap_client('http://dirpensiones.dyndns.org/nusoap/ws_saldos.php?wsdl', true);	#Server
									if ($sErrorW = $client->getError()) {
										echo "No se pudo realizar la operación [" . $sErrorW . "]";
										die();
									}
									
									#$sCurp='FODG660201HCMLRL02';																												
									
									###### Calculo ADEUDOS Corto Plazo #####
									$aAdeudoCP= $client->call("adeudo",array("curp"=>$sCurp,"noControl"=>$iNoControl));
									$iAdeudo = $aAdeudoCP['adeudo'];
									#### Fin ADEUDOS Corto Plazo																		
									
									##### Consulta FONDO
									$aFondo= $client->call("fondo",array("curp"=>$sCurp,"noControl"=>$iNoControl));
									$iFondo = $aFondo['fondo'];
									##### Fin FONDO
																			
									#### Validamos que tenga posibilidad de solicitar un prestamo
									if (isset($_POST['iTipo']) && is_numeric($_POST['iTipo'])) {	#Valido que exista y sea correcto el tipo de prestamo
										$iTipo = $_POST['iTipo'];
										if ($iTipo <= 0 || $iTipo>2) 
											$sError="Es necesario seleccionar el tipo de prestamo.";
									}
									else 
										$sError="Es necesario indicar el tipo de prestamo.";									
									
									#### Valido que Exista y se correcta la cantidad del prestamo
									if (isset($_POST['iCantidad']) && is_numeric($_POST['iCantidad'])) {
										$iCapital = $_POST['iCantidad'];
										if ($iCapital <= 0) 
											$sError="Cantidad debe ser mayor de 0";
									}
									else 
										$sError="Es necesario indicar la cantidad";
									
									#### Valido que Exista y se correcta el numero de quincenas del prestamo
									if (isset($_POST['iQuincenas']) && is_numeric($_POST['iQuincenas'])) {
										$iQuincenas = $_POST['iQuincenas'];
										if (isset($iTipo) && $iTipo==1) {
											if ($iQuincenas <= 0 || $iQuincenas > 36) 
												$sError="Número Minimo de quincenas: 1 <br> Número Máximo de quincenas: 36";
										}
										elseif (isset($iTipo) && $iTipo==2) {
											if ($iQuincenas <= 0 || $iQuincenas > 360) 
												$sError="Número Minimo de quincenas: 1 <br> Número Máximo de quincenas: 360";
										}
									}
									else 
										$sError="Es necesario indicar el numero de quincenas";
									
									if (!isset($sError)) {	#Si no hay errores generamos la simulacion
										#$iIntDeven = 0;	#Intereses devengados
										$iIntAnual = 0.09; #Interes Anual sobre saldos insolutos
										
										$iIntTotal = $iCapital*$iIntAnual;	#Total de intereses a pagar
										#$iIntQuin = ($iIntTotal/12)/2;	#Intereses por quincena
										
										if ($iAdeudo > 0)	#Si ya cuenta con un adeudo, se le cobra la prima
											$iPrima = $iCapital*0.001;	#Prima de renovacion 1% sobre el total del prestamo
										else
											$iPrima = 0;
										
										$iPagoQuinB = $iCapital/$iQuincenas;	#Pago bruto por quincena
										
										$iCapitalTemp=$iCapital;
										$iTotInteres=0;
											
										for ($i=1;$i<=$iQuincenas;$i++) {
											if ( ($i%2)>0 )
												$iIntQuin = $iCapitalTemp*0.09/12/2;	  #Interes quincenal
											$iTotInteres+=round($iIntQuin,2);
											
											if ($iTipo==1)	#Valido el tipo de prestamo para saber cuantos ceros poner en el listado de pagos
												$iCeros=2;
											elseif($iTipo==2)
												$iCeros=3;
											
											$iNoPago = str_pad($i,$iCeros,"0",STR_PAD_LEFT);	#Agrego cero a la izq en caso de necesitar												
											$aQuincenas[]=array("noPago"=>$iNoPago,'capital'=>$iCapitalTemp,'interes'=>$iIntQuin);
											$iCapitalTemp=$iCapitalTemp-$iPagoQuinB;
										}
										
										if ($iTotInteres > 0) {
											$iIntTemp=$iTotInteres;
											if ($iPrima > 0)
												$iIntTemp+=$iPrima;
											$iIntNetoQuin=$iIntTemp/$iQuincenas;
										}
										
										$iPagoTotQuin=$iIntNetoQuin+$iPagoQuinB;
										
										#Total a pagar por el prestamo
										$iTotalPagar = $iCapital + $iTotInteres + $iPrima;
									?>
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
										  <tr>
											<td><table width="100%" border="0" cellspacing="1" cellpadding="0">
											  <tr>
											    <td colspan="4" class="textoPies"><table width="100%" border="0" cellspacing="1" cellpadding="0">
                                                    <tr>
                                                      <td width="20%" bgcolor="#CCCCCC" class="textoPies"><div align="right" class="style6">Tipo de Préstamo: </div></td>
                                                      <td width="80%" class="txt_normal style5">
													  <?
													  if ($iTipo==1)
													  	echo "Corto Plazo";
													  elseif ($iTipo==2)
													  	echo "Hipotecario";
													  ?></td>
                                                    </tr>
                                                  </table></td>
										      </tr>
											  <tr>
												<td width="11%" bgcolor="#CCCCCC" class="textoPies"><div align="right" class="style6">Capital:</div></td>
												<td width="39%" class="textoPies style5">$<?php echo number_format($iCapital,2);?></td>
												<td width="35%" bgcolor="#CCCCCC" class="textoPies"><div align="right" class="style6">No. de quincenas a descontar </div></td>
												<td width="15%" class="textoPies"><span class="style5">
											    <?php echo $iQuincenas;?>
												</span></td>
											  </tr>
											  <tr>
												<td bgcolor="#CCCCCC" class="textoPies"><div align="right" class="style6">Intereses:</div></td>
												<td class="textoPies style5">$<?php echo number_format($iTotInteres,2);?></td>
												<?
												if ($iTipo==1) {	#Si es prestamo a corto plazo se cobra prima de renovacion, en caso de tener adeudo
												?>
													<td bgcolor="#CCCCCC" class="textoPies"><div align="right" class="style6">Prima renovaci&oacute;n </div></td>
													<td class="textoPies style5">$<?php echo number_format($iPrima,2);?></td>
												<?
												}
												?>
											  </tr>
											  <tr>
												<td bgcolor="#CCCCCC"><div align="right" class="style6"><span class="textoPies">TOTAL:</span></div></td>
												<td colspan="2" class="textoPies style5">$<?php echo number_format($iTotalPagar,2);?> </td>
												<td>&nbsp;</td>
											  </tr>
											</table></td>
										  </tr>
										  <tr>
											<td height="25" class="textoPies">&nbsp;</td>
										  </tr>
										  <tr>
											<td><table width="100%" border="0" cellspacing="1" cellpadding="0">
											  <tr>
												<td width="18%" bgcolor="#CCCCCC" class="textoPies"><div align="right" class="style6">Capital:</div></td>
												<td width="50%" class="textoPies style5">$<?php echo number_format($iPagoQuinB,2);?> </td>
												<td width="12%" bgcolor="#CCCCCC" class="textoPies"><div align="right" class="style6">Intereses: </div></td>
												<td width="20%" class="textoPies style5">$<?php echo number_format($iIntNetoQuin,2);?> </td>
											  </tr>
											  <tr>
												<td bgcolor="#CCCCCC" class="textoPies"><div align="right" class="style6">Pago Quincenal:</div></td>
												<td class="textoPies style5">$<?php echo number_format($iPagoTotQuin,2);?></td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
											  </tr>
											</table></td>
										  </tr>
										  <tr>
											<td><div align="center"></div></td>
										  </tr>
										  <tr>
											<td valign="top">
											<?
											if (isset($aQuincenas) && count($aQuincenas)>0) {
											?>
											  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
												<tr>
												  <td colspan="3" class="submenu"><div align="center">
												  <span class="titulo_bold_negro">TABLA DE AMORTIZACI&Oacute;N </span></div></td>
												</tr>
												<tr>
												  <td width="20%" height="20" bgcolor="#345474" class="titulos_secciones_blanco"><div align="center">No. Pago </div></td>
												  <td width="57%" bgcolor="#345474" class="titulos_secciones_blanco"><div align="center">Capital</div></td>
												  <td width="23%" bgcolor="#345474" class="titulos_secciones_blanco"><div align="center">Intereses</div></td>
												</tr>
												<?
												foreach($aQuincenas as $iIndice=>$sVar) {
													if (isset($aQuincenas[$iIndice])) {
												?>
													<tr>
													  <td><div align="center" class="style5"><span class="textoPies">
													  <?php echo $aQuincenas[$iIndice]["noPago"];?>
													  </span></div></td>
													  <td><span class="textoPies style5"><?php echo number_format($aQuincenas[$iIndice]["capital"],2)?></span></td>
													  <td><span class="textoPies style5"><?php echo number_format($aQuincenas[$iIndice]["interes"],2)?></span></td>
													</tr>
												<?
													}
												}
												?>
											  </table>
											<?
											}
											?>
										    </td>
										  </tr>
										</table>									  
									<?
									}
									else {
										?>
										<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
											<tr>
											  <td height="25" colspan="2" bgcolor="#C8D2C9" class="textoPies"><div align="center" class="submenu style5">
											 <?php echo $sError?></div></td>
											</tr>													
								  </table>
										<?
									}
									#}
								  }
								  ?>
								  </td>
								</tr>
							  </table>							  
							  <br>
							  <br>
							</div></td>
						  </tr>
						</table>
						
						<p align="center" class="txt_normal"><a href="cerrar_sesion.php" class="txt_normal"><strong>Cerrar Sesi&oacute;n</strong></a>&nbsp;&nbsp; | &nbsp; <a href="clave.php" class="txt_normal">Asignar o Cambiar Clave</a>&nbsp;&nbsp; | &nbsp; <a href="saldos.php" class="txt_normal">Saldos</a> <br> 
					  <a href="corto.php" class="txt_normal">Pr&eacute;stamo Corto Plazo</a>&nbsp; |&nbsp; <a href="hipotecario.pdf" target="_blank" class="txt_normal">Pr&eacute;stamo Hipotecario</a>&nbsp; |&nbsp; <a href="simulador.php" class="txt_normal">Simulador</a> </p>
					  <!-- InstanceEndEditable --></p>
            </div>
                    <div id="control_navegacion_inferior"></div>
          
          </div>
     		  
      </div>
      <div id="footer">
        <div id="escudo_gobierno_pie"></div>
        <div id="pie_left">
          <div id="enlaces_pie"> </div>
          					<div id="datos_pie" >
          						Torres Quintero No. 156   CP 28000, Col.Centro Colima,Col. <a href="../ubicacion.php"><img src="../imagenes/ico/ico_ubicacion.png" alt="Ver Ubicación" border="0" style="cursor:pointer" title="Ver Ubicación" onclick="javascript:window.open('ubicacion.php','_self');" /></a>
                                contacto:dir_pensiones@prodigy.net.mx.
                                Teléfonos: 312 31 21116.
							</div>   
        </div>
      </div>
</div>
	<script type="text/javascript">qm_create(0,false,0,500,'lev2',false,false,false,true);</script>
</body>
<!-- InstanceEnd --></html>