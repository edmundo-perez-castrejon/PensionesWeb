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
          			<div id="ruta_sitio"><a href="http://pensiones.col.gob.mx/2010/index.php"><strong>inicio</strong></a>  &nbsp;&nbsp;&nbsp; •  &nbsp; <!-- InstanceBeginEditable name="seccion" --><a href="legislacion.php">Ley de pensiones </a><!-- InstanceEndEditable -->   &nbsp;&nbsp;•    &nbsp;&nbsp;<!-- InstanceBeginEditable name="contenido" --><a href="#">Cap&iacute;tulo VII </a><!-- InstanceEndEditable -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <!-- Búsqueda Google -->
</div>
                    <div id="titulo_contenido"><a name="start" id="start"></a><!-- InstanceBeginEditable name="titulo" -->Ley de Pensiones - Cap&iacute;tulo VII <!-- InstanceEndEditable --></div>
                    <div id="texto_contenido">
                      <p><!-- InstanceBeginEditable name="cuerpo" -->
					    <p class="titulo_bold_negro">CAP&Iacute;TULO VII</p>
					    <p align="center" class="txt_normal"><strong>Responsabilidades y Sanciones </strong></p>
					    <p align="justify"> <span class="enlaces">Art. 59&ordm;.-  Los funcionarios y trabajadores a quienes beneficia esta Ley, que dejen de cumplir  con algunas de las obligaciones que la misma les impone, ser&aacute;n sancionados con multa de veinte a dos mil pesos, seg&uacute;n la gravedad del caso.</span></p>
					    <p align="justify" class="enlaces"> Art. 60&ordm;.-  Los pagadores y encargados de cubrir sueldos que no efect&uacute;en los descuentos que procedan en los t&eacute;rminos de esta Ley, ser&aacute;n sancionados con una multa equivalente al 10% (diez por ciento)  de las cantidades no descontadas independientemente de las responsabilidades civiles o penales en que encurra.</p>
					    <p align="justify" class="enlaces">Art. 61&ordm;.-  Las sanciones pecuniarias previstas en los art&iacute;culos anteriores, ser&aacute;n impuestas por el Director de Pensiones, despu&eacute;s de o&iacute;r al interesado y son revisables por el Consejo Directivo, s&iacute; se hace valer la inconformidad por escrito dentro de los quince d&iacute;as siguientes al en que se notifique la sanci&oacute;n. Las sanciones impuestas ser&aacute;n efectivas por la Tesorer&iacute;a General del Estado y esta deber&aacute; remitir a la Direcci&oacute;n de Pensiones el monto de las que cobre, dentro de los cinco d&iacute;as siguientes al en que haga el cobro.</p>
					    <p align="justify" class="enlaces">Art. 62&ordm;.-  Los miembros del Consejo Directivo, el Director y dem&aacute;s trabajadores de la Direcci&oacute;n de Pensiones como encargado de un servicio p&uacute;blico estar&aacute;n sujetos a las responsabilidades civiles y penales en que pudieren incurrir en sus funciones o  empleo.</p>
					    <p align="justify" class="enlaces">Art. 63&ordm;.-  Cuando se imponga a los funcionarios o trabajadores de  los Municipios,  Organismos, Institutos o Patronatos descentralizados una sanci&oacute;n de las previstas en este art&iacute;culo, o les resulte una responsabilidad pecuniaria por servicio que hayan recibido indebidamente, el Municipio , Organismo, Instituto o Patronato de quien depende el funcionario o trabajador, a petici&oacute;n de la Direcci&oacute;n de Pensiones le harta los descuentos correspondientes por el importe de la sanci&oacute;n o responsabilidad,  con la limitaci&oacute;n que establece el Art&iacute;culo 20.</p>
					    <p align="center" class="txt_normal"><strong>Transitorios</strong></p>
					    <p align="justify"> <span class="enlaces">Art. 1&ordm;.- Esta Ley entrar&aacute; en vigor a partir del d&iacute;a 1&ordm;. de Enero de 1963.<br />
                        </span></p>
					    <p align="justify" class="enlaces"> Art. 2&ordm;.-  En tanto el Estado continu&eacute; cubriendo el importe de las jubilaciones concedidas por el Congreso del Estado, su aportaci&oacute;n al fondo, a que se refiere el Art. 17,  ser&aacute; del 1% .</p>
					    <p align="justify" class="enlaces"> Art. 3&ordm;..-  Se derogan todas las disposiciones que se opongan a la presente Ley.</p>
					    <p align="justify" class="enlaces"> El Gobernador Constitucional del Estado dispondr&aacute; se publique circule y observe.</p>
					    <p align="justify" class="enlaces"> Sal&oacute;n de Sesiones del H. Congreso del Estado.- Colima, Col., diciembre 28 de 1962.- DIPUTADO PRESIDENTE.- ENRIQUE CUEVAS RUIZ..- DIPUTADO SECRETARIO.-  JOSE AHUMADA SALAZAR.-  DIPUTADO SECRETARIO.-  PROFR. ISMAEL AGUAYO FIGUEROA.- R&uacute;bricas.-</p>
					    <p align="justify" class="enlaces"> Por tanto mando se imprima, publique, circule y observe.-</p>
					    <p align="justify" class="enlaces"> Palacio de Gobierno.- Colima, Col., Diciembre 28 de 1962.- EL GOBERNADOR CONSTITUCIONAL DEL ESTADO, LIC. FRANCISCO VELASCO CURIEL.- R&uacute;brica.- EL SECRETARIO GRAL. DE GOBIERNO, LIC. JULIO SANTA ANA E.- R&uacute;brica.-</p>
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