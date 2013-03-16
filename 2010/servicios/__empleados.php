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
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
.style1 {font-weight: bold}
-->
</style>
<style type="text/css">
<!--
.style2 {font-weight: bold}
-->
</style>
<style type="text/css">
<!--
.style3 {color: #333333}
-->
</style>
<!-- InstanceEndEditable -->
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
                        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
						  <tr>
							<td><div align="center">
								  <p align="center"><a href="cerrar_sesion.php" class="enlaces">Cerrar Sesion </a> &nbsp;&nbsp; | &nbsp; 
								  <a href="clave.php" class="enlaces">Asignar o Cambiar Clave</a>&nbsp; <br>
								  <a href="corto.php" class="enlaces">Pr&eacute;stamo Corto Plazo</a> | 
								  <a href="#" class="enlaces">Pr&eacute;stamo Hipotecario</a> | <a href="simulador.php" class="enlaces">Simulador</a> </p>
								  <p class="tituloPeq">ACTUALIZAR TABLA DE EMPLEADOS </p>
								  </div>
							  <table align="center" width="80%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
								<tr>
								  <td width="563"><div align="center">
								  <?
								  if (!isset($_POST['btnEnvia'])) {
								  ?>
									<table width="100%"  border="0" cellspacing="0" cellpadding="0">
									  <tr>
										<td width="100%" class="textoPies">
										<form action="empleados.php" method="post" enctype="multipart/form-data" name="frmCambio" id="frmCambio">
										  <table width="100%" border="0" cellspacing="1" cellpadding="0">
                                            <tr>
                                              <td width="100%" height="25" bgcolor="#C8D2C9" class="textoPies"><div align="center" class="submenu">
                                                <div align="justify">Secci&oacute;n para actualizar la tabla de empleados y agregar los nuevos, despu&eacute;s de cada actualizaci&oacute;n de la base de datos.</div>
                                              </div></td>
                                            </tr>
                                            <tr>
                                              <td height="50" class="textoPies"><div align="center">
                                                <input name="btnEnvia" type="submit" id="btnEnvia" value="Actualizar Empleados">
                                              </div></td>
                                              </tr>
                                          </table>
                              			 </form>
									  </tr>
									</table>
								  <?
								  }
								  else {
								  	#require_once("clases/sql.php");
									require_once("clases/funciones.php");
									
									$iError=1;							
									
								  	
									require_once("../nusoap/lib/nusoap.php");
			
									#$client = new soapclient('http://10.10.20.62/dirpensiones/dir_pensiones/rppc/ws_saldos.php?wsdl', true);	#local
									$client = new soapclient('http://dirpensiones.dyndns.org/nusoap/ws_saldos.php?wsdl', true);	#local
									
									if ($sError = $client->getError()) {
										echo "No se pudo realizar la consulta [" . $sError . "]";
										die();
									}
									
									##### Datos EMPLEADO
									$aCambio= $client->call("actEmpleados",array("noControl"=>$iNoControl));																					
									
									if (isset($aCambio) && count($aCambio)>0) {
									?>
										<table width="100%" border="0" cellspacing="1" cellpadding="0">
											<tr>
											  <td height="25" colspan="2" bgcolor="#C8D2C9" class="textoPies"><div align="center" class="submenu">
											  <?php echo $aCambio["mensaje"];?></div></td>
											</tr>													
										</table>
									<?	
									}
									else {
									?>
										<table width="100%" border="0" cellspacing="1" cellpadding="0">
											<tr>
											  <td height="25" colspan="2" bgcolor="#C8D2C9" class="textoPies"><div align="center" class="submenu">
											  NO se puede realizar el cambio de clave, intentalo de nuevo</div></td>
											</tr>													
										</table>
									<?	
									}										
								  }
								  ?>
								  </div></td>
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