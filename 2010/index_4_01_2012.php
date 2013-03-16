<?php 
$acentosNormal = array("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ü","Ü","ñ","Ñ","à","è","ì","ò","ù","À","È","Ì","Ò","Ù");
$acentosHTML = array("&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;","&uuml;","&Uuml;","&ntilde;","&Ntilde;","&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;");
//require_once('funciones/funciones.php');
$sUrl="http://www.colima-estado.gob.mx/cfg/menu.php";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$sUrl);
curl_setopt($ch,CURLOPT_HEADER,false);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$sMenu=curl_exec($ch);
$error=curl_error($ch);
curl_close($ch);

error_reporting(E_ALL);
session_start();
#Id de la dependencia pensiones
$iDpcia=190000;
$total_dias_mes = cal_days_in_month(CAL_GREGORIAN,intval(date("m")),date("Y"));
$fecha = date("Y")."-".date("m")."-".$total_dias_mes;
list($anio, $mes, $dias) = split('[/.-]', $fecha);

require_once('ws/lib/nusoap.php');
$client = new nusoap_client('http://www.colima-estado.gob.mx/ws/noticiaServer.php?wsdl', true);

#LLamado al WebService de Transparencia
#$Transp = new nusoap_client('http://www.colima-estado.gob.mx/ws/wsTransparencia.php?wsdl', true);

if ($sError = $client->getError()) {
	echo "No se pudo realizar la operación [".$sError."]";
	/*die();*/
}


$arrLstNot = $client->call("buscaNoticias", array("busca" => "", "dep" => $iDpcia, "maxReg" => 3));	#Noticia previa (regresa solo 1 registro)
$NotPre = $client->call("noticiaPre", array("fecha" => $fecha, "dep" => $iDpcia));

require_once('clases/sql.php');
require_once('clases/tema/contenido.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Direcci&oacute;n de Pensiones de Gobierno del Estado de Colima</title>

<link href="http://www.colima-estado.gob.mx/global_cfg/styles/main.css" rel="stylesheet" type="text/css" />
<link href="styles/variaciones/layout_variacion_icc.css" rel="stylesheet" type="text/css" />
<link href="styles/nav_vertical_icc.css" rel="stylesheet" type="text/css" />
<link href="styles/layout_icc_idx.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="http://www.colima-estado.gob.mx/js/mainmenu.js"></script>
<script type="text/javascript" src="js/menu_vertical_ie.js"></script>


<script language="javascript">
$(document).ready(function(){
	$('#btnConsulta').click(function(){
		$('#forma').submit();
	});
});
</script>
<script language="javascript">
function directorio(){
	window.open('http://148.235.70.104/moduloI/directoriointegralblanco.html?1','Directorio','width=1024,height=768,scrollbars=yes,top=100,left=120');
}
</script>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body>

	<div id="wrap">
    
    	<div id="header">
        		<div id="logo_administracion"><a href="http://www.colima-estado.gob.mx/"><img src="imagenes/ico/blank.gif" width="178" height="144" border="0" /></a></div>
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
                           
           <div id="area_contenido_idx">
                                <div id="banner_idx"><img src="imagenes/img/img_principal_pensiones.jpg" width="784" height="356" /></div>
                                    
				<!--inicio de primera fila de contenido   -->                
				<div id="linea_pal_idx">
                                
                                      <div id="box_opinion_idx">
                                        <div id="title_box_opinion_idx">Como Obtener un Cr&eacute;dito Hipotecario </div>
                                        <div class="txt_contenido_small" id="cuadro">
										<br />
										<ul>
											<li>- Que tenga Escrituras Originales de casa o terreno.</li>
											<li>- Una copia del Plano.</li>
											<li>- Constancias de alineamiento y No. Oficial.</li>
											<li>- Últimos recibos de agua y predial.<br />
											</li>											
										</ul>
										<a href="hipotecarios.php" class="txt_normal"><br />
									      Ver todos los requisitos</a>
										</div>
										
										<!--<p class="txt_contenido_small">¿ Cuanta importancia crees que le dan 
                                          las empresas colimenses a la calidad 
                                          en sus productos o servicios?</p>
                                        <p class="txt_contenido_small">
                                          <input type="radio" name="radio" id="radio" value="radio" />
                                          Mucha                   
                                          &nbsp;&nbsp;&nbsp;&nbsp; 
                                          <input type="radio" name="radio" id="radio2" value="radio" /> 
                                          Regular                       
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                          <input type="radio" name="radio" id="radio3" value="radio" /> 
                                          Poca</p>
                                        <p class="txt_contenido_small">
                                          <input type="submit" name="button" id="button" value="votar" />
                                        </p>-->
                                      </div>
                                        
                                        
                  <div id="box_autoevaluacion_idx">
											<div>Reglamento de Servicios M&eacute;dicos </div>
<a href="reglamento.php"></a>
											<span class="txt_contenido_small"><br />
											La Dirección de Pensiones del Estado, tiene, entre otras de sus facultades, la de administrar 
											los servicios médicos que se otorgan a los trabajadores adheridos a la Sección 39 del SNTE.										  </span>                                        <br />
                                            <br />
                                        <span><a class="txt_normal" href="reglamento.php">Ver reglamento</a></span> </div>
				  <div id="box_curso_idx">
												<div>Ley de Pensiones Civiles Para el Estado de Colima </div>
												<br />
												<span class="txt_contenido_small">Art. 1&ordm;.- Para los efectos que precisa esta Ley,   se crea un organismo descentralizado, denominado Direcci&oacute;n de Pensiones   del Estado. Esta Ley tiene aplicaci&oacute;n para los funcionarios y empleados...</span><br />
												<br />												
												<span class="txt_normal"><a href="legislacion.php" class="txt_normal">Ver Ley Completa </a></span> </div>
			 </div>
				 
            <!-- fin de la primera fila de contenido-->
             
             
             
            <!--Inicio de la segunda fila de contenido-->
             <div id="linea_pal2_idx">
                                    
               <div id="box_actividades_idx">
                 <div id="box_actividades_idx_title"><span class="titulos_secciones_blanco">
			 	 	<strong>Consulta tu saldo </strong></span>
				 </div>
                 
				  <div  id="listado_noticia_idx">
					<form id="forma" name="forma" method="post" action="http://pensiones.col.gob.mx/2010/servicios/login.php">
    					<table width="100%"  border="0" cellspacing="1" cellpadding="1">
    					  <tr>
    						<td bgcolor="#CCCCCC"><span class="style9"><strong>No. de Control:</strong></span></td>
    					  </tr>
    					  <tr>
    						<td><input name="txtusu" type="text" id="txtusu"></td>
    					  </tr>
    					  <tr>
    						<td bgcolor="#CCCCCC"><span class="style9 style13">  <strong>CURP o Clave:</strong></span></td>
    					  </tr>
    					  <tr>
    						<td><input name="txtpass" type="password" id="txtpass"></td>
    					  </tr>
    					  <tr>
    						<td><img src="imagenes/ico/ln-puntos1.gif" width="96" height="1"></td>
    					  </tr>
    					  <tr>
    					    <td bgcolor="#CCCCCC"><span class="style9 style13"> <strong>Dependencia:</strong></span></td>
    				      </tr>
    					  <tr>
    					    <td>
                            	<?php
								require_once('ws/lib/nusoap.php');
								#require_once("../nusoap/lib/nusoap.php");
								
								$iEntidad=0;
								if (isset($_GET['e']) && is_numeric($_GET['e']))
									$iEntidad=$_GET['e'];
				
								#$client = new soapclient('http://10.10.20.62/dirpensiones/dir_pensiones/rppc/ws_saldos.php?wsdl', true);	#local
								$client = new nusoap_client('http://dirpensiones.dyndns.org/nusoap/ws_saldos.php?wsdl', true);	#Server
								if ($sError = $client->getError()) {
									echo "No se pudo realizar la operación [" . $sError . "]";
									die();
								}
								$aEntidades = $client->call("entidades",array("cve"=>0));
								?>																					
								  <select name="dep" id="dep">
									<?									
									if (count($aEntidades)>0) {
										foreach($aEntidades as $iCve=>$sDes){
											if ($aEntidades[$iCve]['clave']==1)
												$sSel='selected="selected"';
											else
												$sSel='';
										?>
											<option <?=$sSel?> value="<?=$aEntidades[$iCve]['clave'];?>"><?=$aEntidades[$iCve]['descripcion']?></option>
										<?
										}
									}
									?>
								 </select>    						                                                              					
    						</td>
    				      </tr>
    					  <tr>
    						<td height="30"><br />&nbsp;
							<span id="btnConsulta" class="style1" style="background:#374D71; cursor:pointer;" align="right">&nbsp;CONSULTAR SALDO&nbsp; </span>
                            <p>&nbsp;Si tienes problemas para consultar tu saldo, comunicate al teléfono <strong>31 31698 Ext. 111</strong> de 08:30hrs a 15:00hrs. de Lunes a Viernes</p>
                            </td>
    					  </tr>
    				  </table>
                    </form>
				  </div>                         
                 <!--<div class="txt_contenido_small" id="listado_noticia_idx"><span class="txt_contenido_small_bold">Bosques del Sur tiene garantizado el suministro de agua</span>      15 de abril     </div>
				 <div class="txt_contenido_small" id="listado_noticia_idx"><span class="txt_contenido_small_bold">Entrega gobernador infraestructura vial </span>&nbsp;&nbsp;&nbsp;&nbsp; •   16 de abril</div>
				 <div class="txt_contenido_small" id="listado_noticia_idx"><span class="txt_contenido_small_bold">La calidad como priorodad en el plan estatal 2010-2015 </span>&nbsp;&nbsp;&nbsp;&nbsp; •   16 de abril</div>-->
                                                
              </div>
                                      
                                        
                    					<div id="box_banners_idx">
                                         			<div id="title_box_banners_idx">Como obtener un pr&eacute;stamo a corto plazo </div>
													
														
													    <div class="txt_contenido_small"> 	
														 
														    - Que cotice 6 meses   (minimo)&nbsp; para la   direcci&oacute;n de Pensiones.<br />
														     - Que tenga fondo   disponible &oacute;   en su caso que consiga  avales con disponibilidad para   prestarle.<br />
														     - El plazo m&aacute;ximo para   descontarle el pr&eacute;stamo es a 36    quincenas.<br />
														     - En caso de tener pr&eacute;stamo   anterior que haya cubierto   la  mitad del adeudo.
										                     <br />
									                         <br />
									                         <br />
									                         <a href="cortoplazo.php"><span class="txt_normal">Ver todos los requisitos</span></a> </div>
													   
                            		   				
											 
													    <!--
                                                    <img src="imagenes/bnr/bnr_mexico2010.jpg" />
                                                    <img src="imagenes/bnr/bnr_reformalaboral.jpg" />
                                                    <img src="imagenes/bnr/bnr_censo2010.jpg" />-->
                                                   
                                        </div> 
										
										
										 
             </div>                           
		</div>                  
      </div>
        
        
        <div id="footer">
        		<div id="escudo_gobierno_pie"></div>
                <div id="pie_left">
                        <div id="enlaces_pie"></div>
     					 	<div id="datos_pie" >Torres Quintero No. 156   CP 28000, Col.Centro Colima,Col. <a href="ubicacion.php"><img src="imagenes/ico/ico_ubicacion.png" alt="Ver Ubicación" border="0" style="cursor:pointer" title="Ver Ubicación" onclick="javascript:window.open('ubicacion.php','_self');" /></a>
                                contacto:dir_pensiones@prodigy.net.mx .
                                Teléfonos: 312 31 21116.
							</div>        
   		  </div>
        </div>
    
    </div>
<script type="text/javascript">qm_create(0,false,0,500,'lev2',false,false,false,true);</script>
</body>
</html>