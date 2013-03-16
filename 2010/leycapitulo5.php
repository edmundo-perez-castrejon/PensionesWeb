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
          			<div id="ruta_sitio"><a href="http://pensiones.col.gob.mx/2010/index.php"><strong>inicio</strong></a>  &nbsp;&nbsp;&nbsp; •  &nbsp; <!-- InstanceBeginEditable name="seccion" --><a href="legislacion.php">Ley de pensiones </a><!-- InstanceEndEditable -->   &nbsp;&nbsp;•    &nbsp;&nbsp;<!-- InstanceBeginEditable name="contenido" --><a href="#">Cap&iacute;tulo V </a><!-- InstanceEndEditable -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <!-- Búsqueda Google -->
</div>
                    <div id="titulo_contenido"><a name="start" id="start"></a><!-- InstanceBeginEditable name="titulo" -->Ley de Pensiones - Cap&iacute;tulo V <!-- InstanceEndEditable --></div>
                    <div id="texto_contenido">
                      <p><!-- InstanceBeginEditable name="cuerpo" -->
					    <p class="titulo_bold_negro">CAP&Iacute;TULO V</p>
					    <p align="center" class="txt_normal"><strong>Pensiones por Retiro</strong></p>
					    <p align="justify"> <span class="enlaces">Art. 46&ordm;.-  El derecho a la pensi&oacute;n nace cuando el trabajador se encuentra en las causales consignadas en esta Ley y satisfaga los requisitos  que la misma establece.<br />
				        <br />
					      La Direcci&oacute;n de Pensiones podr&aacute; conceder la pensi&oacute;n de acuerdo con sus recursos, tomando como base a los de mayor antig&uuml;edad y sujet&aacute;ndose las diferentes normas:<br />
					      <br />
					      A.- Haber cumplido sesenta a&ntilde;os de edad  y contribu&iacute;do normalmente por tres a&ntilde;os, como m&iacute;nimo al Fondo de Pensiones, as&iacute; como hacer desempe&ntilde;ado sus labores por treinta a&ntilde;os. El monto de las pensiones ser&aacute; hasta el ochenta por ciento de sueldo.<br />
				      B.-  Cuando el trabajador tenga cincuenta y cinco a&ntilde;os de edad  y hubiere contribu&iacute;do al Fondo por lo menos durante quince a&ntilde;os, la pensi&oacute;n se graduar&aacute; de acuerdo con la siguiente tabla:</span></p>
					    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><div align="center">
                                <table width="300" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td class="enlaces">15   a&ntilde;os de servicios</td>
                                    <td class="enlaces"><div align="center">40%</div></td>
                                  </tr>
                                  <tr>
                                    <td class="enlaces">16   a&ntilde;os de servicios</td>
                                    <td class="enlaces"><div align="center">42.5%</div></td>
                                  </tr>
                                  <tr>
                                    <td class="enlaces">17   a&ntilde;os de servicios</td>
                                    <td class="enlaces"><div align="center">45%</div></td>
                                  </tr>
                                  <tr>
                                    <td class="enlaces">18   a&ntilde;os de servicios</td>
                                    <td class="enlaces"><div align="center">47.5%</div></td>
                                  </tr>
                                  <tr>
                                    <td class="enlaces">19   a&ntilde;os de servicios</td>
                                    <td class="enlaces"><div align="center">48%</div></td>
                                  </tr>
                                  <tr>
                                    <td class="enlaces">20   a&ntilde;os de servicios</td>
                                    <td class="enlaces"><div align="center">49%</div></td>
                                  </tr>
                                  <tr>
                                    <td class="enlaces">21   a&ntilde;os de servicios</td>
                                    <td class="enlaces"><div align="center">50%</div></td>
                                  </tr>
                                  <tr>
                                    <td class="enlaces">22   a&ntilde;os de servicios</td>
                                    <td class="enlaces"><div align="center"> 51%</div></td>
                                  </tr>
                                  <tr>
                                    <td class="enlaces">23   a&ntilde;os de servicios</td>
                                    <td class="enlaces"><div align="center">52%</div></td>
                                  </tr>
                                  <tr>
                                    <td class="enlaces">24   a&ntilde;os de servicios</td>
                                    <td class="enlaces"><div align="center">53%</div></td>
                                  </tr>
                                  <tr>
                                    <td class="enlaces">25   a&ntilde;os de servicios</td>
                                    <td class="enlaces"><div align="center">54%</div></td>
                                  </tr>
                                  <tr>
                                    <td class="enlaces">26   a&ntilde;os de servicios</td>
                                    <td class="enlaces"><div align="center">55%</div></td>
                                  </tr>
                                  <tr>
                                    <td class="enlaces">27   a&ntilde;os de servicios</td>
                                    <td class="enlaces"><div align="center"> 56%</div></td>
                                  </tr>
                                  <tr>
                                    <td class="enlaces">28   a&ntilde;os de servicios</td>
                                    <td class="enlaces"><div align="center">57%</div></td>
                                  </tr>
                                  <tr>
                                    <td class="enlaces">29   a&ntilde;os de servicios</td>
                                    <td class="enlaces"><div align="center">58%</div></td>
                                  </tr>
                                  <tr>
                                    <td class="enlaces">30   a&ntilde;os de servicios</td>
                                    <td class="enlaces"><div align="center">60%</div></td>
                                  </tr>
                                </table>
                            </div></td>
                          </tr>
                        </table>
					    <p align="justify" class="enlaces">Art. 47&ordm;.-  Los porcentajes de que habla el art&iacute;culo anterior se refieren al sueldo b&aacute;sico de que disfrute el trabajador en el momento de solicitar el beneficio, excluyendo cualquier otra percepci&oacute;n. En el caso de que el peticionario tenga diverso empleos se tomar&aacute; como base el de mayor cuant&iacute;a. La comisi&oacute;n que un trabajador desempe&ntilde;e como Catedr&aacute;tico de varias asignaturas en escuelas de ense&ntilde;anza media y superior, se considerar&aacute; como un solo empleo, a&uacute;n cuando la designaci&oacute;n se haya hecho mediante nombramientos individuales.</p>
					    <p align="justify" class="enlaces">Art. 48&ordm;.-  Para aquellas personas no sujetas a sueldo fijo se tomar&aacute; como tipo para la base de la pensi&oacute;n, el cincuenta por ciento del promedio  de percepciones anuales.</p>
					    <p align="justify" class="enlaces">Art. 49&ordm;.-  El derecho al pago de la pensi&oacute;n comienza desde que la Direcci&oacute;n dicta resoluci&oacute;n favorable y el trabajador se separa del servicio.</p>
					    <p align="justify" class="enlaces">Art. 50&ordm;.-  Todas las pensiones que se concedan se sujetar&aacute;n a cuota quincenal.<br />
                            <br />
					      Art. 51&ordm;.-  La percepci&oacute;n de la pensi&oacute;n inhabilita al beneficiario a desempe&ntilde;ar cualquier empleo o comisi&oacute;n oficial con sueldo a no ser que renuncie a la pensi&oacute;n o se suspendan sus efectos por acuerdo del Consejo.<br />
					      En caso de que el trabajador beneficiado por la pensi&oacute;n contin&uacute;e en servicio no podr&aacute; ser modificada la estimaci&oacute;n hecha para conceder la pensi&oacute;n, pero al separarse definitivamente se le aplicar&aacute; la cuota que corresponda al tiempo de servicio.</p>
					    <p align="justify" class="enlaces"> Art. 52&ordm;.-  Todo beneficiario de pensi&oacute;n, para disfrutarla deber&aacute; cubrir a la Direcci&oacute;n de Pensiones todos los adeudos que tuviere con ella, salvo que del importe de la pensi&oacute;n se rediman tales adeudos en la forma que convenga el beneficiario con el Consejo.</p>
					    <p align="justify" class="enlaces">Art. 53&ordm;.- Es nula toda enajenaci&oacute;n, sesi&oacute;n o gravamen sobre pensiones que esta Ley establece .</p>
					    <p align="justify" class="enlaces">Art. 54&ordm;.- Las pensiones devengadas o futuras ser&aacute;n inembargables a menos de tratarse de hacer efectiva la obligaci&oacute;n de ministrar alimentos o de exigirse el pago de adeudos pendientes con la Direcci&oacute;n de Pensiones.</p>
					    <p align="justify" class="enlaces">Art. 55&ordm;.- En los casos en que el trabajador hubiere desempe&ntilde;ado puesta en forma discontinua, se sumar&aacute;n los per&iacute;odos de labores para computar el t&eacute;rmino a que se refiere el art&iacute;culo 47.<br />
					      Cuando se hubieren desempe&ntilde;ando varios empleos simult&aacute;neamente, el c&oacute;mputo del t&eacute;rmino ser&aacute; simple.</p>
					    <p align="justify" class="enlaces">Art. 56&ordm;..-  El trabajador que optare por el beneficio de la pensi&oacute;n no tendr&aacute; derecho a la devoluci&oacute;n del fondo constitu&iacute;do por sus descuentos quincenales.</p>
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