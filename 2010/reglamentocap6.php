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
							<li><a href="http://pensiones.col.gob.mx/mision.php" title="Misi�n y visi�n">Misi�n y Visi&oacute;n</a></li>							
							<li><a href="http://pensiones.col.gob.mx/servicios/index.php" title="Consulta tu saldo de pensiones">Consulta tu saldo</a></li>
							<li><a href="http://pensiones.col.gob.mx/reglamento.php" title="Reglamento de servicios m�dicos">Reglamento de servicios m�dicos</a></li>
							<li><a href="http://pensiones.col.gob.mx/organigrama.php" title="Organigrama">Organigrama</a></li>
							<li><a href="http://pensiones.col.gob.mx/cortoplazo.php" title="Requisitos para prestamos a corto plazo">Requisitos para prestamos a corto plazo</a></li>
							<li><a href="http://pensiones.col.gob.mx/hipotecarios.php" title="Requisitos para prestamos hipotecarios">Requisitos para prestamos hipotecarios</a></li>							
							<li><a href="http://pensiones.col.gob.mx/ubicacion.php" title="Ubicaci�n">Ubicaci�n</a></li>                                
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
          			<div id="ruta_sitio"><a href="http://pensiones.col.gob.mx/2010/index.php"><strong>inicio</strong></a>  &nbsp;&nbsp;&nbsp; �  &nbsp; <!-- InstanceBeginEditable name="seccion" --><a href="reglamento.php">Reglamento de servicios m&eacute;dicos</a><a href="legislacion.php"></a><!-- InstanceEndEditable -->   &nbsp;&nbsp;�    &nbsp;&nbsp;<!-- InstanceBeginEditable name="contenido" --><a href="#">Cap&iacute;tulo VI </a><!-- InstanceEndEditable -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <!-- B�squeda Google -->
</div>
                    <div id="titulo_contenido"><a name="start" id="start"></a><!-- InstanceBeginEditable name="titulo" -->Reglamento de servicios m&eacute;dicos - Cap&iacute;tulo VI <!-- InstanceEndEditable --></div>
                    <div id="texto_contenido">
                      <p><!-- InstanceBeginEditable name="cuerpo" -->
                      <p align="left" class="titulo_bold_negro">DE LAS SANCIONES, PROCEDIMIENTOS Y FACULTADES PARA APLICARSE</p>
                      <p align="justify" class="txt_normal">ART. 18	Los derechohabientes y beneficiarios que no se sujetan a lo dispuesto en el presente Reglamento ser&aacute;n suspendidos en su vigencia de derechos por periodos variables de tiempo, que se contabilizan en treinta, cuarenta y cinco y noventa d&iacute;as, debi&eacute;ndose para ello, tomar en consideraci&oacute;n la gravedad y reincidencia asi como el perjuicio econ&oacute;mico o moral causado a la eficiente presentaci&oacute;n del servicio, as&iacute; mismo, ser&aacute;n acreedores de sanciones superiores a las se&ntilde;aladas llegando incluso a la suspensi&oacute;n definitiva quienes en forma deliberada y dolorosa, infrinjan o se presten a infringir el presente Reglamento. </p>
                      <p align="justify" class="txt_normal">El procedimiento de aplicaci&oacute;n iniciar&aacute; con la comparecencia del infractor ante la Direcci&oacute;n de Pensiones Civiles del Estado quien dar&aacute; a conocer las acciones irregulares en que se hubiera incurrido y escuchado lo que aquel a su defensa pueda ofrecer, para ello, se acompa&ntilde;ar&aacute; del represente de la Secci&oacute;n 39 en la Comisi&oacute;n que el Convenio vigente establece:</p>
                      <p align="justify" class="txt_normal">Una vez concluido dicho tr&aacute;mite, a la brevedad posible el Director de Pensiones Civiles del Estado por escrito dar&aacute; a conocer al infractor la sanci&oacute;n determinada con copia a la Secci&oacute;n 39.</p>
                      <p align="justify" class="txt_normal">ART. 19	Los casos no previstos en el presente Reglamento ser&aacute;n resueltos por la Direcci&oacute;n de Pensiones Civiles y la Secci&oacute;n 39 del S.E.N.T.E.</p>
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
          						Torres Quintero No. 156   CP 28000, Col.Centro Colima,Col. <a href="ubicacion.php"><img src="imagenes/ico/ico_ubicacion.png" alt="Ver Ubicaci�n" border="0" style="cursor:pointer" title="Ver Ubicaci�n" onclick="javascript:window.open('ubicacion.php','_self');" /></a>
                                contacto:dir_pensiones@prodigy.net.mx.
                                Tel�fonos: 312 31 21116.
							</div>   
        </div>
      </div>
</div>
	<script type="text/javascript">qm_create(0,false,0,500,'lev2',false,false,false,true);</script>
</body>
<!-- InstanceEnd --></html>