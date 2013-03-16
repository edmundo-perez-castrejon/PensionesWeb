<?php 

$sUrl="http://www.colima-estado.gob.mx/cfg/menu.php";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$sUrl);
curl_setopt($ch,CURLOPT_HEADER,false);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$sMenu=curl_exec($ch);
$error=curl_error($ch);
curl_close($ch);


require_once('clases/php-captcha.inc.php');
require_once('funciones/funciones.php');


if (!isset($_POST['CampoEnvia'])) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/contenido.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Direcci&oacute;n de Pensiones de Gobierno del Estado de Colima</title>
<script language="javascript">
function Validar(form)
{
	with(document.form1){
		
		var strnombre= nombre.value.replace(/^\s*|\s*$/g,"");
		nombre.value=strnombre;
		if (nombre.value == "")
			{ alert("Por favor escriba nombre del usuario."); nombre.focus(); return; }
		var strsubject = subject.value.replace(/^\s*|\s*$/g,"");
		subject.value=strsubject;
		if (subject.value == "")
			{ alert("Por favor escriba el asunto."); subject.focus(); return; }
		
		if(codigo.value==''){
			alert('Es necesario escribir el código de validación.');codigo.focus(); return;
		}
		
		submit();
	}// with
}

function Limpiar(form)
{
	with(document.form1){
		
		nombre.value = "";
		subject.value = "";
		codigo.value ="";
		mail.value = "";
		textarea2.value = "";
		stel.value = "";
		
		return;
	}// with
}

function cambia()
{																		
	var d=new Date();
	document.getElementById("imgcaptcha").src= "clases/captcha.php?d="+d;
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
          			<div id="ruta_sitio"><a href="http://pensiones.col.gob.mx/2010/index.php"><strong>inicio</strong></a>  &nbsp;&nbsp;&nbsp; •  &nbsp; <!-- InstanceBeginEditable name="seccion" --><a href="#">cont&aacute;ctanos</a><!-- InstanceEndEditable -->   &nbsp;&nbsp;•    &nbsp;&nbsp;<!-- InstanceBeginEditable name="contenido" --><a href="#">contacto</a><!-- InstanceEndEditable -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <!-- Búsqueda Google -->
</div>
                    <div id="titulo_contenido"><a name="start" id="start"></a><!-- InstanceBeginEditable name="titulo" -->Si tienes alg&uacute;n comentario, sugerencia o duda  escr&iacute;benos, con gusto te atenderemos:<!-- InstanceEndEditable --></div>
                    <div id="texto_contenido">
                      <p><!-- InstanceBeginEditable name="cuerpo" -->
					  <form name="form1" method="post" action="contacto.php">
						  <table width="95%" border="0" align="center" cellpadding="1" cellspacing="1">
							<tr bgcolor="#FFFFFF">
							<td height="30" colspan="3" ><h4>Si tienes alg&uacute;n comentario, sugerencia o duda  escr&iacute;benos, con gusto te atenderemos:</h4>
							  <br />						   </td>
							<td >&nbsp;</td>
						  </tr>
							<tr >
							  <td width="14%" ><strong>Nombre:</strong></td>
							  <td width="86%"><input name="nombre" type="text" id="nombre" size="40">                              </td>
							</tr>
							<tr >
							  <td ><strong>e-mail:</strong></td>
							  <td ><input name="mail" type="text" id="mail" size="40">                              </td>
							</tr>
							<tr >
							  <td ><strong>Telefono:</strong></td>
							  <td ><label>
							    <input name="stel" type="text" id="stel" size="40" />
							  </label></td>
						    </tr>
							<tr >
							  <td ><strong>Asunto:</strong></td>
							  <td ><input name="subject" type="text" id="subject" size="40">                              </td>
							</tr>
							<tr >
							  <td valign="top" ><strong>Mensaje:</strong></td>
							  <td ><textarea name="mensaje" cols="45" rows="8" id="textarea2"></textarea>                              </td>
							</tr>
							<tr >
							  <td colspan="2"><table width="100%" border="0" cellspacing="1" cellpadding="0">
								  <tr>
									<td height="28" align="right"></td>
									<td align="left"><span class="titulonavegacion">Código de validación
										<input name="codigo" type="text" id="codigo" size="10" maxlength="6" />				    
										</span>
										<div id="lyrCap">
										<span><img src="clases/captcha.php" alt="Nuevo código de validación" name="imgcaptcha" border="0" id="imgcaptcha" style="cursor: pointer" title="Nuevo código de validación" onclick="cambia();"/>                    </span></div>
										<span >Haz click sobre la imágen para generar otro código. <br />
										</span>						</td>
								  </tr>
								  <tr>
								    <td height="28" align="right"></td>
								    <td align="left">&nbsp;</td>
							    </tr>
								  <tr>
									<td width="14%" height="28" align="right">                                    </td>
									<td width="86%" align="left"><img src="imagenes/btn/btn-enviarcoment.png" onClick="Validar(this.form)" title="Enviar" alt="Enviar" border="0" style="cursor: pointer" />
									<input name="CampoEnvia" type="hidden" id="CampoEnvia" value="1"><img src="imagenes/btn/btn-limpiarcoment.png" onClick="Limpiar(this.form)" id="BtnLimpiar" border="0" alt="Limpiar" title="Limpiar" style="cursor: pointer" />                                    </td>
								  </tr>
							  </table></td>
							</tr>
						  </table>
						</form>
					  
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
<?
}else{
	$cuerpo = "";
	$SMailFun="";
	#echo "ango".$_POST['codigo']."despues";
	if (!empty($_POST['codigo']) && PhpCaptcha::Validate(trim($_POST['codigo']))){
		
		#Capcha
		if(isset($_POST['opinion'])){
			$op = Limpiar($_POST['opinion']);		
		}else{
			$op = '';
		}

		#Mail
		
		if (isset($_POST['mail']) && !empty($_POST['mail']) && removeXss($_POST['mail'])==0){
			$mail=$_POST['mail'];	
		}else{
			$mail="";
		}
		
		#Nombre del remitente
		if (isset($_POST['nombre']) && !empty($_POST['nombre']) && removeXss($_POST['nombre'])==0){
			$nombre=$_POST['nombre'];	
		}else{
			$nombre="";	
		}
		
		#Mensaje
		if (isset($_POST['mensaje']) && !empty($_POST['mensaje']) && removeXss($_POST['mensaje'])==0){
			$mensaje=$_POST['mensaje'];	
		}else{
			$mensaje="";	
		}
		
		#Asunto
		if (isset($_POST['subject']) && !empty($_POST['subject']) && removeXss($_POST['subject'])==0){
			$asunto=$_POST['subject'];	
		}else{
			$asunto="";	
		}
		
		#Mail del funcionario
		if (isset($_POST['TxtMailFun']) && !empty($_POST['TxtMailFun']) && removeXss($_POST['TxtMailFun'])==0){
			$SMailFun=$_POST['TxtMailFun'];	
		}else{
			$SMailFun="";	
		}
		
		#Telefono
		if (isset($_POST['stel']) && !empty($_POST['stel']) && removeXss($_POST['stel'])==0){
			$telefono=$_POST['stel'];	
		}else{
			$telefono="";	
		}
			
		$cuerpo .= " " .$nombre . "\n"; 
		$cuerpo .= "\n"; 
		$cuerpo .= " " . $mensaje. "\n"; 							
		
		if(mail("dir_pensiones@prodigy.net.mx",$asunto,$cuerpo,"From: $mail")){
			?>
			<script language="javascript">
				alert('Gracias por escribirnos, pronto atenderemos tu mensaje. \nEn caso de que hayas ingresado alguna petición te contactaremos lo antes posible.');
				window.open("contacto.php","_self");
				//window.location='../contacto.php';
			</script>
		<?php
		}else{
		?>
				<script language="javascript">
					window.open("contacto.php","_self");
				</script>
		<?php
		}	

		
	}//codigo
	else {
		?>
			<script language="javascript">
				alert('Código de validación incorrecto, intentalo nuevamente por favor.');
				window.location='contacto.php';
			</script>
		<?php
		}
}//else
?>