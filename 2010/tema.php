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
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/pensiones.js"></script>
<script type="text/javascript" src="fancybox/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
<script type="text/javascript" src="fancybox/fancybox/jquery.fancybox-1.3.1.js"></script>
<link rel="stylesheet" type="text/css" href="fancybox/fancybox/jquery.fancybox-1.3.1.css" media="screen" />
<link rel="stylesheet" href="fancybox/style.css" />
<script type="text/javascript">
	$(document).ready(function() {
		/*
		*   Examples - iframe
		*/
		<?php $i=1;
		while ($i<7)
		  {
			?>		 
		 $("#frame<?php echo $i; ?>").fancybox({
			'width'				: '90%',
			'height'			: '90%',
			'autoScale'			: false,
			'transitionIn'		: 'none',
			'transitionOut'		: 'none',
			'type'				: 'iframe'
		});
		<?php 
		  $i++;
		  }
		?>
								
	});
</script>
<script language="javascript">
function ClickHereToPrint(){
try{
var oIframe = document.getElementById('ifrmPrint');
var oContent = document.getElementById('divToPrint').innerHTML;
var oDoc = (oIframe.contentWindow || oIframe.contentDocument);
if (oDoc.document) oDoc = oDoc.document;
oDoc.write("<head><title>Direccion de Pensiones</title>");
oDoc.write("</head><body onload='this.focus(); this.print();'>");
oDoc.write("<span style='float:left;padding:20px;'><img src='http://firmaelectronica.col.gob.mx/imagenes/colima_late.jpg' />");
oDoc.write("</span><span style='float:right; padding:20px;'><img src='http://firmaelectronica.col.gob.mx/imagenes/secretaria.jpg' />");
oDoc.write("</span><div style='float:left'><div style='width:850px; text-align:center' ><br><br><h3>Direccion de Pensiones</h3></div><br><br><div style='width:850px; text-align:left; padding-left:50px; '>");
oDoc.write(oContent + "</div></body>");
//oDoc.open();
oDoc.close();
}
catch(e){
self.print();
}
}
</script>

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
                    <?php
                    require_once('menu_local.php');						                                  
                    ?>
				</div>

             </div>
                                          

        
            
          <!--  Fin de la navegacion vertical-->
      
           
          <!-- inicio de area de contenido    -->
          <div id="contenido_interior_icc">
          			<div id="ruta_sitio"><a href="http://pensiones.col.gob.mx/2010/index.php"><strong>inicio</strong></a>  &nbsp;&nbsp;&nbsp; •  &nbsp; <!-- InstanceBeginEditable name="seccion" --><a href="http://pensiones.col.gob.mx/2010/tema.php?it=MzAx">Transparencia</a><!-- InstanceEndEditable -->   &nbsp;&nbsp;•    &nbsp;&nbsp;<!-- InstanceBeginEditable name="contenido" --><a href="#">
                    <?php
                    $iDpcia="190000";
                    
                    $sTitulo = '';                    
                    $sDpcia = '';
                    $sContenido = '';
                     
                    if (isset($_GET['it']) && !empty($_GET['it']) )
                    {
                        $idCont = base64_decode(trim($_GET['it']));
                        
                        if (is_numeric($idCont) && $idCont > 0 && strlen($idCont) <= 6)
                        {                
                            try {  
                                $wsCliente = new SoapClient('http://www.colima-estado.gob.mx/ws/wsContenidos.php?wsdl');
                                #$iDpcia="130000";                                                       
                                                                                        #$nodep=0,$noseccion=0,$orden='',$limite='',$fecha='',$tmpCriterio=''                                    
                                $tmpContenido = base64_decode($wsCliente->getDetalleContenido($idCont,$iDpcia));
                               
                                if (!empty($tmpContenido) && strlen(trim($tmpContenido)) > 10){
                                    $xmlContenido = simplexml_load_string($tmpContenido) or die("No se pudo obtener informacion"); 
                                    //echo '<pre>';
//                                    echo print_r($xmlContenido);
//                                    echo '</pre>';
                                    $iTema = $xmlContenido->registro->id_cont;
                                    $sTitulo = utf8_decode(base64_decode($xmlContenido->registro->titulo));
                                    $sContenido = utf8_decode(base64_decode($xmlContenido->registro->cuerpo_cont));
                                    $sFecha = trim(base64_decode($xmlContenido->registro->fecha));
                                    $sDpcia = utf8_decode(base64_decode($xmlContenido->registro->dependencia));
                                }
                            } catch (SoapFault $E) {  
                                $curp = '';    
                            }
                        }            
                    }
                    
					/*if (isset($_GET['it']) && strlen($_GET['it'])>0){
						$iTema = base64_decode($_GET['it']);
						
						$oContenido = new contenido($iTema,$iDpcia);																						
						$sTitulo = $oContenido->getTitulo();
                        $sContenido = $oContenido->getCotenido();
						$sFecha = $oContenido->getFecha();
                        $sDpcia = $oContenido->getDpcia();
						
                        echo $oContenido->getNavegacion();
					}*/
					
					?></a><!-- InstanceEndEditable -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <!-- Búsqueda Google -->
</div>
                    <div id="titulo_contenido"><a name="start" id="start"></a><!-- InstanceBeginEditable name="titulo" --><?php echo $sTitulo; ?><!-- InstanceEndEditable --></div>
                    <div id="texto_contenido">
                      <p><!-- InstanceBeginEditable name="cuerpo" -->
					  
					  <span style="float:right"><a onclick="ClickHereToPrint();" style="cursor:pointer"><img src="imagenes/ico/btn_imprimir.gif" width="21" height="21" border="0" alt="Imprimir" title="Imprimir" /></a></span>
                              <iframe id='ifrmPrint' src='#' style="width:0px; height:0px;"></iframe>

                              <div class="textoPies">
                                    <span class="titulo1">
                                <?
                                #$bolBndValido=0; #bandera que me indica si es valido el ID del contenido que estoy recibiendo
        
                                if ( isset($iTema))	#Valido si es contenido valido
                                {                                    					
                              ?></span>
                                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">							  
                                      <tr>
                                        <td class="textocontenido">
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                              <tr>
                                                <td valign="top"><table width="99%" border="0" align="center">
                                                    <tr>
                                                      <td colspan="2" class="textocontenido" align="justify">
                                                      <div id="divToPrint">
													  <?php
                                                      echo $tmp = str_replace('http://tema.php','http://pensiones.col.gob.mx/2010/tema.php',$sContenido);
                                                      #echo $sContenido;
                                                      
                                                      ?>
                                                      </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="2" class="textocontenido">&nbsp;</td>
                                                    </tr>																						
                                                    <tr>
                                                      <td colspan="2" class="textocontenido">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="2" class="textocontenido"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                          <tr>
                                                            <td><div align="right" class="style13"><span class="style10"> 
                                                            <b>Fuente de Informaci&oacute;n:</b></span> 
                                                            <span class="style14"><? echo ucwords(strtolower($sDpcia));?></span></div></td>
                                                          </tr>
                                                      </table></td>
                                                    </tr>
                                                    <tr>
                                                      <td height="10" colspan="2" class="textocontenido">&nbsp;</td>
                                                    </tr>
                                                </table></td>
                                              </tr>
                                        </table></td>
                                      </tr>
                                    </table>
                                <?
                                }
                                else
                                {                                    
                                    echo "<br><br>";
                                    $strLugImg="imagenes/ico/";	#Ubicacion donde se encuentran las imagenes de los bordes que generan la tabla
                                    $strMsg="No existe información";	#Mensaje de error
                                    $strImg="imagenes/error.png";	#Ubicacion y nombre de imagen que se usara en el mensaje
                                    aviso($strLugImg,$strMsg,$strImg);
                                }
                                ?>
                              </div>
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