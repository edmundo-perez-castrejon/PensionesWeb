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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Instituto Colimense para la Calidad - Gobierno del Estado de Colima</title>



<link href="styles/main.css" rel="stylesheet" type="text/css" />
<link href="styles/variaciones/layout_variacion_icc.css" rel="stylesheet" type="text/css" />
<link href="styles/nav_vertical_icc.css" rel="stylesheet" type="text/css" />
<link href="styles/layout_icc_int.css" rel="stylesheet" type="text/css" />




<script type="text/javascript" src="http://www.colima-estado.gob.mx/js/mainmenu.js"></script>
<script type="text/javascript" src="scripts/menu_vertical_ie.js"></script>
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
                                            <ul>
                                                <li><a href="#" title="¿Qué hace el ICC?">¿Qué hace el ICC?</a></li>
                                                <li><a href="#" title="Clientes">Clientes</a></li>
                                                <li><a href="#" title="Cursos">Cursos</a></li>
                                                <li><a href="#" title="Próximos cursos">Póximos cursos</a></li>	
                                                <li><a href="#" title="Galerìa de immágenes">Galería de Imágenes</a></li>	            
                                                <li><a href="#" title="Noticias">Noticias</a></li>	            
                                                <li><a href="#" title="Directorio de empresas">Directorio de empresas</a></li>	            
                                                <li><a href="#" title="Directorio de consultores">Directorio de consultores</a></li>	            
                                                <li><a href="#" title="Contàctanos">Contáctanos</a></li>	            
                                                <li><a href="#" title="Premios a la calidad">Premios a la calidad</a></li>	
                                                <li><a href="#" title="servicios">Servicios</a></li>
                                                <li><a href="#" title="transparencia">Transparencia</a></li>	                        
                                                <li><a href="#" title="Nuestros clientes opinan">Nuestros clientes opinan</a></li>	                                                                        
                                            </ul>
             </div>
                                          

        </div>  
            
          <!--  Fin de la navegacion vertical-->
      
           
          <!-- inicio de area de contenido    -->
          <div id="contenido_interior_icc">
          			<div id="ruta_sitio"><a href="#"><strong>inicio</strong></a>  &nbsp;&nbsp;&nbsp; •  &nbsp; <a href="#">sección</a>   &nbsp;&nbsp;•    &nbsp;&nbsp;<a href="#">contenido</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; buscador:&nbsp; 
          			  <input type="text" name="textfield" id="textfield" />
          			&nbsp; 
          			<input type="submit" name="button" id="button" value="buscar" />
          			</div>
                    <div id="titulo_contenido"><a name="start" id="start"></a>Colima es uno de los 31 estados&nbsp; </div>
                    <div id="texto_contenido">
                      <p>Al llegar a La Ciudad de las Palmeras, como se le conoce a Colima, fundada en 1525, encuentras un paraíso donde exuberantes paisajes y majestuosos volcanes, son los principales protagonistas. Si a ello le añadimos una riqueza cultural, histórica y la siempre hospitalidad de su gente, entonces nos encontramos ante uno de los estados más interesantes y bellos de México.<br />
                        <br />
                        El nombre del estado y la ciudad de Colima ha sido interpretado erróneamente en distintas ocasiones. Las últimas investigaciones dicen que Colima, viene del náhuatl Acolman, que significa "lugar donde tuerce el agua" o "lugar donde hace recodo el río". El territorio de Colima, del que casi tres cuartas partes de superficie están cubiertas por montañas y colinas, queda comprendido dentro de una derivación de la Sierra Madre del Sur, que se compone de cuatro sistemas montañosos.<br />
                        <br />
                        A pesar de ser una pequeña entidad , Colima encierra en sus límites un sinfín de atractivos que contribuyen a acrecentar la fama de México, entre los que podemos mencionar la catedral, de estilo neoclásico; el Palacio de Gobierno, con los magníficos murales del pintor colimense Jorge Chávez Carrillo, que ilustran temas históricos relativos a la Conquista, la Colonización y la Guerra de Independencia. Otros lugares culturales y arquitectónicos que destacan son: El Teatro Hidalgo, que data del siglo XIX; el Templo de San Francisco, fundado en 1554; la Casa de la Cultura, con una increíble biblioteca, sala de exposiciones, auditorio y talleres de diversas actividades artísticas. </p>
                      <p>En el Estado de Colima existen diversos elementos orogr&aacute;ficos: desde sierras, barrancas, valles, llanuras, mesetas, entre otras forman parte de las dos provincias fisiogr&aacute;ficas que incluyen al Estado, la del Eje Neovolc&aacute;nico y la de la Sierra Madre del Sur. En la porci&oacute;n Noreste y Norte de la entidad se localiza el Volc&aacute;n de Colima y Cerro Grande respectivamente, este &uacute;ltimo es la continuaci&oacute;n sur de la Sierra de Manantl&aacute;n en el vecino Estado de Jalisco. Estas distintas monoestructuras determinan las condiciones e influyen en el comportamiento del clima y de la hidrolog&iacute;a regional. Los valores precipitados y evapotranspirados tienen relaci&oacute;n directa con el clima predominante que es el c&aacute;lido subh&uacute;medo y el semiseco muy c&aacute;lido, donde la temperatura media anual varia de 24.8 a 26.6&deg; C, con lluvias en verano, cuya oscilaci&oacute;n entre el mes m&aacute;s c&aacute;lido y el m&aacute;s fr&iacute;o es inferior a 5&nbsp;&deg;C; debido adem&aacute;s a la composici&oacute;n del suelo cuya dominancia es la baja permeabilidad de los materiales de mayor exposici&oacute;n, como son la andesita, la toba intermedia, la brecha volc&aacute;nica intermedia, conglomerado, la arenisca, la caliza, y el suelo aluvial de granulometr&iacute;a variable.</p>
                      <div>
                        <div>
                          <div>
                              <div></div>
                              Obispado de Colima</div>
                        </div>
                      </div>
                      <div id="row_dialog">
                      	<div id="logo_dialog"><img src="imagenes/ico/logo_prueba.jpg" width="125" height="93" /></div>
                        <div id="fondo_dialog">Nombre de la empresa<br /> Direcciòn</div>
                      </div>
                      <div id="row_dialog">
                      	<div id="logo_dialog"><img src="imagenes/ico/logo_prueba.jpg" width="125" height="93" /></div>
                        <div id="fondo_dialog">Nombre de la empresa<br /> Direcciòn</div>
                      </div>
            </div>
                    <div id="control_navegacion_inferior">
                    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <img src="imagenes/ico/home-icon.gif" width="18" height="16" /> <a href="#">&lt;&lt; regresar a página principal                   &nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#start">arriba</a>&nbsp; <a href="#start"><img src="imagenes/ico/ico_arriba.gif" width="8" height="6" border="0" /></a></div>
          
          </div>
     		
      <!--Aqui termina el area de contenido --------------------------------------------------------------------> 
        
      </div>
      <div id="footer">
        <div id="escudo_gobierno_pie"></div>
        <div id="pie_left">
          <div id="enlaces_pie"></div>
          <div id="datos_pie"> Complejo Administrativo del Gobierno del Estado
            3er. Anillo Perif&eacute;rico, Esq. Ej&eacute;rcito Mexicano S/N.
            Colonia el Diezmo Tel. 3162000
            C.P. 28010 Colima, colima. M&eacute;xico. </div>
        </div>
      </div>
</div>
<script type="text/javascript">qm_create(0,false,0,500,'lev2',false,false,false,true);</script>
</body>
</html>