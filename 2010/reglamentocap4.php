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
          			<div id="ruta_sitio"><a href="http://pensiones.col.gob.mx/2010/index.php"><strong>inicio</strong></a>  &nbsp;&nbsp;&nbsp; •  &nbsp; <!-- InstanceBeginEditable name="seccion" --><a href="reglamento.php">Reglamento de servicios m&eacute;dicos</a><a href="legislacion.php"></a><!-- InstanceEndEditable -->   &nbsp;&nbsp;•    &nbsp;&nbsp;<!-- InstanceBeginEditable name="contenido" --><a href="#">Cap&iacute;tulo IV </a><!-- InstanceEndEditable -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <!-- Búsqueda Google -->
</div>
                    <div id="titulo_contenido"><a name="start" id="start"></a><!-- InstanceBeginEditable name="titulo" -->Reglamento de servicios m&eacute;dicos - Cap&iacute;tulo IV <!-- InstanceEndEditable --></div>
                    <div id="texto_contenido">
                      <p><!-- InstanceBeginEditable name="cuerpo" -->
                      <p align="left" class="titulo_bold_negro">DE LOS SERVICIOS MEDICOS Y FARMACIA</p>
                      <p class="txt_normal">ART. 7	Se entiende por servicios m&eacute;dicos el otorgamiento de lo siguiente:</p>
                      <p class="txt_normal">I.	Consultas con M&eacute;dicos Generales.<br />
  II.	Consultas con M&eacute;dicos Especialistas.<br />
  III.	Las medicinas que prescriban los m&eacute;dicos.<br />
  IV.	Sanatorio que incluye hospitalizaci&oacute;n, quir&oacute;fano, cunero, material de curaci&oacute;n y medicamentos que se apliquen en el interior del Sanatorio.<br />
  V.	Servicio dental, en los t&eacute;rminos del Art&iacute;culo 13 Frac. 1 del presente Reglamento.<br />
  VI.	Laboratorio de an&aacute;lisis cl&iacute;nicos.<br />
  VII.	Rayos &ldquo;X&rdquo;.<br />
                      VIII.	Electrocardiogramas.<br />
                      IX.	Encefalogramas.<br />
                      X.	Ultrasonido.<br />
                      XI.	Rehabilitaci&oacute;n.</p>
                      <p class="txt_normal">Estos servicios ser&aacute;n presentados exclusivamente por las personas e instituciones que se enlisten en el Anexo N&uacute;m. 1 que forma parte del presente Reglamento.</p>
                      <p class="txt_normal">ART. 8	La Direcci&oacute;n de Pensiones contratara libremente los servicios profesionales de los m&eacute;dicos que se requieran para la buena atenci&oacute;n a los derechohabientes y sus beneficiarios.</p>
                      <p class="txt_normal">ART. 9	Se determinan dos tipos de consulta: la general y la especializada, procediendo exclusivamente la segunda por prescripci&oacute;n de la primera; asimismo, se determinan como consulta general: la homeop&aacute;tica y la dental.</p>
                      <p class="txt_normal">ART. 10	Se establece la obligaci&oacute;n de integrar un expediente cl&iacute;nico por derechohabiente y beneficiario para los efectos de consulta expedida.</p>
                      <p class="txt_normal">ART. 11	El servicio de consulta general se brindar&aacute; mediante el siguiente procedimiento:</p>
                      <p class="txt_normal">I.	Corresponde a los derechohabientes y beneficiarios elegir su m&eacute;dico general, de entre los que Pensiones tienen contratados.<br />
  II.	Cada derechohabiente o beneficiario llevar&aacute; un carnet de registro de consultas.<br />
  III.	El m&eacute;dico general llevar&aacute; el expediente m&eacute;dico de los derechohabientes y sus beneficiarios.<br />
  IV.	Se beber&aacute; acudir con el m&eacute;dico general presentando su tarjeta de consulta.<br />
  V.	El m&eacute;dico proceder&aacute;, una vez atendido el paciente y determinado el diagn&oacute;stico correspondiente, a asentar en la tarjeta de consultas los datos correspondientes, as&iacute; como determinar nueva cita, alta o consulta especializada.</p>
                      <p class="txt_normal">ART. 12	El servicio de consulta especializada se brindar&aacute; mediante el siguiente procedimiento:</p>
                      <p class="txt_normal">I.	El derechohabiente y sus beneficiarios con el pase a consulta especializada as&iacute; como expediente, acudir&aacute; a la Direcci&oacute;n de Pensiones por la autorizaci&oacute;n correspondiente, la que una vez obtenida, proceder&aacute; a recibir el servicio.</p>
                      <p class="txt_normal">II.	El m&eacute;dico especialista proceder&aacute;, una vez atendido el paciente y determinado el diagn&oacute;stico correspondiente, a asentar en la tarjeta de consultas los datos correspondientes, as&iacute; como si determina nueva cita u otro tipo de tratamiento.</p>
                      <p class="txt_normal">III.	El paciente al ser dado de alta por el m&eacute;dico especialista, deber&aacute; regresar el expediente cl&iacute;nico, tambi&eacute;n en sobre cerrado en un t&eacute;rmino de 24 hrs. h&aacute;biles al m&eacute;dico general.</p>
                      <p class="txt_normal">IV.	Es responsabilidad de los derechohabientes y beneficiarios el mal uso que se pueda dar a los mismo expedientes. Por ello, para dar cumplimiento a la Fracci&oacute;n IV del presente Art&iacute;culo el paciente firmar&aacute; un vale por su expediente que recibe. No siendo este aplicable, a los menores de 16 a&ntilde;os, en cuyo caso a la responsabilidad recaer&aacute; en el derechohabiente.</p>
                      <p class="txt_normal">ART. 13	De las recetas m&eacute;dicas:</p>
                      <p class="txt_normal">I.	Ser&aacute;n surtidas en la Farmacia de Pensiones Civiles, ubicada en el cruce de las calles Ju&aacute;rez y Jos&eacute; Antonio D&iacute;az, de esta ciudad con horario de servicio de las 9:00 a las 20:00 horas de lunes a viernes y los s&aacute;bados de 9:00 a 15:00 hrs.: las medicinas que no hubiera en esta Farmacia ser&aacute;n surtidas mediante un vale en las Farmacias que se indican en el Anexo No. 1.</p>
                      <p class="txt_normal">II.	Las recetas que se prescriban los s&aacute;bados por la tarde, domingos y d&iacute;as festivos, podr&aacute;n ser surtidas directamente en las farmacias se&ntilde;aladas en la Frac. I del presente Art&iacute;culo.</p>
                      <p class="txt_normal">III.	Todas las recetas deber&aacute;n ser surtidas en un plazo improrrogable de 48 horas, t&eacute;rmino que ser&aacute; computado a partir de la fecha de su expedici&oacute;n.</p>
                      <p class="txt_normal">ART. 14	Del servicio de Sanatorio:</p>
                      <p class="txt_normal">I.	Ser&aacute; brindado a trav&eacute;s de los Centros M&eacute;dicos Hospitalarios que determine la Direcci&oacute;n de Pensiones donde se atender&aacute;n exclusivamente, urgencias, partos e intervenciones quir&uacute;rgicas programadas.</p>
                      <p class="txt_normal">II.	Para la atenci&oacute;n de urgencias &eacute;stas se atender&aacute;n sin l&iacute;mite alguno, debi&eacute;ndose de inmediato, en t&eacute;rminos del d&iacute;a h&aacute;bil siguiente, realizar el tr&aacute;mite correspondiente, explicando la urgencia.</p>
                      <p class="txt_normal">III.	Las intervenciones quir&uacute;rgicas ser&aacute;n programadas y autorizadas en el orden que se soliciten de acuerdo con los recursos financieros disponibles, no obstante a lo aqu&iacute; dispuesto se dar&aacute; prioridad a los casos que as&iacute; se requieran escuchando la opini&oacute;n del m&eacute;dico que prescribe la cirug&iacute;a.</p>
                      <p class="txt_normal">IV.	En los casos de cirug&iacute;a de urgencia y traumatolog&iacute;a, las radiograf&iacute;as no requieren autorizaci&oacute;n previa, cubri&eacute;ndose este requisito con la prescripci&oacute;n m&eacute;dica respectiva.</p>
                      <p class="txt_normal">V.	El derechohabiente o sus beneficiarios deber&aacute;n firmar las recetas y facturas de los Sanatorios al recibir la atenci&oacute;n m&eacute;dica, ya que este es requisito indispensable para que los prestadores de servicios puedan cobrar sus honorarios.</p>
                      <p class="txt_normal">ART. 15	De otros servicios:</p>
                      <p class="txt_normal">I.	Dental: se concretar&aacute; a consulta, curaci&oacute;n, rayos &ldquo;X&rdquo;, obturaci&oacute;n, extracci&oacute;n y limpieza una vez al a&ntilde;o exclusivamente, adem&aacute;s de que requerir&aacute;n autorizaci&oacute;n previa de la Direcci&oacute;n de Pensiones Civiles quien los programa de acuerdo a los recursos financieros disponibles y el orden en que se soliciten.</p>
                      <p class="txt_normal">II.	Los an&aacute;lisis cl&iacute;nicos no requieren de autorizaci&oacute;n previa y ser&aacute;n realizados exclusivamente en el laboratorio que determine la Direcci&oacute;n de Pensiones Civiles.</p>
                      <p class="txt_normal">III.	Las radiograf&iacute;as, electrocardiogramas, encefalogramas y ultrasonidos que ordenen los facultativos requieren autorizaci&oacute;n previa de la Direcci&oacute;n de Pensiones, que la otorgar&aacute; mediante la presentaci&oacute;n del presupuesto respectivo de quien los vaya a realizar y tomando en cuenta la urgencia del servicio y disponibilidad financiera.</p>
                      <p class="txt_normal">IV.	El horario de la Direcci&oacute;n de Pensiones para autorizar servicios m&eacute;dicos que as&iacute; lo requieran, ser&aacute;n de 9:00 horas de lunes a viernes y la en la Farmacia de Pensiones de 15:00 a 20:00 horas de lunes a viernes y los s&aacute;bados de 10:00 a 12:00 horas.</p>
                      <p class="txt_normal">ART. 16	La Direcci&oacute;n de Pensiones Civiles del Estado no pagar&aacute; ning&uacute;n recibo de honorarios, ni factura de servicios o medicina a los trabajadores y a los familiares que utilicen los servicios de doctores y cl&iacute;nicas locales o for&aacute;neos ue no aparezcan en el Anexo No. 1.</p>
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