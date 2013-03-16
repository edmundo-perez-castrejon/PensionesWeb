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
          			<div id="ruta_sitio"><a href="http://pensiones.col.gob.mx/2010/index.php"><strong>inicio</strong></a>  &nbsp;&nbsp;&nbsp; •  &nbsp; <!-- InstanceBeginEditable name="seccion" --><a href="reglamento.php">Reglamento de servicios m&eacute;dicos</a><a href="legislacion.php"></a><!-- InstanceEndEditable -->   &nbsp;&nbsp;•    &nbsp;&nbsp;<!-- InstanceBeginEditable name="contenido" --><a href="#">Transitorios </a><!-- InstanceEndEditable -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <!-- Búsqueda Google -->
</div>
                    <div id="titulo_contenido"><a name="start" id="start"></a><!-- InstanceBeginEditable name="titulo" -->Reglamento de servicios m&eacute;dicos - Transitorios <!-- InstanceEndEditable --></div>
                    <div id="texto_contenido">
                      <p><!-- InstanceBeginEditable name="cuerpo" -->
                      <p align="left"><span class="titulo_bold_negro">TRANSITORIOS</span></p>
                      <p align="justify" class="txt_normal">PRIMERO: Los trabajadores de la educaci&oacute;n agrupados en la Secci&oacute;n 39 que al momento de ser aprobado el presente Reglamento se encuentren recibiendo la atenci&oacute;n m&eacute;dica sin cumplir las 12 horas semana-mes como m&iacute;nimo, seguir&aacute;n recibiendo esta atenci&oacute;n.</p>
                      <p align="justify" class="txt_normal">SEGUNDO: El presente Reglamento entrar&aacute; en vigor el 1 de septiembre de 1990 para lo cual, previamente, deber&aacute;n estar concluidos los se&ntilde;alamientos del registro y control que precisa el art. 17 en sus fracc. L y ll procediendo la negaci&oacute;n del servicio a quien el 1&deg; de octubre no lo hubiera observado.<br />
                      </p>
                      <p align="justify" class="txt_normal">Se expide en la ciudad de Colima, Col. El d&iacute;a primero de septiembre de 1990.</p>
                      <p align="justify" class="txt_normal">Anualmente, antes de la firma del nuevo  convenio, se hace un an&aacute;lisis de los resultados obtenidos y se presentan ante quienes son los encargados de la negociaci&oacute;n, que generalmente recae, por parte del Gobierno, del Secretario de Administraci&oacute;n C.P. Luis Mario Le&oacute;n L&oacute;pez, quien es a su vez el Presidente del Consejo de Pensiones, del Secretario de Finanzas  Ing. Hugo V&aacute;zquez Montes y del Director de Pensiones Lic. Porfirio Gait&aacute;n Gudi&ntilde;o, y por parte de la Secci&oacute;n 39 del SNTE, de su Secretario General Prof. Nicol&aacute;s Contreras Cort&eacute;s, del Secretario de Previsi&oacute;n y Asistencia Social Prof. Abelardo Rodr&iacute;guez Casta&ntilde;&oacute;n y del Coordinador de los Servicios M&eacute;dicos  Prof. Jos&eacute; Lupi&eacute;n Barajas. </p>
                      <p align="justify" class="txt_normal">Todos ellos debidamente asistidos y asesorados por gente capacitada y profesional, como el C.P Jorge Anguiano Olmos, Director de Presupuesto y el Dr. H&eacute;ctor Javier Mart&iacute;nez Castillo  m&eacute;dico asesor.</p>
                      <p align="justify" class="txt_normal">En seguida se presentan una gr&aacute;ficas que ilustran como han venido evolucionando los servicios a trav&eacute;s de los &uacute;ltimos a&ntilde;os, y como se reporte el presupuesto.</p>
                      <p align="justify" class="txt_normal">Como se puede apreciar, el rengl&oacute;n de medicamentos es el que se lleva la mayor parte del presupuesto y el que m&aacute;s ha crecido en relaci&oacute;n a los otros. Por ello, se ha emprendido una campa&ntilde;a de concientizaci&oacute;n, tanto en los m&eacute;dicos como en los derechohabientes, para tener un mayor control sobre los medicamentos a fin de equilibrar el presupuesto y poder  canalizar mayores recursos a otros factores, como es el mejoramiento en el costo de las consultas o en la implementaci&oacute;n de nuevos servicios.</p>
                      <p align="justify" class="txt_normal">En estos aspectos se tiene una gran comprensi&oacute;n, tanto de los m&eacute;dicos como del comit&eacute; directivo de la Secci&oacute;n 39 , por lo que podemos afirmar que este sistema de prestaci&oacute;n de servicios, &uacute;nico en el pa&iacute;s, seguir&aacute; siendo modelo, as&iacute; como un instrumento id&oacute;neo para mantener las buenas relaciones entre el Gobierno y sus trabajadores educativos.                      </p>
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