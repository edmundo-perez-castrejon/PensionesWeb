<?
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
else{		
?>
<html><!-- InstanceBegin template="/Templates/pensiones.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title> Gobierno del Estado Libre y Soberano de Colima &bull; Secretar&iacute;a de Administraci&oacute;n &bull;</title>
<!-- InstanceEndEditable --><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body,td,th {
	font-family: Tahoma;
	font-size: 10px;
	color: #333333;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #F7F7F7;
	background-image: url(../../imagenes/img/fill-pattern2.jpg);
}
-->
</style>
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
<link href="../../styles/estilo.css" rel="stylesheet" type="text/css">
<link href="/styles/estilo2.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="800" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" id="gob general">
  <tr>
    <td><img src="../../imagenes/img/img-superiorgobierno.jpg" width="800" height="102"></td>
  </tr>
  <tr>
    <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="../../imagenes/ico/blank.gif" width="1" height="1"></td>
        </tr>
        <tr>
          <td><table width="100%"  border="0" cellpadding="0" cellspacing="0" background="../../imagenes/ico/fill-sup.jpg">
            <tr>
              <td width="48%" valign="top"><img src="../../imagenes/img/img-logosup.jpg" width="367" height="75"></td>
              <td width="1%"><img src="../../imagenes/img/img-linea.jpg" width="6" height="75"></td>
              <td width="51%" valign="top">
			  
				  <table width="100%"  border="0" cellspacing="0" cellpadding="0">
					<tr>
					  <td width="47%"><img src="../../imagenes/ico/ico-dependencias2.jpg" width="44" height="39"><strong> Directorio</strong></td>
					  <td width="5%">&nbsp;</td>
					  <td width="48%"><img src="../../imagenes/ico/ico-directorio-small.jpg" width="44" height="39"> <strong>Tr&aacute;mites y Servicios </strong></td>
					</tr>
					<tr>
					  <td valign="top">Buscar:
					  <form action="../directorio/funcionariosr.php" method="post" name="forma1" id="forma1">
						<p>
						  <input name="FUNCIONARIO" type="text" id="FUNCIONARIO">
						  <img src="../../imagenes/ico/btn-buscar.jpg" width="68" height="19" onClick="javascript:forma1.submit()"></p>
						</form> </td> <td>&nbsp;</td>
					  <td>Buscar:
					  <form action="../tramite/tramiter.php" method="post" name="forma2" id="forma2">
						<p>
						  <input name="SBusca" type="text" id="SBusca">
						  <img src="../../imagenes/ico/btn-buscar.jpg" width="68" height="19" onClick="javascript:forma2.submit()"></p>
						</form>					  </td>
					</tr>
				  </table>
			 
			  </td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="166" valign="top"><table width="166"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><img src="../../imagenes/ico/title-secciones.gif" width="166" height="27"></td>
                  </tr>
                </table>
                  <table width="100%"  border="0" cellpadding="0" cellspacing="0" background="../../imagenes/ico/fill-gris.gif">
                    <tr>
                      <td width="6%" valign="top" bgcolor="#748F7C">&nbsp;</td>
                      <td width="94%" valign="top" bgcolor="#748F7C"><table width="100%"  border="0" cellpadding="1" cellspacing="1" class="submenu" id="navlist">
                          <tr>
                            <td bgcolor="#93A899" class="creditosfoto"><img src="../../imagenes/ico/flechita.gif" width="11" height="9">&nbsp;<a href="../index.php">Inicio</a></td>
                          </tr>
                          <tr>
                            <td bgcolor="#93A899"><span class="creditosfoto"><img src="../../imagenes/ico/flechita.gif" width="11" height="9"> <a href="../ley_pensiones/ley.php">Ley de Pensiones</a></span></td>
                          </tr>
                          <tr>
                            <td bgcolor="#93A899"><span class="creditosfoto"><img src="../../imagenes/ico/flechita.gif" width="11" height="9">&nbsp;<a href="index.php">Consulta tu Saldo</a><a href="/vision.php"></a></span></td>
                          </tr>
                          <tr>
                            <td bgcolor="#93A899"><span class="creditosfoto"><img src="../../imagenes/ico/flechita.gif" width="11" height="9">&nbsp;<a href="../regla_med/reglamento.php">Reglamento de &nbsp;&nbsp;&nbsp;&nbsp;Servicios Medicos</a><a href="/mision.php"></a></span></td>
                          </tr>
                          <tr>
                            <td bgcolor="#93A899"><span class="creditosfoto"><img src="../../imagenes/ico/flechita.gif" width="11" height="9">&nbsp;<a href="../organigrama.php">Organigrama</a></span></td>
                          </tr>
                          <tr>
                            <td bgcolor="#93A899"><span class="creditosfoto"><img src="../../imagenes/ico/flechita.gif" width="11" height="9"><a href="../cortoplazo.html">Requisitos para &nbsp;&nbsp;&nbsp;&nbsp;Pr&eacute;stamos Corto Plazo</a></span></td>
                          </tr>
                          <tr>
                            <td bgcolor="#93A899"><span class="creditosfoto"><img src="../../imagenes/ico/flechita.gif" width="11" height="9">&nbsp;<a href="../hipotecarios.html">Requisitos Prestamos &nbsp;&nbsp;&nbsp;&nbsp;Hipotecarios</a></span></td>
                          </tr>
                          <tr>
                            <td bgcolor="#93A899"><span class="creditosfoto"><img src="../../imagenes/ico/flechita.gif" width="11" height="9"><a href="../directorio/index.php">&nbsp;Directorio Integral</a> </span></td>
                          </tr>
                          
                          <tr>
                            <td bgcolor="#93A899"><span class="creditosfoto"><img src="../../imagenes/ico/flechita.gif" width="11" height="9">&nbsp;<a href="../ubicacion.php">Ubicaci&oacute;n</a></span></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                      </table></td>
                    </tr>
                  </table>
                <br></td>
              <td width="634" valign="top">&nbsp;
                  <table width="95%"  border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><!-- InstanceBeginEditable name="info" -->
					   <p align="center"><a href="cerrar_sesion.php" class="enlaces">Cerrar Sesion </a> &nbsp;&nbsp; | &nbsp; <a href="clave.php" class="enlaces">Asignar o Cambiar Clave</a>&nbsp;&nbsp; | &nbsp; <a href="saldos.php" class="enlaces">Saldos</a> <br> <a href="corto.php" class="enlaces">Pr&eacute;stamo Corto Plazo</a> | <a href="hipotecario.pdf" target="_blank" class="enlaces">Pr&eacute;stamo Hipotecario</a> | <a href="simulador.php" class="enlaces">Simulador</a> </p>
                        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
						  <tr>
							<td><div align="center">
							  <p class="tituloPeq">Simulador de prestamos</p>							  
							  <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
								<tr>
								  <td width="563">
								  <?
								  if (!isset($_POST['btnEnvia'])) {								  	
								  	?>
										<table width="100%"  border="0" cellspacing="0" cellpadding="0">
										  <tr>
											<td width="100%" class="textoPies">
											<form action="simulador.php" method="post" enctype="multipart/form-data" name="frmCambio" id="frmCambio">
											  <table width="81%" border="0" align="center" cellpadding="0" cellspacing="1">
												<tr>
												  <td height="25" colspan="2" bgcolor="#C8D2C9" class="textoPies"><div align="center" class="submenu">
												  SIMULADOR</div></td>
												</tr>
												<tr>
												  <td class="textoPies"><div align="right">Tipo Pr&eacute;stamo:</div></td>
												  <td class="textoPies"><select name="iTipo" size="1" id="iTipo">
												    <option value="1" selected>Pr&eacute;stamo Corto Plazo</option>
												    <option value="2">Pr&eacute;stamo Hipotecario</option>
												    </select>
												  </td>
											    </tr>
												<tr>
												  <td class="textoPies"><div align="right">Cantidad Solicitada:</div></td>
												  <td class="textoPies"><input name="iCantidad" type="text" id="iCantidad" size="15" maxlength="10"></td>
												</tr>
												<tr>
												  <td width="26%" class="textoPies"><div align="right">No. de Quincenas:</div></td>
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
													<input name="btnEnvia" type="submit" id="btnEnvia" value="Simulaci&oacute;n de Prestamo">
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
									require_once("../nusoap/lib/nusoap.php");
						
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
                                                      <td width="20%" bgcolor="#EDF2D9" class="textoPies"><div align="right"><b>Tipo de Préstamo: </b></div></td>
                                                      <td width="80%" class="textoPies">
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
												<td width="11%" bgcolor="#EDF2D9" class="textoPies"><div align="right"><b>Capital:</b></div></td>
												<td width="39%" class="textoPies">$<?php echo number_format($iCapital,2);?></td>
												<td width="35%" bgcolor="#EDF2D9" class="textoPies"><div align="right"><b>No. de quincenas a descontar </b></div></td>
												<td width="15%" class="textoPies"><?php echo $iQuincenas;?></td>
											  </tr>
											  <tr>
												<td bgcolor="#EDF2D9" class="textoPies"><div align="right"><b>Intereses:</b></div></td>
												<td class="textoPies">$<?php echo number_format($iTotInteres,2);?></td>
												<?
												if ($iTipo==1) {	#Si es prestamo a corto plazo se cobra prima de renovacion, en caso de tener adeudo
												?>
													<td bgcolor="#EDF2D9" class="textoPies"><div align="right"><b>Prima renovaci&oacute;n  </b></div></td>
													<td class="textoPies">$<?php echo number_format($iPrima,2);?></td>
												<?
												}
												?>
											  </tr>
											  <tr>
												<td bgcolor="#EDF2D9"><div align="right"><span class="textoPies"><b>TOTAL:</b></span></div></td>
												<td colspan="2" class="textoPies">$<?php echo number_format($iTotalPagar,2);?> </td>
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
												<td width="18%" bgcolor="#EDF2D9" class="textoPies"><div align="right"><b>Capital:</b></div></td>
												<td width="50%" class="textoPies">$<?php echo number_format($iPagoQuinB,2);?> </td>
												<td width="12%" bgcolor="#EDF2D9" class="textoPies"><div align="right"><b>Intereses: </b></div></td>
												<td width="20%" class="textoPies">$<?php echo number_format($iIntNetoQuin,2);?> </td>
											  </tr>
											  <tr>
												<td bgcolor="#EDF2D9" class="textoPies"><div align="right"><b>Pago Quincenal:</b></div></td>
												<td class="textoPies">$<?php echo number_format($iPagoTotQuin,2);?></td>
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
											  <table width="50%" border="0" align="center" cellpadding="0" cellspacing="1">
												<tr>
												  <td colspan="3" class="submenu"><div align="center">
												  <span class="textoPies"><b>TABLA DE AMORTIZACI&Oacute;N </b></span></div></td>
												</tr>
												<tr>
												  <td width="20%" bgcolor="#EDF2D9" class="submenu"><div align="center">No. Pago </div></td>
												  <td width="57%" bgcolor="#EDF2D9" class="submenu"><div align="center">Capital</div></td>
												  <td width="23%" bgcolor="#EDF2D9" class="submenu"><div align="center">Intereses</div></td>
												</tr>
												<?
												foreach($aQuincenas as $iIndice=>$sVar) {
													if (isset($aQuincenas[$iIndice])) {
												?>
													<tr>
													  <td><div align="center"><span class="textoPies">
													  <?php echo $aQuincenas[$iIndice]["noPago"];?>
													  </span></div></td>
													  <td><span class="textoPies"><?php echo number_format($aQuincenas[$iIndice]["capital"],2)?></span></td>
													  <td><span class="textoPies"><?php echo number_format($aQuincenas[$iIndice]["interes"],2)?></span></td>
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
											  <td height="25" colspan="2" bgcolor="#C8D2C9" class="textoPies"><div align="center" class="submenu">
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
                      <!-- InstanceEndEditable --></td>
                    </tr>
                </table></td>
            </tr>
          </table></td>
        </tr>
        <tr bgcolor="#E7EBE8">
          <td>&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>
<table border="0" cellspacing="0" cellpadding="0">
</table>
<table border="0" cellspacing="0" cellpadding="0">
</table>
</body>
<!-- InstanceEnd --></html>
<?
}
?>