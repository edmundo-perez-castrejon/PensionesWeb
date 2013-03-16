<?
session_start();

if (isset($_SESSION['USUARIO'])){
	$IIdUser=$_SESSION['USUARIO'];
}else{
	$IIdUser="";
}

if (!empty($_SESSION['DEPENDENCIA'])){
	$IIdDep=$_SESSION['DEPENDENCIA'];
}else{
	//echo "akientra";
	$IIdDep="";
}

//echo $IIdDep.$IIdUser."nada";

if($IIdUser=="" || $IIdDep==""){
	$msg= "ES%20NECESARIO%20INICIAR%20SESION";
	header("Location: index.php?msg=.$msg");
}else{
	require_once('../clases/clsRPPCServer.php');
	
	$ConBD1 = new clsRPPCServer();
	
	$ConnC = $ConBD1 -> clsRPPCServer();
	
	$sql = "SELECT internet.FICHA,internet.NOMBRE,internet.FONDOTOT,internet.SALDOPCP,";
	$sql = $sql. "internet.QNPENPCP,internet.AVALAPCP,internet.SALDOPHI,internet.QNPENPHI,";
	$sql = $sql. "internet.SALDOSHI,internet.ENTIDAD,internet.PUESTO,internet.TIPOTRAB,";
	$sql = $sql. "entidades.CVE_EA,entidades.NOM_EA,entidades.CIUDAD_EA,internet.FECHAUM FROM internet,entidades";
	$sql = $sql. " WHERE (internet.CURP = '$IIdDep') AND (internet.FICHA = $IIdUser) and";
	$sql = $sql. " (internet.ENTIDAD=entidades.cve_ea)";

	//echo $sql;
	//$sql = "SELECT * FROM internet WHERE ficha = $IIdUser AND cvedep = $IIdDep";

	$ConnS = $ConBD1 -> informacion($sql);
	
	
	$DepNum =  $ConnS[9];
	$Nom = $ConnS[1];
	$NumC = $ConnS[0]; 
	$Pues = $ConnS[10]; 
	$TipT = $ConnS[11]; 
	$Dep = $ConnS[13];
	$SalH = $ConnS[8];
	$iSaldo = number_format($ConnS[3], 2, '.', ',');
	$iQuinPendientes=$ConnS[4];
	$dFechaUltimoPago=$ConnS[15];
	$iSaldoHipotecario=number_format($ConnS[6], 2, '.', ',');
	$iHQuinPendientes=$ConnS[7];
	$iCantidadAvalada=$ConnS[5];
	$iHSaldoSeguro=number_format($ConnS[5], 2, '.', ',');
	$iFondoTotalAcumulado=number_format($ConnS[2], 2, '.', ',');
	
	$ConnClose = $ConBD1 -> cerrar();
	
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
					  <form action="../directorio/listar.php" method="post" name="forma1" id="forma1">
						<p>
						  <input name="FUNCIONARIO" type="text" id="FUNCIONARIO">
						  <img src="../../imagenes/ico/btn-buscar.jpg" width="68" height="19" onClick="javascript:forma1.submit()"></p>
						</form> </td> <td>&nbsp;</td>
					  <td>Buscar:
					  <form action="../tramite/listar.php" method="post" name="forma2" id="forma2">
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
							  <p class="tituloPeq">Informaci&oacute;n de Saldos </p>
							  <p align="center"><a href="cerrar_sesion.php" class="enlaces">Cerrar Sesion </a> &nbsp;&nbsp; | &nbsp; <a href="clave.php" class="enlaces">Asignar o Cambiar Clave</a> </p>
							  <table width="567" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
								<tr>
								  <td width="563"><div align="center">
									<table width="100%"  border="0" cellspacing="0" cellpadding="0">
									  <tr>
										<td class="textoPies"><div align="left">Entidad:</div></td>
										<td class="textoPies"><div align="left"><strong><?php echo  $Dep;?></strong></div></td>
									  </tr>
									  <tr>
										<td width="28%" class="textoPies"><div align="left">Nunero de Control:</div></td>
										<td width="72%" class="textoPies"><div align="left"><strong><?php echo  $NumC;?></strong></div></td>
									  </tr>
									  <tr>
										<td class="textoPies"><div align="left">Nombre:</div></td>
										<td class="textoPies"><div align="left"><strong><?php echo  $Nom;?></strong></div></td>
									  </tr>
									  <tr>
										<td class="textoPies"><div align="left">Puesto:</div></td>
										<td class="textoPies"><div align="left"><strong><?php echo  $Pues;?></strong></div></td>
									  </tr>
									  <tr>
										<td class="textoPies">Tipo de Trabajador:</td>
										<td class="textoPies"><strong><?php echo  $TipT;?></strong></td>
									  </tr>
									  <tr>
										<td class="textoPies"><div align="left">Fondo Total Acumulado:</div></td>
										<td class="textoPies"><div align="left"><strong>$ <?php echo  $iFondoTotalAcumulado; ?> </strong></div></td>
									  </tr>
									  <tr>
										<td colspan="2" class="textoPies"><div align="center">
										  <table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
											  <td width="35%" class="textoPies">&nbsp;</td>
											  <td width="35%" class="textoPies">&nbsp;</td>
											  <td width="30%" class="textoPies">&nbsp;</td>
											</tr>
											<tr>
											  <td width="35%" bgcolor="#C8D2C9" class="textoPies"><div align="center" class="style1 style2">PRESTAMO CORTO PLAZO </div></td>
											  <td width="35%" bgcolor="#C8D2C9" class="textoPies"><div align="center" class="style1 style2">PRESTAMO HIPOTECARIO </div></td>
											  <td width="30%" bgcolor="#C8D2C9" class="textoPies"><div align="center" class="style1 style2">AVALADO</div></td>
											</tr>
											
											<tr>
											  <td class="textoPies">Fecha Ultimo Abono: <strong><?php echo  $dFechaUltimoPago; ?></strong></td>
											  <td class="textoPies">&nbsp;</td>
											  <td class="textoPies">&nbsp;</td>
											  </tr>
											<tr>
											  <td width="35%" class="textoPies"><div align="left">
												<p class="textoPies">Saldo Pendiente:<span class="style1"><strong> $ <?php echo  $iSaldo;?></strong></span></p></div></td>
											  <td width="35%" class="textoPies"><div align="left">Saldo Pendiente:<span class="style1"> <strong>$ <?php echo  $iSaldoHipotecario; ?></strong></span></div></td>
											  <td width="30%" class="textoPies">Cantidad Avalada: <strong>$ <?php echo  $iCantidadAvalada; ?></strong></td>
											</tr>
											<tr>
											  <td class="textoPies"><div align="left">No. Quincenas Pendientes: <strong><?php echo  $iQuinPendientes ?></strong></div></td>
											  <td class="textoPies"><div align="left">Quincenas Pendientes:<span class="style1"> <strong><?php echo  $iHQuinPendientes; ?></strong> </span></div></td>
											  <td class="textoPies">&nbsp;</td>
											</tr>
											<tr>
											  <td class="textoPies">&nbsp;</td>
											  <td class="textoPies"><p>Saldo Seguro:<strong>$ <?php echo  $SalH ?><br>
											      </strong></p>											    </td>
											  <td class="textoPies">&nbsp;</td>
											</tr>
											<tr>
											  <td class="textoPies">&nbsp;</td>
											  <td class="textoPies">&nbsp;</td>
											  <td class="textoPies">&nbsp;</td>
											</tr>
											<tr>
											  <td colspan="3" bgcolor="#CDD7CE" class="textoPies"><div align="center"><strong>CANTIDADES AVALADAS. </strong></div></td>
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
												<?
												//echo $NumC."nada";
												$sql = "SELECT nom_df_o,fondo_av,pagad_av FROM avalados WHERE ficha_df_l =". $NumC." and cve_ea_l = $DepNum";
												//echo $sql;
												$ConnC = $ConBD1 -> clsRPPCServer();
												$ConnS = $ConBD1 -> informacionArray($sql);
												//array_values($ConnS);
												$veces = count($ConnS);
												
												for ($i=0;$i<$veces-3; $i=$i+3){
												?>
                                                  <tr>
                                                    <td><strong class="portada"><?php echo  $ConnS[$i];  ?></strong></td>
                                                    <td><div align="center"><span class="portada"><strong>$ <?php echo  $ConnS[$i+1];?></strong></span></div></td>
                                                    <td><div align="center"><span class="portada"><strong>$ <?php echo  $ConnS[$i+2];?></strong></span></div></td>
                                                    <td><div align="center"><strong>$ <?php echo  ($ConnS[$i+1]-$ConnS[$i+2]);?></strong></div></td>
                                                  </tr>
												<?
												}
												$ConnClose = $ConBD1 -> cerrar();
												?>
                                                  <tr>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                  </tr>
                                                </table>
											  </div></td>
											  </tr>
										  </table>
										</div>
										  <div align="left"></div>										</tr>
									</table>
								  </div></td>
								</tr>
							  </table>
							  <p>&nbsp;</p>
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