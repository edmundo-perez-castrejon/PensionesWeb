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
          			<div id="ruta_sitio"><a href="http://pensiones.col.gob.mx/2010/index.php"><strong>inicio</strong></a>  &nbsp;&nbsp;&nbsp; •  &nbsp; <!-- InstanceBeginEditable name="seccion" --><a href="legislacion.php">Ley de pensiones </a><!-- InstanceEndEditable -->   &nbsp;&nbsp;•    &nbsp;&nbsp;<!-- InstanceBeginEditable name="contenido" --><a href="#">Cap&iacute;tulo II </a><!-- InstanceEndEditable -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <!-- Búsqueda Google -->
</div>
                    <div id="titulo_contenido"><a name="start" id="start"></a><!-- InstanceBeginEditable name="titulo" -->Ley de Pensiones - Cap&iacute;tulo II <!-- InstanceEndEditable --></div>
                    <div id="texto_contenido">
                      <p><!-- InstanceBeginEditable name="cuerpo" -->
					    <p class="titulo_bold_negro">CAP&Iacute;TULO II</p>
					    <p align="center"><span class="txt_normal"><strong>Administraci&oacute;n y Control </strong></span></p>
					    <p align="justify"> <span class="enlaces">Art. 4&ordm;.- La administraci&oacute;n y control de los servicios de la Direcci&oacute;n estar&aacute; a cargo de un Consejo Directivo.</span></p>
					    <p align="justify" class="enlaces"> Art.5&ordm;.- La Direcci&oacute;n de Pensiones tendr&aacute; per- sonalidad jur&iacute;dica para contratar  y obligarse y para defender ante los tribunales y fuera de ellos cuanto le competa para el cabal ejercicio de las acciones judiciales o extrajudiciales que las leyes le otorgan, as&iacute; como las que en lo general conciernen de acuerdo con el C&oacute;digo Civil a toda persona moral.</p>
					    <p align="justify" class="enlaces"> Art. 6&ordm;.- El Consejo Directivo estar&aacute; integrado por:<br />
					      <br />
					      a).-  Un representante del Ejecutivo del Estado<br />
					      b).-  Un representante del Tesorero del Estado<br />
					      c).- Un representante de los Ayuntamientos con-      tribuyentes<br />
					      d).-  Un representante de los trabajadores del Estado y <br />
				      e).- Un representante de la Secci&oacute;n XXXVI del Sindicato Nacional de los Trabajadores de la Educaci&oacute;n.</p>
					    <p align="justify" class="enlaces"> Art. 7&ordm;.- Los miembros del Consejo Directivo durar&aacute;n tres a&ntilde;os en su encargo y podr&aacute;n ser reelectos. Su funci&oacute;n ser&aacute; honor&iacute;fica.</p>
					    <p align="justify" class="enlaces"> Art. 8&ordm;.- Por cada miembro propietario del Consejo  se designar&aacute; a un suplente. Los acuerdos del Consejo se tomar&aacute;n por mayor&iacute;a de votos y en caso de empate el Presidente tendr&aacute; voto de calidad. Para la celebraci&oacute;n de sesiones del Consejo se requiere la asistencia por lo menos de cuatro consejeros.</p>
					    <p align="justify" class="enlaces"> Art. 9&ordm;.-  Ser&aacute; Presidente del Consejo el representante del Ejecutivo del Estado.</p>
					    <p align="justify" class="enlaces"> Art. 10&ordm;.- El Consejo Directivo tendr&aacute; las siguientes atribuciones y facultades:<br />
					      <br />
					      a).- Cumplir y hacer cumplir las disposiciones de esta Ley.<br />
					      b).-  Administrar los negocios y bienes de la Direcci&oacute;n, realizando las operaciones autorizadas por esta Ley.<br />
					      c).-  Otorgar las pensiones en los t&eacute;rminos de esta Ley o revocarlas en su caso.<br />
					      d).-  Nombrar el personal de la Direcci&oacute;n de Pensiones, oyendo previamente la opini&oacute;n del Director<br />
					      e).-  Formular los reglamentos generales y particulares de la Instituci&oacute;n y de sus diversas operaciones que lo ameriten <br />
					      f).-  Revisar los Estado de Contabilidad y Financieros de la Direcci&oacute;n<br />
					      g).-  Conferir poderes generales o especiales<br />
					      h).-  Autorizar previamente a su realizaci&oacute;n las operaciones autorizadas por esta Ley<br />
					      i).-  Discutir y aprobar el presupuesto de egresos de la Direcci&oacute;n<br />
					      j).-  Conceder licencias a los consejeros y personal de la Direcci&oacute;n <br />
					      k).-  Iniciar las reformas a la presente Ley cuando lo amerite<br />
					      l).- Realizar toda clase de actos u operaciones autorizadas por esta Ley o que para la mejor administraci&oacute;n o gobierno fueren necesarios<br />
					      m).- Celebrar sesiones ordinarias, cuando menos una vez al mes, y extraordinarias cuando fuere necesario<br />
					      n).-  Gestionar y obtener  empr&eacute;stitos de Instituciones Bancarias, para destinar su importe a la construcci&oacute;n de viviendas para sus derechohabientes. (Decreto No. 31, 28 de mayo de 1965)<br />
  <br />
  <br />
				      Art. 11&ordm;.-  Los acuerdos que dicte el Consejo Directivo, ser&aacute;n cumplimentados por un Director,  que ser&aacute; designado por el Ejecutivo del Estado y quien durar&aacute; en su encargo por todo el tiempo que subsista su designaci&oacute;n.</p>
					    <p align="justify" class="enlaces"> Art. 12&ordm;.-  El Director de Pensiones tendr&aacute; las siguientes obligaciones y facultades:<br />
					      <br />
					      a).-  Asistir a la sesiones del Consejo teniendo voz informativa, m&aacute;s no voto.<br />
					      b).-  Ejecutar los acuerdos del Consejo Directivo<br />
					      c).- Informar anualmente al Consejo de las actividades generales y particulares de la Instituci&oacute;n.<br />
					      d).-  Proyectar el presupuesto anual de egresos <br />
					      e).-  Proponer al personal y sus funciones <br />
					      f).-  Informar al Consejo del estado de la Contabilidad y movimiento financiero<br />
					      g).-  Dar cuenta al Consejo de los pr&eacute;stamos a corto plazo concedidos en el mes, y presentar las solicitudes de pr&eacute;stamos hipotecarios y de otros asuntos que lo ameriten, para que se acuerde lo procedente en la sesi&oacute;n inmediata.<br />
					      h).-  Estudiar y proponer el otorgamiento de Pensiones.<br />
					      i).-  Representar a la Direcci&oacute;n en asuntos de &iacute;ndole judicial o administrativo<br />
					      j).-  Despachar y autorizar los acuerdos y la correspondencia del Consejo Directivo y de la Direcci&oacute;n.<br />
					      k).-  Conceder licencias  al personal en los t&eacute;rminos que se&ntilde;ale el Consejo.<br />
					      k).-  Someter al Consejo las reformas o adiciones necesarias a los reglamentos o disposiciones administrativas dictadas por aquel.<br />
					      n).-  Vigilar la actuaci&oacute;n del personal administrativo como jefe inmediato de &eacute;l .<br />
					      n)..- Convocar a sesi&oacute;n del Consejo cuando a su juicio sea necesario<br />
  &ntilde;).-  Ajustarse a las instrucciones que reciba del Consejo para el otorgamiento de pr&eacute;stamos quirografarios o hipotecarios, debiendo cuando se trate de pr&eacute;stamos hipotecarios transcribir esas instrucciones al Notario ante quien se otorgue la escritura en que se consigne el contrato.<br />
				      o).-  Realizar todos aquellos actos que fueren necesarios para el debido funcionamiento de la Direcci&oacute;n.</p>
					    <p align="justify" class="enlaces"> Art. 13&ordm;.-   El Consejo Directivo tendr&aacute; facultad de decretar auditor&iacute;as sobre las oficinas pagadoras del estado y municipales para el s&oacute;lo efecto de verificar  la exactitud de los descuentos o cualquiera otra situaci&oacute;n de tipo contable relacionada con Pensiones.<br />
                          <br />
                          Art. 14&ordm;.-  Todas las dependencias del Gobierno del Estado, organismos descentralizados y aquellos que ingresen a la Instituci&oacute;n comunicar&aacute;n a la Direcci&oacute;n los movimientos de altas y bajas que se tengan dentro de cada quincena.<br />
                          <br />
                      Art. 15.-   Las oficinas pagadoras y todos los encargados de cubrir sueldos a los trabajadores y funcionarios comprendidos en la presente Ley, est&aacute;n obligados a realizar los descuentos que la Direcci&oacute;n ordenen, siendo civilmente responsables de no hacerlo. De igual manera est&aacute;n obligado de enviar a la Direcci&oacute;n las n&oacute;minas o recibos en que consten los descuentos dentro de los quince d&iacute;as  siguientes a la quincena en que deban hacerse los cobros y a ministrar los informes que les sean solicitados. De no ser cumplidas las anteriores obligaciones podr&aacute; sancionarse a los omisos hasta con el diez por ciento de las cantidades dejadas de descontar.</p>
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