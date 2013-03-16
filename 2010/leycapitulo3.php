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
          			<div id="ruta_sitio"><a href="http://pensiones.col.gob.mx/2010/index.php"><strong>inicio</strong></a>  &nbsp;&nbsp;&nbsp; •  &nbsp; <!-- InstanceBeginEditable name="seccion" --><a href="legislacion.php">Ley de pensiones </a><!-- InstanceEndEditable -->   &nbsp;&nbsp;•    &nbsp;&nbsp;<!-- InstanceBeginEditable name="contenido" --><a href="#">Cap&iacute;tulo III </a><!-- InstanceEndEditable -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <!-- Búsqueda Google -->
</div>
                    <div id="titulo_contenido"><a name="start" id="start"></a><!-- InstanceBeginEditable name="titulo" -->Ley de Pensiones - Cap&iacute;tulo III <!-- InstanceEndEditable --></div>
                    <div id="texto_contenido">
                      <p><!-- InstanceBeginEditable name="cuerpo" -->
					    <p class="titulo_bold_negro">CAP&Iacute;TULO III</p>
					    <p align="center" class="txt_normal"><strong>Patrimonio</strong></p>
					    <p> <br />
                            <span class="enlaces">Art. 16&ordm;.-  El patrimonio de la Direcci&oacute;n de Pensiones se constituye de la siguiente manera:</span></p>
					    <p class="enlaces"> I.-  Con las aportaciones que por Ley le correspondan al Estado y Entidades y Municipios acogidos a los beneficios de esta Ley <br />
					      II.- Los descuentos obligatorios que se hagan a los empleados y funcionarios.<br />
					      III.- Los intereses, rentas, plusval&iacute;as y dem&aacute;s utilidades que se obtengan de las operaciones e inversiones que conforme a los t&eacute;rminos de esta Ley haga la Direcci&oacute;n.<br />
					      IV.-	El importe de las  pensiones, descuentos e intereses que prescriban en los t&eacute;rminos de la presente Ley.<br />
					      V.-  El producto de las sanciones pecuniarias que sean impuestas en acatamiento a las disposiciones de esta Ley<br />
					      VI.-  Las donaciones, herencias, legados y fideicomisos que se hicieren o constituyeren en favor de la Direcci&oacute;n.<br />
					      VII.- Cualquier otra percepci&oacute;n ya sea de car&aacute;cter civil o mercantil con la cual resultare beneficio a la Direcci&oacute;n.<br />
                        </p>
					    <p class="enlaces"> Art. 17&ordm;.-  Se establecen como descuentos  forzosos para los trabajadores acogidos a los beneficios de esta Ley los siguientes:<br />
                            <br />
					      I.-  El cinco por ciento de sus sueldos, honorarios y percepciones, sin tomar en consideraci&oacute;n la edad del obligado que se destinar&aacute; a la constituci&oacute;n del Fondo de la Instituci&oacute;n .<br />
					      II.-  El dos por ciento de las mismas percepciones que se destinar&aacute; exclusivamente como aportaci&oacute;n para los servicios m&eacute;dico-asistenciales de los servidores p&uacute;blicos.<br />
					      III.- El Estado, Organismos e Institutos y Municipios que se acojan deber&aacute;n aportar el dos y medio por ciento sobre los sueldos de sus empleados y funcionarios. <br />
					      El fondo constitu&iacute;do es inembargable (Decreto No. 128, 31 de enero de 1970).<br />
  <br />
					      Art. 18&ordm;.-  Aquellos trabajadores o funcionarios que desempe&ntilde;an dos o mas empleos, cubrir&aacute;n el descuento establecido en el art&iacute;culo anterior sobre las cantidades efectivamente recibidas.</p>
					    <p class="enlaces">Art. 19&ordm;.- La separaci&oacute;n por licencia ilimitada sin goce de sueldo, no se computar&aacute; como tiempo de servicio. En caso de separaci&oacute;n o licencia limitada  los beneficiarios de la presente Ley quedan obligados a seguir cubriendo sus descuentos para el fondo de la Direcci&oacute;n, si quieren que el tiempo que dure la misma se compute como de servicio.</p>
					    <p class="enlaces">Art. 20.-  Cuando por cualquier raz&oacute;n no se hubiesen hecho los descuentos a los trabajadores, la Direcci&oacute;n podr&aacute; mandar deducirlos hasta por un cincuenta por ciento de los sueldos a menos que el trabajador obtenga facilidades para que el pago sea hecho a plazos.</p>
					    <p class="enlaces">Art. 21.-  Los bienes, derechos y fondos que constituyen el patrimonio de la Direcci&oacute;n de Pensiones, gozar&aacute;n de las franquicias y privilegios concedidos a los bienes del Estado. Estar&aacute;n exentos de toda clase de contribuciones estatales y municipales.</p>
					    <p class="enlaces">Art. 22&ordm;.-  La Caja y control de los bienes y derechos del Fondo se llevar&aacute; por la Direcci&oacute;n de Pensiones independientemente de la Contabilidad del Estado; pero quedando sujeta a la auditor&iacute;a de la Tesorer&iacute;a del Estado, la que podr&aacute; decretar revisiones en cualquier momento y estar&aacute; obligada a auditar cada balance anual.</p>
					    <p class="enlaces">Art. 23&ordm;.-  Los trabajadores que contribuyan a la constituci&oacute;n del Fondo de la Direcci&oacute;n, no adquieren derecho alguno ni individual ni colectivo sobre &eacute;l,  sino tan solo el de gozar de los beneficios que esta Ley les conceda.</p>
					    <p class="enlaces">Art. 24&ordm;.-  Las pensiones ca&iacute;das, la devoluci&oacute;n de descuentos,  los intereses y cualquiera prestaci&oacute;n a cargo del fondo que no se cobre dentro de los dos a&ntilde;os siguientes a la fecha en que hubieren sido exigibles, prescribir&aacute;n a favor de la Direcci&oacute;n de Pensiones.</p>
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