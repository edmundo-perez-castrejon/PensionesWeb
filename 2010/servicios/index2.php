<?php 
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
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
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
						<ul>
							<li><a href="http://pensiones.col.gob.mx/legislacion.php" title="Ley de Pensiones">Ley de pensiones</a></li>
							<li><a href="http://pensiones.col.gob.mx/mision.php" title="Misión y visión">Misión y Visi&oacute;n</a></li>							
							<li><a href="http://pensiones.col.gob.mx/servicios/index.php" title="Consulta tu saldo de pensiones">Consulta tu saldo</a></li>
							<li><a href="http://pensiones.col.gob.mx/reglamento.php" title="Reglamento de servicios médicos">Reglamento de servicios médicos</a></li>
							<li><a href="http://pensiones.col.gob.mx/organigrama.php" title="Organigrama">Organigrama</a></li>
							<li><a href="http://pensiones.col.gob.mx/cortoplazo.php" title="Requisitos para prestamos a corto plazo">Requisitos para prestamos a corto plazo</a></li>
							<li><a href="http://pensiones.col.gob.mx/hipotecarios.php" title="Requisitos para prestamos hipotecarios">Requisitos para prestamos hipotecarios</a></li>							
							<li><a href="http://pensiones.col.gob.mx/ubicacion.php" title="Ubicación">Ubicación</a></li>                                
						</ul>
				</div>

             </div>
                                          

        
            
          <!--  Fin de la navegacion vertical-->
      
           
          <!-- inicio de area de contenido    -->
          <div id="contenido_interior_icc">
          			<div id="ruta_sitio"><a href="http://pensiones.col.gob.mx/index.php"><strong>inicio</strong></a>  &nbsp;&nbsp;&nbsp; .  &nbsp; <!-- InstanceBeginEditable name="seccion" --><a href="#">Servicios</a><!-- InstanceEndEditable -->   &nbsp;&nbsp;.    &nbsp;&nbsp;<!-- InstanceBeginEditable name="contenido" --><a href="#">Consulta tu saldo </a><!-- InstanceEndEditable -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <!-- Búsqueda Google -->
</div>
                    <div id="titulo_contenido"><a name="start" id="start"></a><!-- InstanceBeginEditable name="titulo" -->Consulta tu saldo <!-- InstanceEndEditable --></div>
                    <div id="texto_contenido">
                      <p><!-- InstanceBeginEditable name="cuerpo" -->
					  <form id="forma" name="form1" method="post" action="login.php">
						  <table width="100%"  border="0" cellspacing="0" cellpadding="0">
							<tr>
							  <td><div align="center">
							    <table width="413" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="9" height="6" valign="top"><img src="../imagenes/ico/tbl(1-1).gif" width="9" height="6"></td>
                                    <td height="6" background="../imagenes/ico/tblfill(1-2).gif"></td>
                                    <td width="9" height="6" valign="top"><img src="../imagenes/ico/tbl(1-3).gif" width="9" height="6"></td>
                                  </tr>
                                  <tr>
                                    <td valign="top" background="../imagenes/ico/tblfill(2-1).gif"></td>
                                    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td colspan="2"><div align="center">
										<?
										$msg = "";
										if(isset($_GET['msg']))
											$msg = $_GET['msg'];
										
										echo $msg;
										?>
                                        </div></td>
                                      </tr>
                                      <tr>
                                        <td width="34%">No. Control :</td>
                                        <td width="66%"><input name="txtusu" type="text" id="txtusu"></td>
                                      </tr>
                                      <tr>
                                        <td width="34%">CURP o Clave:</td>
                                        <td width="66%"><input name="txtpass" type="password" id="txtpass"></td>
                                      </tr>
                                      <tr>
                                        <td>Dependencia:</td>
                                        <td valign="middle">
										<?php
										require_once('../ws/lib/nusoap.php');
										#require_once("../nusoap/lib/nusoap.php");
										
										$iEntidad=0;
										if (isset($_GET['e']) && is_numeric($_GET['e']))
											$iEntidad=$_GET['e'];
						
										#$client = new soapclient('http://10.10.20.62/dirpensiones/dir_pensiones/rppc/ws_saldos.php?wsdl', true);	#local
										$client = new nusoap_client('http://dirpensiones.dyndns.org/nusoap/ws_saldos.php?wsdl', true);	#Server
										if ($sError = $client->getError()) {
											echo "No se pudo realizar la operación [" . $sError . "]";
											die();
										}
										$aEntidades = $client->call("entidades",array("cve"=>0));
										?>																					
                                   		  <select name="dep" id="dep">
											<?
											#echo $iEntidad;				
											if (count($aEntidades)>0) {
												foreach($aEntidades as $iCve=>$sDes){
													if ($aEntidades[$iCve]['clave']==1)
														$sSel='selected="selected"';
													else
														$sSel='';
												?>
													<option <?=$sSel?> value="<?=$aEntidades[$iCve]['clave'];?>"><?=$aEntidades[$iCve]['descripcion']?></option>
												<?
												}
											}
											?>
                                     	 </select>
										</td>
                                      </tr>
                                      <tr>
                                        <td width="34%">&nbsp;</td>
                                        <td width="66%">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td colspan="2"><div align="center">
                                          <input type="submit" name="Submit2" value="Accesar">
                                        </div></td>
                                      </tr>
                                    </table>
									  <div align="center"></div>
									  <div align="center"></div></td>
                                    <td background="../../imagenes/ico/tblfill(2-3).gif"></td>
                                  </tr>
                                  <tr>
                                    <td width="9" height="6" valign="top"><img src="../../imagenes/ico/tbl(3-1).gif" width="9" height="6"></td>
                                    <td height="6" background="../../imagenes/ico/tblfill(3-2).gif"></td>
                                    <td width="6" height="6" valign="top"><img src="../../imagenes/ico/tbl(3-3).gif" width="9" height="6"></td>
                                  </tr>
                                </table>
							    <p>&nbsp;</p>
							  </div></td>
							</tr>
						  </table>
					  </form>
                        <p>&nbsp;</p>
					  <!-- InstanceEndEditable --></p>
            </div>
                    <div id="control_navegacion_inferior"></div>
          
          </div>
     		  
      </div>
      <div id="footer">
        <div id="escudo_gobierno_pie"></div>
        <div id="pie_left">
          <div id="enlaces_pie"> </div>
          <div id="datos_pie"> 
		  						Leandro Valle No 5 Loc. 5, Col. Centro Villa de Álvarez.
                                contacto: icc@col.gob.mx.
                                Teléfonos: 33 011 66 y 33 011 69. 
		  </div>
        </div>
      </div>
</div>
	<script type="text/javascript">qm_create(0,false,0,500,'lev2',false,false,false,true);</script>
</body>
<!-- InstanceEnd --></html>