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
                    <div id="titulo_contenido"><a name="start" id="start"></a><!-- InstanceBeginEditable name="titulo" -->Cambia tu clave<!-- InstanceEndEditable --></div>
                    <div id="texto_contenido">
                      <p><!-- InstanceBeginEditable name="cuerpo" -->
					  <table align="center" width="80%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
                        <tr>
                          <td width="563"><div align="center">
                          <?
                          if (!isset($_POST['btnEnvia'])) {
                          ?>
                            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="100%" class="textoPies">
                                <form action="clave.php" method="post" enctype="multipart/form-data" name="frmCambio" id="frmCambio">
                                  <table width="100%" border="0" cellspacing="1" cellpadding="0">
                                    <tr>
                                      <td height="25" colspan="2" bgcolor="#345474" class="textoPies"><div align="center" class="titulos_secciones_blanco">
                                      Realiza los cambios de tu clave</div></td>
                                    </tr>
                                    <tr>
                                      <td class="textoPies">&nbsp;</td>
                                      <td class="textoPies">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td width="38%" class="textoPies"><div align="right">Nueva Clave:</div></td>
                                      <td width="62%" class="textoPies"><div align="left">
                                        <input name="sClave" type="password" id="sClave" maxlength="15">
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td class="textoPies"><div align="right">Confirmar Clave: </div></td>
                                      <td class="textoPies"><div align="left">
                                        <input name="sClave2" type="password" id="sClave2" maxlength="15">
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td class="textoPies">&nbsp;</td>
                                      <td class="textoPies">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td colspan="2" class="textoPies"><div align="center">
                                        <input name="btnEnvia" type="submit" id="btnEnvia" value="Aplicar Cambios">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp; 
                                        <input name="btnCancelar" type="button" id="btnCancelar" value="Cancelar" onClick="javascript:history.back();">
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
                            
                            if (isset($_POST['sClave']) && removeXss($_POST['sClave'])==0 && strlen($_POST['sClave'])>=6 && strlen($_POST['sClave'])<=17) {
                                $sClave1=$_POST['sClave'];
                                #echo $_POST['sClave2'];
                                if (isset($_POST['sClave2']) && removeXss($_POST['sClave2'])==0 && strlen($_POST['sClave2'])>=6 && strlen($_POST['sClave2'])<=17) {
                                    $sClave2=$_POST['sClave2'];
                                    if ($sClave1==$sClave2)
                                        $iError=0;
                                }										
                                
                                if ($iError==0) {	#Valida que es correcta la informacion
                                    require_once("../nusoap/lib/nusoap.php");
            
                                    #$client = new soapclient('http://10.10.20.62/dirpensiones/dir_pensiones/rppc/ws_saldos.php?wsdl', true);	#local
                                    $client = new nusoap_client('http://dirpensiones.dyndns.org/nusoap/ws_saldos.php?wsdl', true);	#Server
                                    if ($sError = $client->getError()) {
                                        echo "No se pudo realizar la consulta [" . $sError . "]";
                                        die();
                                    }
                                    
                                    print_r(array("noControl"=>$iNoControl,"curp"=>$sCurp,"dep"=>$iDep,"pass"=>$sClave1));
                                    ##### Datos EMPLEADO
                                    $aCambio= $client->call("nuevoPas",array("noControl"=>$iNoControl,"curp"=>$sCurp,"dep"=>$iDep,"pass"=>$sClave1));																					
                                    
                                    if (isset($aCambio) && count($aCambio)>0) {
                                    ?>
                                        <table width="100%" border="0" cellspacing="1" cellpadding="0">
                                            <tr>
                                              <td height="25" colspan="2" bgcolor="#345474" class="textoPies"><div align="center" class="submenu">
                                              <?php echo $aCambio["mensaje"]?></div></td>
                                            </tr>													
                                        </table>
                                    <?	
                                    }
                                    else {
                                    ?>
                                        <table width="100%" border="0" cellspacing="1" cellpadding="0">
                                            <tr>
                                              <td height="25" colspan="2" bgcolor="#345474" class="textoPies"><div align="center" class="titulos_secciones_blanco">
                                              NO se puede realizar el cambio de clave, intentalo de nuevo</div></td>
                                            </tr>													
                                        </table>
                                    <?	
                                    }
                                }
                                else {
                                ?>
                                    <table width="100%" border="0" cellspacing="1" cellpadding="0">
                                        <tr>
                                          <td height="25" colspan="2" bgcolor="#345474" class="textoPies"><div align="center" class="titulos_secciones_blanco">
                                          Las Claves no coinciden, intentelo de nuevo</div></td>
                                        </tr>													
                                    </table>
                                <?	
                                }
                            }
                            else {
                            ?>
                                <table width="100%" border="0" cellspacing="1" cellpadding="0">
                                    <tr>
                                      <td height="25" colspan="2" bgcolor="#345474" class="textoPies"><div align="center" class="titulos_secciones_blanco">
                                      Contraseña no valida. Debe ser mínimo de 6 y máximo de 17 caracteres.</div></td>
                                    </tr>													
                                </table>
                            <?	
                            }
                          }
                          ?>
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