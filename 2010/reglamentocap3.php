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
          			<div id="ruta_sitio"><a href="http://pensiones.col.gob.mx/2010/index.php"><strong>inicio</strong></a>  &nbsp;&nbsp;&nbsp; •  &nbsp; <!-- InstanceBeginEditable name="seccion" --><a href="reglamento.php">Reglamento de servicios m&eacute;dicos</a><a href="legislacion.php"></a><!-- InstanceEndEditable -->   &nbsp;&nbsp;•    &nbsp;&nbsp;<!-- InstanceBeginEditable name="contenido" --><a href="#">Cap&iacute;tulo III </a><!-- InstanceEndEditable -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <!-- Búsqueda Google -->
</div>
                    <div id="titulo_contenido"><a name="start" id="start"></a><!-- InstanceBeginEditable name="titulo" -->Reglamento de servicios m&eacute;dicos - Cap&iacute;tulo III <!-- InstanceEndEditable --></div>
                    <div id="texto_contenido">
                      <p><!-- InstanceBeginEditable name="cuerpo" -->
                      <p align="left" class="titulo_bold_negro">DE LA VIGENCIA DE DERECHOS</p>
                      <p align="justify" class="txt_normal">ART. 4	Para  adquirir y conservar la vigencia de derechos es necesario:</p>
                      <p align="justify" class="txt_normal">I)	Para el derechohabiente:<br />
                      A)	Nombramiento de base en original y copia.<br />
                      B)	Acreditar sus derechos al servicio m&eacute;dico con su &uacute;ltimo tal&oacute;n de Cheque  quincenal.<br />
                      C)	No estar sancionado en los t&eacute;rminos  del Cap&iacute;tulo VI del presente Reglamento.<br />
                      D)	Acta de nacimiento y dos fotograf&iacute;as tama&ntilde;o infantil.</p>
                      <p align="justify" class="txt_normal">II)	Para los beneficiarios:<br />
  A)	Esposa: copia de acta de matrimonio, copia del acta de nacimientos y dos fotograf&iacute;as  tama&ntilde;o infantil.<br />
  B)	Hijos menores de 18 a&ntilde;os: copia del acta de nacimiento  y dos fotograf&iacute;as tama&ntilde;o infantil. Los menores de tres a&ntilde;os no requieren fotograf&iacute;a.<br />
  C)	Hijos estudiantes solteros de 18 a&ntilde;os hasta la edad de 25:  copia del acta de nacimiento, dos fotograf&iacute;as tama&ntilde;o infantil y constancia de estudios expedida por el plantel  educativo, reconocido por la dependencia oficial respectiva que acredite que se encuentra realizando estudios a nivel medio superior o superior.<br />
  D)	Padres: acreditar el parentesco , resultar aprobado en el estudio socio-econ&oacute;mico que la Direcci&oacute;n de Pensiones practique, y que no goce de otros beneficios  de medicina social.<br />
  E)	No estar sancionado en los t&eacute;rminos del Cap&iacute;tulo y del presente Reglamento.</p>
                      <p align="justify" class="txt_normal">ART. 5	La vigencia de derechos se pierde:</p>
                      <p align="justify" class="txt_normal">I)	Para el derechohabiente:<br />
  A)	Por separaci&oacute;n obligada del servicio  por renuncia o por licencia sin goce de sueldo mayor de un mes.<br />
                      B)	Por suspensiones temporal o definitiva por violaciones al presente reglamento.</p>
                      <p align="justify" class="txt_normal">II)	Para los beneficiarios:<br />
  A)	Por separaci&oacute;n del trabajador con los t&eacute;rminos del inciso a) de la fracci&oacute;n  Primera de este Art&iacute;culo<br />
  B)	Por suspensi&oacute;n temporal definitiva por violaciones al presente Reglamento.</p>
                      <p align="justify" class="txt_normal">ART. 6	Aun en los supuestos  de los Art&iacute;culos 4 y 5 del presente Reglamento, la vigencia  de los derechos no se pierde cuando se est&eacute; ya en tratamiento m&eacute;dico y hasta la conclusi&oacute;n del mismo, siempre que &eacute;ste no exceda de un mes.</p>
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