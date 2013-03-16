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
	$IIdDep="";
}

if($IIdUser=="" || $IIdDep==""){
	$msg= "ES%20NECESARIO%20INICIAR%20SESION";
	header("Location: index.php?msg=$msg");
}else{

	require_once('../clases/clsRPPCServer.php');

	//Crear instancia ahacia la clase clsMysqlDB
	$ConBD1 = new clsRPPCServer();


	if(isset($_POST['dependencia']))
		$ValDep=$_POST['dependencia'];
	if(isset($_POST['num']))
		$ValNum=$_POST['num'];
	
	/*if(isset($_POST['num']) & isset($_POST['dependencia']) ){
		
		
		$sql = "SELECT clave,usuario FROM usuarios WHERE id_usuario=$ValNum AND id_dependencia=$ValDep";
		//echo $sql;
		$ConnC = $ConBD1 -> clsRPPCServer();
		$ConnS = $ConBD1 -> informacionI($sql);
		
		if(trim($ConnS)==1){
			// mandar llamar javascript:modificar();
			//header("Location: modificar2.php?num=$ValNum&dep=$ValDep");
		}else{
			$ban=0;
			echo "<br> no tiene registro";
		}
		
		//echo $ConnS;
		//echo $sql;
		//$Reg = count($ConnS);
		
		//echo $Reg;
	}*/
?>
<html><!-- InstanceBegin template="/Templates/pensiones.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title> Gobierno del Estado Libre y Soberano de Colima &bull; Secretar&iacute;a de Administraci&oacute;n &bull;</title>
<SCRIPT language="javascript1.1"> 
function modificar(){
	alert ("mandar");
}
function contrasenia(){
	if(document.forma.clave1.value!=document.forma.clave2.value){
		alert ("Las contraseñas deben ser iguales");
		document.forma.clave1.value="";
		document.forma.clave2.value="";
		document.forma.clave1.focus();
	}else{
		document.forma.guardar.focus();
		document.forma.action="nuevo2.php";
	}
}
</script>
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
.style1 {font-size: 9}
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
                            <td bgcolor="#93A899"><span class="creditosfoto"><img src="../../imagenes/ico/flechita.gif" width="11" height="9">&nbsp;<a href="../rppc/index.php">Consulta tu Saldo</a><a href="/vision.php"></a></span></td>
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
                        <p align="center" class="tituloPeq">Adminstraci&oacute;n</p>
<?
if(isset($_GET['msg'])){
	$msg=$_GET['msg'];
?>                        <p align="center" class="titulo">Aviso</p>
                        <p align="center" class="tituloPeq"><? echo $msg;?></p>
<?
}
?>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td><div align="center"><a href="cerrar_sesion.php">Cerrar Sesion</a> </div></td>
                              </tr>
                            </table></td>
                          </tr>
                        </table>
						<p>&nbsp;</p>
						<? //if($ban==1){ echo "nuevo2.php";}?>
						<form action="" method="post" name="forma" id="forma">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td><div align="center">
                                <table width="450" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="50%"><div align="center">Numero de Ficha: </div></td>
                                    <td><div align="left">
                                      <input name="num" type="text" id="num" value="<? if(isset($_POST['num'])){ echo $_POST['num']; }else if(isset($_GET['num'])){	echo $_GET['num']; }?>">
									  
                                      <a href="#" onClick='window.open("buscar_personas.php?formulario=forma&dependencia=dependencia&clave=num&usuario=usuario","Buscador","height=300,width=500,scrollbars=1,status=0")'>Buscar:</a></div></td>
                                  </tr>
                                  <tr>
                                    <td width="50%"><div align="center">Dependencia:</div></td>
                                    <td><div align="left">
<?
										//Ejecuto Funcion de Conexion
										$ConnC = $ConBD1 -> clsRPPCServer();
										//echo $ConnC;	
										$sen = "SELECT nom_ea,cve_ea FROM entidades ORDER BY nom_ea";
										//echo $sen; 
										//sentencia para autentificar el usuario
										//$ConnS = $ConBD1 -> informacion($sen);
										$ConnC = $ConBD1 -> clsRPPCServer();
										$ConnS = $ConBD1 -> informacionArray($sen);
									
										$veces = count($ConnS);
										//echo "nada";
?>
										<input name="dependencia" type="hidden" id="dependencia" value="<? if(isset($_POST['dependencia'])){ echo $_POST['dependencia'];} else if(isset($_GET['dependencia'])){	echo $_GET['dependencia']; }?>">
											<br>
                                   		  <select name="dep" id="dep">
<?
//echo $ValDep;
										for ($i=0;$i<$veces-2; $i=$i+2){
											if($ConnS[$i+1]==$ValDep){
												//echo $ConnS[$i+1]."  ".$ValDep;
?>
  	                                   			<option value="<? echo $ConnS[$i+1];  ?>" selected="selected"><? echo $ConnS[$i];  ?></option>
<?	
											}else{
?>
  	                                   			<option value="<? echo $ConnS[$i+1];  ?>"><? echo $ConnS[$i];  ?></option>
<?
											}
										}
?>
                                      </select>
<?
	
	
	$ConnClose = $ConBD1 -> cerrar();
?>
                                     
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td width="50%"><div align="center">Nombre:</div></td>
                                    <td><div align="left" class="style1">
                                      <input name="usuario" type="text" id="usuario" value="<? if(isset($_POST['usuario'])){ echo $_POST['usuario']; }else if(isset($_GET['usuario'])){	echo $_GET['usuario']; }?>">
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="center">Contrase&ntilde;a:</div></td>
                                    <td><input name="clave1" type="password" id="clave1"></td>
                                  </tr>
                                  <tr>
                                    <td><div align="center">Contrase&ntilde;a:</div></td>
                                    <td><input name="clave2" type="password" id="clave2" onChange="javascript:contrasenia();"></td>
                                  </tr>
                                  <tr>
                                    <td><div align="center"></div></td>
                                    <td><div align="center"></div></td>
                                  </tr>
                                  <tr>
                                    <td width="50%"><div align="center">
                                      <input name="limpiar" type="reset" id="limpiar" value="Limpiar">
                                    </div></td>
                                    <td>                                      <label>
                                      <input name="guardar" type="submit" id="guardar" value="Guardar">
                                    </label></td>
                                  </tr>
                                </table>
                                <p>&nbsp;</p>
                              </div></td>
                            </tr>
                          </table>
                        </form>
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