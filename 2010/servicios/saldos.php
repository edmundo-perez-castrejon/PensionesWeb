<?php
session_start();
//$UrlWebService='http://10.10.20.181:8081/ws/ws_saldos.php?wsdl';

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
.style1 {color: #FFFFFF}
.style2 {color: #000000}
.style5 {color: #000000; font-weight: bold; }
.style6 {
	color: #FF0000;
	font-weight: bold;
}
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
						require_once('../clases/sql.php');
						require_once('../clases/menu/menu.php');
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
                    <div id="titulo_contenido"><a name="start" id="start"></a><!-- InstanceBeginEditable name="titulo" -->Consulta tu saldo <!-- InstanceEndEditable --></div>
                    <div id="texto_contenido">
                      <p><!-- InstanceBeginEditable name="cuerpo" -->
					  <?php
						$iClave = 0;											
													
						require_once("../ws/lib/nusoap.php");
						require_once("clases/conexcionws.php");
						
						#$client = new soapclient('http://10.10.20.62/dirpensiones/dir_pensiones/rppc/ws_saldos.php?wsdl', true);	#local
						$UrlWebService = 'http://dirpensiones.no-ip.org/nusoap/ws_saldos.php?wsdl';	#Server
						
						$client = new nusoap_client($UrlWebService, true);	#Server
						if ($sError = $client->getError()) {
							echo "No se pudo realizar la operación [" . $sError . "]";
							die();
						}
						
						
						##### Datos EMPLEADO
						
						$aInfoEmpleado= $client->call("infoEmpleado",array("curp"=>trim($sCurp),"noControl"=>trim($iNoControl)));
						#echo $iNoControl;
						#print_r($aInfoEmpleado);
						$iClave = $aInfoEmpleado['clave'];
						$sTipoTrabajador = $aInfoEmpleado['tipoTrabajador'];
						$sNombre = $aInfoEmpleado['nombre'];								
						$sDomicilio = $aInfoEmpleado['domicilio'];							
						$sFechaIng = $aInfoEmpleado['fechaIng'];							
						$sDependencia = $aInfoEmpleado['dependencia'];
						$sPuesto = $aInfoEmpleado['puesto'];
						##### Fin EMPLEADO
															
						###### Calculo ADEUDOS Corto Plazo #####
						$aAdeudoCP= $client->call("adeudo",array("curp"=>$sCurp,"noControl"=>$iNoControl));
						$iAdeudo = $aAdeudoCP['adeudo'];
						$sFechaAbono = $aAdeudoCP['fechaAbo'];
						$iQuincFaltan = $aAdeudoCP['quincenas'];
						#### Fin ADEUDOS Corto Plazo
						
						##### Consulta FONDO
						$aFondo= $client->call("fondo",array("curp"=>$sCurp,"noControl"=>$iNoControl));
						$iFondo = $aFondo['fondo'];
						##### Fin FONDO														
						
						##### Datos AVALADOS CP
						#$iAvalado=0;
						if (isset($iClave) && is_numeric($iClave)) {
							$aValados = $client->call("avalados",array("clave"=>$iClave,"noControl"=>$iNoControl));							
						}														
						##### Fin AVALADOS CP
						
						###### Calculo ADEUDOS PH #####
						$iQuinPendH=0;
						$iPrestamoH=0;
						if (isset($iClave) && is_numeric($iClave)) {
							$aAdeudoHip= $client->call("adeudoHip",array("clave"=>$iClave,"noControl"=>$iNoControl));								
							$iQuinPendH=$aAdeudoHip['quincenas'];
							$iPrestamoH=$aAdeudoHip['adeudo'];
						}
						#### Fin ADEUDOS PH
						
						###### Calculo SEGURO PH #####
						$iQuinSeguro=0;
						$iSaldoSeguro=0;
						if (isset($iClave) && is_numeric($iClave)) {
							$aSeguroHip= $client->call("seguroHip",array("clave"=>$iClave,"noControl"=>$iNoControl));								
							$iQuinSeguro=$aSeguroHip['quincenas'];
							$iSaldoSeguro=$aSeguroHip['adeudo'];
						}
						#### Fin SEGURO PH
						
						####Total Avalado
						$iAvalado=0;
						if (isset($aValados) && count($aValados)>0)
						foreach ($aValados as $iInd=>$sTemp){														
							$iAvalado+=$aValados[$iInd]["avalado"]-$aValados[$iInd]["pagado"];
						}
						
						### Fondo Disponible
						$iFondoTem=$iFondo-($iAdeudo+$iAvalado);
						if ($iFondoTem<0)
							$iFondoDis=0;
						else
							$iFondoDis=$iFondoTem;
						?>
						<table width="100%"  border="0" cellspacing="0" cellpadding="0">
						  <tr>
						    <td><span class="style6">Por seguridad te recomendamos que cambies o asignes una clave (contrase&ntilde;a) para evitar que cualquier persona que conozca tu CURP pueda accesar a ver tu informaci&oacute;n. </span></td>
					      </tr>
						  <tr>
						    <td>&nbsp;</td>
					      </tr>
						  <tr>
							<td><div align="center">
							  
							  <p class="titulo_bold_negro">INFORMACIÓN DE SALDOS</p>
							  </div>
							  <table align="center" width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
								<tr>
								  <td><div align="center">
									<table width="98%"  border="0" cellspacing="0" cellpadding="0">
									  <tr>
										<td class="textoPies"><div align="left">Entidad:</div></td>
										<td class="textoPies"><div align="left" class="style2">
										  <?php echo $sDependencia;?></div></td>
									  </tr>
									  <tr>
										<td width="28%" class="textoPies"><div align="left">Nunero de Control:</div></td>
										<td width="72%" class="textoPies"><div align="left" class="style2">
										  <?php echo $iNoControl;?></div></td>
									  </tr>
									  <tr>
										<td class="textoPies"><div align="left">Nombre:</div></td>
										<td class="textoPies"><div align="left" class="style2">
										  <?php echo $sNombre;?></div></td>
									  </tr>
									  <tr>
										<td class="textoPies"><div align="left">Puesto:</div></td>
										<td class="textoPies"><div align="left" class="style2">
										  <?php echo $sPuesto;?></div></td>
									  </tr>
									  <tr>
										<td class="textoPies">Tipo de Trabajador:</td>
										<td class="style2">
									    <?php echo strtoupper($sTipoTrabajador);?></td>
									  </tr>
									  <tr>
										<td class="textoPies"><div align="left">Fondo Total Acumulado:</div></td>
										<td class="textoPies"><div align="left" class="style5">$ 
										  <?php echo number_format($iFondo,2);?> 
									    </div></td>
									  </tr>
									  <tr>
										<td class="textoPies"><div align="left">Fondo Disponible:</div></td>
										<td class="textoPies"><div align="left" class="style5">$ 
										  <?php echo number_format($iFondoDis,2);?> 
									    </div></td>
									  </tr>
									  <tr>
										<td colspan="2" class="textoPies"><div align="center">
										  <table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
											  <td width="50%" class="textoPies">&nbsp;</td>
											  <td width="50%" class="textoPies">&nbsp;</td>												  
											</tr>
											<tr>
											  <td width="50%" height="30" bgcolor="#345474" class="textoPies">
											  <div align="center" class="titulos_secciones_blanco">PRESTAMO CORTO PLAZO </div></td>
											  <td width="50%" bgcolor="#345474" class="textoPies">
											  <div align="center" class="titulos_secciones_blanco">PRESTAMO HIPOTECARIO </div></td>										  
											</tr>
											
											<tr>
											  <td class="textoPies">Fecha &Uacute;ltimo Abono: <span class="style2">
										      <?php echo $sFechaAbono?></span></td>
											  <td class="textoPies"><div align="left">Saldo Pendiente:<span class="style2"> 
											  $
									          <?php echo number_format($iPrestamoH,2); ?>
											  </span></div></td>												  
										    </tr>
											<tr>
											  <td width="50%" class="textoPies"><div align="left">
												<p class="textoPies">Saldo Pendiente:<span class="style5">
											    $ 
										        <?php echo number_format($iAdeudo,2);?>
												</span></p>
											  </div></td>
											  <td width="50%" class="textoPies"><div align="left">Quincenas Pendientes:<span class="style2">
										      <?php echo $iQuinPendH; ?>
											  </span></div></td>												  
											</tr>
											<tr>
											  <td class="textoPies"><div align="left">No. Quincenas Pendientes: <span class="style2">
										      <?php echo $iQuincFaltan?></span></div></td>
											  <td class="textoPies"></td>						 
											</tr>
											<tr>
											  <td class="textoPies">&nbsp;</td>
											  <td width="50%" height="20" bgcolor="#345474" class="textoPies"><div align="center" class="titulos_secciones_blanco">SEGURO HIPOTECARIO </div></td>
											</tr>
											<tr>
											  <td class="textoPies">&nbsp;</td>
											  <td class="textoPies">Saldo Seguro:<span class="style2">$ 
									          <?php echo number_format($iSaldoSeguro,2)?>
											  </span></td>												  
											</tr>
											<tr>
											  <td class="textoPies">&nbsp;</td>
											  <td class="textoPies">Quincenas Seguro:<span class="style2">
										      <?php echo $iQuinSeguro?></span></td>
											</tr>
											<tr>
											  <td colspan="3" class="textoPies">&nbsp;</td>
										    </tr>
											<?php
											if (isset($aValados) && count($aValados)>0) {
											?>
												<tr>
												  <td height="30" colspan="3" bgcolor="#345474" class="textoPies">
												  <div align="center" class="style1">CANTIDADES AVALADAS</div></td>
												</tr>												
												<tr>
												  <td colspan="3" class="textoPies"><div align="center">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
													  <tr>
														<td><div align="center">NOMBRE</div></td>
														<td><div align="center">CANTIDAD AVALADA </div></td>
														<td><div align="center">CANTIDAD PAGADA </div></td>
														<td><div align="center">CANTIDAD PENDIENTE </div></td>
													  </tr>
												<?php													
												foreach ($aValados as $iInd=>$sTemp){														
													#$iAvalado+=$aValados[$iInd]["avalado"]-$aValados[$iInd]["pagado"];
												?>
												  <tr>
													<td>
												      <span class="style2">
												    <?php echo $aValados[$iInd]["nombre"];?></span></td>
													<td><div align="center" class="portada style2">
													$ 
											        <?php echo number_format($aValados[$iInd]["avalado"],2);?>
													</div></td>
													<td><div align="center" class="portada style2">
													$ 
											        <?php echo number_format($aValados[$iInd]["pagado"],2);?>
													</div></td>
													<td><div align="center" class="style2">$ 
												    <?php echo number_format($aValados[$iInd]["debe"],2);?>
													</div></td>
												  </tr>
												<?php													
												}
												#$ConnClose = $ConBD1 -> cerrar();
												if ($iAvalado>0) {
												?>
												  <tr>
													<td>&nbsp;</td>
													<td>&nbsp;</td>
													<td>&nbsp;</td>
													<td>&nbsp;</td>
												  </tr>
												  <tr>
													<td colspan="4">
														<table width="100%" border="0" cellspacing="1" cellpadding="0">
														  <tr>
															<td width="34%" class="textoPies"><div align="right">Cantidad Total Avalada:</div></td>
															<td class="style2" width="66%">$ 
													        <?php echo number_format($iAvalado,2)?>															</td>
														  </tr>
														</table>														</td>
												  </tr>
												<?php
												}
												?>
												</table>
											  </div></td>
											  </tr>
											<?php
											}
											?>
										  </table>
									  </div>									  </tr>
									</table>
								  </div></td>
								</tr>								
							  </table>							</td>
						  </tr>
						</table>
						<p align="center" class="txt_normal"><a href="cerrar_sesion.php" class="txt_normal"><strong>Cerrar Sesi&oacute;n</strong></a>&nbsp;&nbsp; <strong>|</strong> &nbsp;<strong> <a href="clave.php" class="txt_normal">Asignar o Cambiar Clave</a>&nbsp;&nbsp; | &nbsp; <a href="saldos.php" class="txt_normal">Saldos</a> <br> 
					        <a href="corto.php" class="txt_normal">Pr&eacute;stamo Corto Plazo</a>&nbsp; |&nbsp; <a href="hipotecario.pdf" target="_blank" class="txt_normal">Pr&eacute;stamo Hipotecario</a>&nbsp; |&nbsp; <a href="simulador.php" class="txt_normal">Simulador</a> </strong></p>
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