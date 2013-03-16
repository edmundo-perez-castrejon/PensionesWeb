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
<!-- InstanceEndEditable -->
<link href="styles/main.css" rel="stylesheet" type="text/css" />
<link href="styles/variaciones/layout_variacion_icc.css" rel="stylesheet" type="text/css" />
<link href="styles/nav_vertical_icc.css" rel="stylesheet" type="text/css" />
<link href="styles/layout_icc_int.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://www.colima-estado.gob.mx/js/mainmenu.js"></script>
<script type="text/javascript" src="js/menu_vertical_ie.js"></script>
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
          			<div id="ruta_sitio"><a href="http://pensiones.col.gob.mx/2010/index.php"><strong>inicio</strong></a>  &nbsp;&nbsp;&nbsp; •  &nbsp; <!-- InstanceBeginEditable name="seccion" --><a href="#">Reglamento de servicios m&eacute;dicos  </a><!-- InstanceEndEditable -->   &nbsp;&nbsp;•    &nbsp;&nbsp;<!-- InstanceBeginEditable name="contenido" --><a href="#"></a><!-- InstanceEndEditable -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <!-- Búsqueda Google -->
</div>
                    <div id="titulo_contenido"><a name="start" id="start"></a><!-- InstanceBeginEditable name="titulo" -->Reglamento de servicios m&eacute;dicos  <!-- InstanceEndEditable --></div>
                    <div id="texto_contenido">
                      <p><!-- InstanceBeginEditable name="cuerpo" -->
					    <p align="justify" class="txt_normal">La Direcci&oacute;n de Pensiones del Estado,   tiene, entre otras de sus facultades, la de administrar los servicios   m&eacute;dicos que se otorgan a los trabajadores adheridos a la Secci&oacute;n 39 del   SNTE.</p>
					    <p align="justify" class="txt_normal">A trav&eacute;s de   un convenio que se firma anualmente entre el Gobierno del Estado y la   propia Secci&oacute;n 39, los trabajadores de la educaci&oacute;n adheridos a este   sindicato, disfrutan del servicio m&eacute;dico, farmac&eacute;utico, quir&uacute;rgico y   hospitalario. Dicho servicio se proporciona  por medio de profesionales   de la medicina que son incorporados a un directorio, tras un an&aacute;lisis   serio de su curr&iacute;culum. El personal derechohabiente puede, libremente,   escoger al m&eacute;dico que desee de ese directorio quien extiende una receta   que a su vez es surtida en la &ldquo;farmacia de Pensiones&rdquo;. Cuando alg&uacute;n   medicamento no se tiene en esa farmacia, se le expide un vale para    cualquiera de las farmacias subrogadas con que se cuenta.</p>
					    <p align="justify" class="txt_normal">Cuando el   m&eacute;dico familiar as&iacute; lo decida, el paciente es canalizado a un m&eacute;dico   especialista para su atenci&oacute;n. Igualmente se cuenta con cl&iacute;nicas y   sanatorios particulares y del estado que, mediante convenio, atienden al   personal derechohabiente.</p>
					    <p align="justify"><span class="txt_normal">Existe un   reglamento para la prestaci&oacute;n de estos servicios m&eacute;dicos que vale la   pena presentar aqu&iacute;, haciendo la aclaraci&oacute;n de que actualmente se   encuentra en revisi&oacute;n y en proceso de actualizaci&oacute;n.</span><br />
                        </p>
					    <p class="titulo_bold_negro">REGLAMENTOS   DE SERVICIOS MEDICOS</p>
					    <table width="60%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="10%">&nbsp;</td>
                            <td width="90%" height="20"><a class="txt_normal" href="reglamentocap1.php">CAPITULO   I </a></td>
                          </tr>                         
                          <tr>
                            <td>&nbsp;</td>
                            <td height="20"><a class="txt_normal" href="reglamentocap2.php">CAPITULO   II</a></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td height="20"><a class="txt_normal" href="reglamentocap3.php">CAPITULO   III</a><a href="http://pensiones.col.gob.mx/dir_pensiones/regla_med/cap2.php"></a></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td height="20"><a class="txt_normal" href="reglamentocap4.php">CAPITULO   IV</a></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td height="20"><a class="txt_normal" href="reglamentocap5.php">CAPITULO   V</a></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><a class="txt_normal" href="reglamentocap6.php">CAPITULO   VI</a></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td height="20"><a class="txt_normal" href="reglamentotrans.php">TRANSITORIOS</a></td>
                          </tr>
                        </table>
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
          						Torres Quintero No. 156   CP 28000, Col.Centro Colima,Col. <a href="ubicacion.php"><img src="imagenes/ico/ico_ubicacion.png" alt="Ver Ubicación" border="0" style="cursor:pointer" title="Ver Ubicación" onclick="javascript:window.open('ubicacion.php','_self');" /></a>
                                contacto:dir_pensiones@prodigy.net.mx.
                                Teléfonos: 312 31 21116.
							</div>   
        </div>
      </div>
</div>
	<script type="text/javascript">qm_create(0,false,0,500,'lev2',false,false,false,true);</script>
</body>
<!-- InstanceEnd --></html>