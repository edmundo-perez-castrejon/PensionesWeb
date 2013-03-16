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
          			<div id="ruta_sitio"><a href="http://pensiones.col.gob.mx/2010/index.php"><strong>inicio</strong></a>  &nbsp;&nbsp;&nbsp; •  &nbsp; <!-- InstanceBeginEditable name="seccion" --><a href="#">Ley de pensiones </a><!-- InstanceEndEditable -->   &nbsp;&nbsp;•    &nbsp;&nbsp;<!-- InstanceBeginEditable name="contenido" --><a href="#"></a><!-- InstanceEndEditable -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <!-- Búsqueda Google -->
</div>
                    <div id="titulo_contenido"><a name="start" id="start"></a><!-- InstanceBeginEditable name="titulo" -->Ley de pensiones <!-- InstanceEndEditable --></div>
                    <div id="texto_contenido">
                      <p><!-- InstanceBeginEditable name="cuerpo" -->
					    <p align="center"><span class="titulo_bold_negro">EL  C. LIC. FRANCISCO VELASCO CURIEL</span>, </p>
                        <p align="center" class="txt_normal">Gobernador Constitucional del Estado Libre  y Soberano de Colima, a sus habitantes, sabed:</p>
                        <p align="center" class="txt_normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Que el H. Congreso del Estado me ha  dirigido para su publicaci&oacute;n el Decreto que sigue:</p>
                        <p align="center" class="txt_normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; EL CONGRESO DEL ESTADO, EN NOMBRE  DEL PUEBLO EXPIDE EL SIGUIENTE:</p>
                        <h3 align="center" class="txt_normal">D E C R  E T O&nbsp;&nbsp;&nbsp;&nbsp; No.&nbsp;&nbsp; 58</h3>
                        <p align="center" class="txt_normal"><strong>LEY DE PENSIONES CIVILES PARA EL ESTADO DE  COLIMA</strong></p>
                        <h1 align="center"><a class="txt_contenido_small_bold" href="leycapitulo1.php">CAPITULO I</a></h1>
                        <h1 align="center"><a class="txt_contenido_small_bold" href="leycapitulo2.php">CAPITULO II</a></h1>
                        <h1 align="center"><a class="txt_contenido_small_bold" href="leycapitulo3.php">CAPITULO III</a></h1>
                        <h1 align="center"><a class="txt_contenido_small_bold" href="leycapitulo4.php">CAPITULO IV</a></h1>
                        <h1 align="center"><a class="txt_contenido_small_bold" href="leycapitulo5.php">CAPITULO V</a></h1>
                        <h1 align="center"><a class="txt_contenido_small_bold" href="leycapitulo6.php">CAPITULO VI</a></h1>
                        <h1 align="center"><a class="txt_contenido_small_bold" href="leycapitulo7.php">CAPITULO VII</a></h1>
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