<?php
session_start();

$iError=1;
//$UrlWebService='http://10.10.20.181:8081/ws/ws_saldos.php?wsdl';

if (isset($_SESSION['cioiap']) && isset($_SESSION['seraes']) && !empty($_SESSION['seraes']) && !empty($_SESSION['seraes'])){
	$sChkSes=sha1($_SESSION['cioiap']."P3nz1.nE$");	#Recibo los datos del usuario, y genero el SHA1
	if ($sChkSes==$_SESSION['seraes']) {	#Valido que los datos del usuario no ha sido alterados
		$aTemp=explode("-",$_SESSION['cioiap']);
		if (is_array($aTemp) && count($aTemp)==3) {	#Valido que traigo los datos completos del usuario
			$iNoControl=$aTemp[0];
			$iDep=$aTemp[1];
			$sCurp=$aTemp[2];
			
			$iError=0;
		}
	}
}

if($iError==1){
	$msg= "ES%20NECESARIO%20INICIAR%20SESION";
	header("Location: index.php?msg=.$msg");
}
 
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
<script type="text/javascript" src="../js/jquery.js"></script>
<script src="../js/jquery.min.js" type="text/javascript"></script>
<script src="../js/jquery.maskedinput.js" type="text/javascript"></script>

<script type="text/javascript">
jQuery(function($){
   $("#fechaNomb").mask("99/99/9999");  
   //$("#descuentos").mask("99.99");  
   //$("#descuentos").mask("99.99");  
});

</script>

<?php 
	function guardando(){
		return 1;
 	}
?>

<script language="javascript">
function avales(iFondo) {
	if (iFondo==2)
		document.getElementById("avales").style.display="block";
	if (iFondo==1)
		document.getElementById("avales").style.display="none";
}

function isNumberKey(evt)
{
	
	var charCode = (evt.which) ? evt.which : event.keyCode
	
	
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		{if (charCode == 46) return true; else return false;}
	return true;
}

function isBloquear(evt)
{
	//var charCode = (evt.which) ? evt.which : event.keyCode
	return false;
}


function isOnlyNumberKey(evt)
{
	
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}

function enviarDatos() {
	var d = document.frmCorto; 
	var	error = "" ;

	if (d.domicilio.value=="") 
		{error+="\n* El domicilio debe ser completado"};
	if (d.oficinaAds.value=="") 
		{error+="\n* La oficina de Adscripción debe ser completado"};
	if (d.fechaNomb.value=="") 
		{error+="\n* La fecha de último nombramiento debe ser completado"};
	if (d.oficinaSueldo.value=="") 
		{error+="\n* La oficina que cubre sus sueldos debe ser completado"};

	if (d.sueldo.value==0) 
		{error+="\n* Debe de proporcionar su sueldo mensual"};
	if (d.cantidad.value==0) 
		{error+="\n* Debe de proporcionar la cantidad que solicita"};
	if (d.quincenas.value==0) 
		{error+="\n* Debe de proporcionar el plazo para cubrir la cantidad solicitada"};
		
	if (d.fondo.value==2) 
		{
			var sumaCant =0;
			
			if (d.sNoConAv1.value>0){
				if (d.iCantidadAv1.value>0){ sumaCant=parseInt(sumaCant)+parseInt(d.iCantidadAv1.value);}
				
				if (d.sNoConAv1.value==d.sNoConAv2.value){
					if (d.sNoConAv1.value==d.sNoConAv2.value){
						error+="\n* Verifique la duplicidad del Aval No.1.";
					}
				}
				
				if (d.sNoConAv1.value==d.sNoConAv3.value){
					if (d.sNoConAv1.value==d.sNoConAv3.value){
						error+="\n* Verifique la duplicidad del Aval No.1.";
					}
				}
			}
			
			if (d.sNoConAv2.value>0){
				if (d.iCantidadAv2.value>0){ sumaCant=parseInt(sumaCant)+parseInt(d.iCantidadAv2.value);}
				if (d.sNoConAv2.value==d.sNoConAv1.value){
					if (d.sNoConAv2.value==d.sNoConAv1.value){
						error+="\n* Verifique la duplicidad del Aval No.2.";
					}
				}
				
				if (d.sNoConAv2.value==d.sNoConAv3.value){
					if (d.sNoConAv2.value==d.sNoConAv3.value){
						error+="\n* Verifique la duplicidad del Aval No.2.";
					}
				}
			}
			
			if (d.sNoConAv3.value>0){
				if (d.iCantidadAv3.value>0){ sumaCant=parseInt(sumaCant)+parseInt(d.iCantidadAv3.value);}
				
				if (d.sNoConAv3.value==d.sNoConAv1.value){
					if (d.sNoConAv3.value==d.sNoConAv1.value){
						error+="\n* Verifique la duplicidad del Aval No.3.";
					}
				}
				
				if (d.sNoConAv3.value==d.sNoConAv2.value){
					if (d.sNoConAv3.value==d.sNoConAv2.value){
						error+="\n* Verifique la duplicidad del Aval No.3.";
					}
				}	
			}
			
			
			if (d.cantidad.value>=sumaCant){
				error+="";
			}
			else{
				error+="\n* Verifique la suma de las cantidades avaladas no sea mayor a la cantidad solicitada por el empleado.";
			}
		}
		

	if (error!=""){ 
	 alert("Por favor verifique los siguientes detalles en el formulario:\t\t\t\n"+error); 
	}else{ 
		///alert(1);
		
		//$val
		var variableJscript = "<?php echo  guardando()?>";
		//alert(2);
		//alert (variableJscript);
		if (variableJscript>0) {
			//alert(3);
			d.submit(); 
			 //document.frmCorto.submit();
			//open("saldos.php","_self");	
		}
		else{
			//alert(4);
			alert('Error al guardar los datos');
		}
	}; 
}

</script>


<script type="text/javascript" language="javascript">
   var http_request = false;
   function makePOSTRequest(url, parameters,NumAval) {
      http_request = false;
      if (window.XMLHttpRequest) { // Mozilla, Safari,...
         http_request = new XMLHttpRequest();
         if (http_request.overrideMimeType) {
         	// set type accordingly to anticipated content type
            //http_request.overrideMimeType('text/xml');
            http_request.overrideMimeType('text/html');
         }
      } else if (window.ActiveXObject) { // IE
         try {
            http_request = new ActiveXObject("Msxml2.XMLHTTP");
         } catch (e) {
            try {
               http_request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {}
         }
      }
      if (!http_request) {
         alert('Cannot create XMLHTTP instance');
         return false;
      }
      
	  if (NumAval==1) {
		  http_request.onreadystatechange = UpdateAval1;
	  }
	  else if (NumAval==2){
		  http_request.onreadystatechange = UpdateAval2;
	  }
	  else if (NumAval==3){
		  http_request.onreadystatechange = UpdateAval3;
	  }
      
      http_request.open('POST', url, true);
      http_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      http_request.setRequestHeader("Content-length", parameters.length);
      http_request.setRequestHeader("Connection", "close");
      http_request.send(parameters);
   }

   function UpdateAval1() {
      if (http_request.readyState == 4) {
         if (http_request.status == 200) {
            //alert(http_request.responseText);
            result = http_request.responseText;
            document.getElementById('DivAval1').innerHTML = result;            
         } else {
            alert('There was a problem with the request.');
         }
      }
   }
   
   function UpdateAval2() {
      if (http_request.readyState == 4) {
         if (http_request.status == 200) {
            //alert(http_request.responseText);
            result = http_request.responseText;
            document.getElementById('DivAval2').innerHTML = result;            
         } else {
            alert('There was a problem with the request.');
         }
      }
   }
   
   function UpdateAval3() {
      if (http_request.readyState == 4) {
         if (http_request.status == 200) {
            //alert(http_request.responseText);
            result = http_request.responseText;
            document.getElementById('DivAval3').innerHTML = result;            
         } else {
            alert('There was a problem with the request.');
         }
      }
   }
   
   function getNomUsuario(obj,NumAval) {
      var poststr = "";
					
					 if (NumAval==1) {
						  poststr = "idEmpleado=" + encodeURI( document.getElementById("sNoConAv1").value ) +
						"&idDependencia=" + encodeURI( document.getElementById("depAval1").value ) +
						"&numAval=1";
						
						var combo1 = document.getElementById("depAval1");
						document.getElementById("sNombreDep1").value= combo1.options[combo1.selectedIndex].text;
						
					  }
					  else if (NumAval==2){
						  poststr = "idEmpleado=" + encodeURI( document.getElementById("sNoConAv2").value ) +
						"&idDependencia=" + encodeURI( document.getElementById("depAval2").value ) +
						"&numAval=2";
						
						var combo2 = document.getElementById("depAval2");
						document.getElementById("sNombreDep2").value= combo2.options[combo2.selectedIndex].text;
						
					  }
					  else if (NumAval==3){
						  poststr = "idEmpleado=" + encodeURI( document.getElementById("sNoConAv3").value ) +
						"&idDependencia=" + encodeURI( document.getElementById("depAval3").value ) +
						"&numAval=3";
						
						var combo3 = document.getElementById("depAval3");
						document.getElementById("sNombreDep3").value= combo3.options[combo3.selectedIndex].text;
						
					  }
	  
					
					
      makePOSTRequest('getdausuario.php', poststr,NumAval);
   }
</script>


<!-- InstanceEndEditable -->
<link href="../styles/main.css" rel="stylesheet" type="text/css" />
<link href="../styles/variaciones/layout_variacion_icc.css" rel="stylesheet" type="text/css" />
<link href="../styles/nav_vertical_icc.css" rel="stylesheet" type="text/css" />
<link href="../styles/layout_icc_int.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://www.colima-estado.gob.mx/js/mainmenu.js"></script>
<script type="text/javascript" src="../js/menu_vertical_ie.js"></script>
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style2 {color: #000000}
.style5 {color: #000000; font-weight: bold; }
.style6 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
<!-- InstanceEndEditable -->
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
          			<div id="ruta_sitio"><a href="http://pensiones.col.gob.mx/2010/index.php"><strong>inicio</strong></a>  &nbsp;&nbsp;&nbsp; •  &nbsp; <!-- InstanceBeginEditable name="seccion" --><a href="saldos.php">Servicios</a><!-- InstanceEndEditable -->   &nbsp;&nbsp;•    &nbsp;&nbsp;<!-- InstanceBeginEditable name="contenido" --><a href="#">Pr&eacute;stamo a corto plazo</a><!-- InstanceEndEditable -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <!-- Búsqueda Google -->
</div>
                    <div id="titulo_contenido"><a name="start" id="start"></a><!-- InstanceBeginEditable name="titulo" -->Formato de pr&eacute;stamo a corto plazo.<!-- InstanceEndEditable --></div>
                    <div id="texto_contenido">
                      <p><!-- InstanceBeginEditable name="cuerpo" -->
					  <?php
						$iClave = 0;											
													
						require_once("../ws/lib/nusoap.php");
						require_once("clases/conexcionws.php");
					
						#$client = new soapclient('http://10.10.20.62/dirpensiones/dir_pensiones/rppc/ws_saldos.php?wsdl', true);	#local
						#http://10.10.20.181:8081/ws/ws_saldos.php?wsdl
						##$client = new nusoap_client($UrlWebService, true);	#Server
						#$client = new nusoap_client('http://10.10.20.181:8081/ws/ws_saldos.php?wsdl', true);	#Server
						$client = new nusoap_client('http://dirpensiones.dyndns.org/nusoap/ws_saldos.php?wsdl', true);	#Server
						if ($sError = $client->getError()) {
							echo "No se pudo realizar la operación [" . $sError . "]";
							die();
						}
						
						
						##### Datos EMPLEADO									
						$aInfoEmpleado= $client->call("infoEmpleado",array("curp"=>trim($sCurp),"noControl"=>trim($iNoControl)));
						#echo $iNoControl;
						#print_r($aInfoEmpleado);
						$iClave = $aInfoEmpleado['clave'];
						$sTipoTrabajador = $aInfoEmpleado['tipoTrabajador'];
						$sNombre = $aInfoEmpleado['nombre'];								
						$sDomicilio = $aInfoEmpleado['domicilio'];							
						$sFechaIng = $aInfoEmpleado['fechaIng'];							
						$sDependencia = $aInfoEmpleado['dependencia'];
						$sPuesto = $aInfoEmpleado['puesto'];
						##### Fin EMPLEADO
															
						###### Calculo ADEUDOS Corto Plazo #####
						$aAdeudoCP= $client->call("adeudo",array("curp"=>$sCurp,"noControl"=>$iNoControl));
						$iAdeudo = $aAdeudoCP['adeudo'];
						$sFechaAbono = $aAdeudoCP['fechaAbo'];
						$iQuincFaltan = $aAdeudoCP['quincenas'];
						#### Fin ADEUDOS Corto Plazo
						
						##### Consulta FONDO
						$aFondo= $client->call("fondo",array("curp"=>$sCurp,"noControl"=>$iNoControl));
						$iFondo = $aFondo['fondo'];
						##### Fin FONDO														
						
						##### Datos AVALADOS CP
						#$iAvalado=0;
						if (isset($iClave) && is_numeric($iClave)) {
							$aValados = $client->call("avalados",array("clave"=>$iClave,"noControl"=>$iNoControl));							
						}														
						##### Fin AVALADOS CP
						
						###### Calculo ADEUDOS PH #####
						$iQuinPendH=0;
						$iPrestamoH=0;
						if (isset($iClave) && is_numeric($iClave)) {
							$aAdeudoHip= $client->call("adeudoHip",array("clave"=>$iClave,"noControl"=>$iNoControl));								
							$iQuinPendH=$aAdeudoHip['quincenas'];
							$iPrestamoH=$aAdeudoHip['adeudo'];
						}
						#### Fin ADEUDOS PH
						
						###### Calculo SEGURO PH #####
						$iQuinSeguro=0;
						$iSaldoSeguro=0;
						if (isset($iClave) && is_numeric($iClave)) {
							$aSeguroHip= $client->call("seguroHip",array("clave"=>$iClave,"noControl"=>$iNoControl));								
							$iQuinSeguro=$aSeguroHip['quincenas'];
							$iSaldoSeguro=$aSeguroHip['adeudo'];
						}
						#### Fin SEGURO PH
						
						####Total Avalado
						$iAvalado=0;
						if (isset($aValados) && count($aValados)>0)
						foreach ($aValados as $iInd=>$sTemp){														
							$iAvalado+=$aValados[$iInd]["avalado"]-$aValados[$iInd]["pagado"];
						}
						
						### Fondo Disponible
						$iFondoTem=$iFondo-($iAdeudo+$iAvalado);
						if ($iFondoTem<0)
							$iFondoDis=0;
						else
							$iFondoDis=$iFondoTem;
						?>
						<table width="100%"  border="0" cellspacing="0" cellpadding="0">
						  <tr>
						    <td><span class="style6">Por seguridad te recomendamos que cambies o asignes una clave (contrase&ntilde;a) para evitar que cualquier persona que conozca tu CURP pueda accesar a ver tu informaci&oacute;n. </span></td>
					      </tr>
						  <tr>
						    <td>&nbsp;</td>
					      </tr>
						  <tr>
							<td><div align="center">
					        <p class="titulo_bold_negro"><span class="submenu">
					          <?php
						$iClave = 0;
													
						require_once("../ws/lib/nusoap.php");
						require_once("clases/conexcionws.php");
					
						#$client = new soapclient('http://10.10.20.62/dirpensiones/dir_pensiones/rppc/ws_saldos.php?wsdl', true);	#local
						
						#$client = new nusoap_client($UrlWebService, true);	#Server
						$client = new nusoap_client('http://dirpensiones.dyndns.org/nusoap/ws_saldos.php?wsdl', true);	#Server
						
						if ($sError = $client->getError()) {
							echo "No se pudo realizar la consulta [" . $sError . "]";
							die();
						}
						
						##### Datos EMPLEADO
						$aInfoEmpleado= $client->call("infoEmpleado",array("curp"=>$sCurp,"noControl"=>$iNoControl));
						#$iClave = $aInfoEmpleado['clave'];
						$sTipoTrabajador = $aInfoEmpleado['tipoTrabajador'];
						$sNombre = $aInfoEmpleado['nombre'];								
						$sDomicilio = $aInfoEmpleado['domicilio'];							
						$sFechaIng = $aInfoEmpleado['fechaIng'];							
						$sDependencia = $aInfoEmpleado['dependencia'];
						$sPuesto = $aInfoEmpleado['puesto'];
						$sTelefono = $aInfoEmpleado['telefono'];
						##### Fin EMPLEADO						
						?>
				            DATOS GENERALES</span></p>
							    <form action="grabar_ticket.php" method="post" name="frmCorto" target="_parent" id="frmCorto">
							      <table width="100%" border="0" cellspacing="1" cellpadding="1" align="left">
							        <tr></tr>
							        <tr>
							          <td width="28%" class="textoPies"><div align="right">Nombre:</div></td>
							          <td width="72%" align="left"><input name="nombre" type="text" id="nombre" size="40" maxlength="100" value="<?php echo $sNombre?>" readonly="readonly"/>
							            <input name="iFicha" type="hidden" id="iFicha" value="<?php echo $iNoControl?>" /></td>
						            </tr>
							        <tr>
							          <td class="textoPies"><div align="right">Domicilio:</div></td>
							          <td  align="left"><textarea name="domicilio" cols="40" rows="2" id="domicilio" style="text-transform:uppercase;"><?php echo $sDomicilio?>
                              </textarea></td>
						            </tr>
							        <tr>
							          <td class="textoPies"><div align="right">Tel&eacute;fono:</div></td>
							          <td  align="left"><input name="telefono" type="text" id="telefono" size="40" maxlength="60" value="<?php echo $sTelefono?>" readonly="readonly"/></td>
						            </tr>
							        <tr>
							          <td class="textoPies"><div align="right">Lugar:</div></td>
							          <td  align="left"><input name="lugar" type="text" id="lugar" size="40" maxlength="80" value="<?php #$sLugar?>" readonly="readonly"/></td>
						            </tr>
							        <tr>
							          <td class="textoPies"><div align="right">Empleo(s) que desempe&ntilde;a </div></td>
							          <td  align="left"><input name="puesto" type="text" id="puesto" size="40" maxlength="70" value="<?php echo $sPuesto?>" readonly="readonly"/></td>
						            </tr>
							        <tr>
							          <td class="textoPies"><div align="right">Fecha de ingreso al servicio </div></td>
							          <td  align="left"><input name="fechaIng" type="text" id="fechaIng" size="14" maxlength="12" value="<?php echo $sFechaIng?>" readonly="readonly"/>							            
						              (DD/MM/AAAA)</td>
						            </tr>
							        <tr>
							          <td class="textoPies"><div align="right">Oficina de Adscripci&oacute;n </div></td>
							          <td  align="left"><input name="oficinaAds" type="text" id="oficinaAds" size="40" maxlength="80" style="text-transform:uppercase;"/></td>
						            </tr>
							        <tr>
							          <td class="textoPies"><div align="right">Dependencia</div></td>
							          <td  align="left"><input name="dependencia" type="text" id="dependencia" size="40" maxlength="80" value="<?php echo $sDependencia?>" readonly="readonly"/></td>
						            </tr>
							        <tr>
							          <td class="textoPies"><div align="right">Fecha de &uacute;ltimo nombramiento </div></td>
							          <td  align="left"><input name="fechaNomb" type="text" id="fechaNomb" size="14" maxlength="12" />
							            (DD/MM/AAAA)</td>
						            </tr>
							        <tr>
							          <td class="textoPies"><div align="right">Oficina que cubre sus sueldos </div></td>
							          <td  align="left"><input name="oficinaSueldo" type="text" id="oficinaSueldo" size="40" maxlength="90" style="text-transform:uppercase;"/></td>
						            </tr>
							        <tr>
							          <td class="textoPies"><div align="right">Sueldo Mensual </div></td>
							          <td  align="left"><input name="sueldo" type="text" id="sueldo" size="14" maxlength="14" onkeypress="return isNumberKey(event)"/></td>
						            </tr>
							        <tr>
							          <td class="textoPies"><div align="right">Descuentos que se le hacen </div></td>
							          <td  align="left"><input name="descuentos" type="text" id="descuentos" size="14" maxlength="10" onkeypress="return isNumberKey(event)"/></td>
						            </tr>
							        <tr>
							          <td class="textoPies"><div align="right">Cantidad que solicita </div></td>
							          <td  align="left"><input name="cantidad" type="text" id="cantidad" size="14" maxlength="12" onkeypress="return isNumberKey(event)"/></td>
						            </tr>
							        <tr>
							          <td class="textoPies"><div align="right">Plazo para cubrirla (en quincenas) </div></td>
							          <td  align="left"><input name="quincenas" type="text" id="quincenas" size="4" maxlength="2" onkeypress="return isOnlyNumberKey(event)"/></td>
						            </tr>
							        <tr>
							          <td><div align="right"><span class="textoPies">Fondo</span>:</div></td>
							          <td  align="left"><select name="fondo" size="1" id="fondo" onchange="avales(this.value);">
							            <option value="1" selected="selected">Fondo Propio</option>
							            <option value="2">Con Aval</option>
							            </select></td>
						            </tr>
							        <tr>
							          <td colspan="2">&nbsp;</td>
						            </tr>
							        <tr>
							          <td colspan="2"><div id="avales" style="display:none; border-color:#CCC; border-width:thin; border-style:none">
							            <table width="100%" border="0" cellspacing="1" cellpadding="0">
							              <tr>
							                <td colspan="2"><div align="center" class="submenu">
							                  <?php
										require_once('../ws/lib/nusoap.php');
										require_once("clases/conexcionws.php");
										#require_once("../nusoap/lib/nusoap.php");
										
										$iEntidad=0;
										if (isset($_GET['e']) && is_numeric($_GET['e']))
											$iEntidad=$_GET['e'];
						
										$client = new nusoap_client($UrlWebService, true);	#Server
										if ($sError = $client->getError()) {
											echo "No se pudo realizar la operaci&oacute;n [" . $sError . "]";
											die();
										}
										$aEntidades = $client->call("entidades",array("cve"=>0));
										?>
						                    AVALES</div>
                                            
                                            </td>
                                             										  	
                                            
						                  </tr>
                                          
                                          <tr>
											 							
											</tr>
                                            
                                          <tr>
							                <td width="20%" class="textoPies"></td>
							                <td width="80%" align="left"></td>
						                  </tr>
                                          <tr>
							                <td width="20%" class="textoPies"></td>
							                <td width="80%" align="left"><div align="left">AVAL No.1. </div><div id="DivAval1"></div></td>
						                  </tr>
							              <tr>
							                <td width="20%" class="textoPies"><div align="right">No Control: </div></td>
							                <td width="80%" align="left"><input name="sNoConAv1" type="text" id="sNoConAv1" size="6" maxlength="6" onChange="javascript:getNomUsuario(this.parentNode,1);" onkeypress="return isOnlyNumberKey(event)"/></td>
						                  </tr>
							              <tr>
							                <td class="textoPies"><div align="right">Dependencia:</div></td>
							                <td align="left"><select name="depAval1" id="depAval1" onChange="javascript:getNomUsuario(this.parentNode,1);">
							                  <?php
											#echo $iEntidad;				
											if (count($aEntidades)>0) {
												foreach($aEntidades as $iCve=>$sDes){
													if ($aEntidades[$iCve]['clave']==1)
														$sSel='selected="selected"';
													else
														$sSel='';
												?>
							                  <option <?php echo $sSel?> value="<?php echo $aEntidades[$iCve]['clave'];?>">
							                    <?php echo $aEntidades[$iCve]['descripcion']?>
						                      </option>
							                  <?php
												}
											}
											?>
						                    </select><input name="sNombreDep1" id="sNombreDep1" type="hidden" value="" readonly="readonly"></td>
						                  </tr>
                                          
                                          
							              <tr>
							                <td class="textoPies"><div align="right">Cantidad Avalada </div></td>
							                <td align="left"><input name="iCantidadAv1" type="text" id="iCantidadAv1" size="7" maxlength="8" onkeypress="return isNumberKey(event)"/></td>
						                  </tr>
							              <tr>
							                <td class="textoPies"><div align="right">Domicilio</div></td>
							                <td align="left"><input name="sDomAv1" type="text" id="sDomAv1" size="50" maxlength="150" /></td>
						                  </tr>
							              <tr>
							                <td class="textoPies"><div align="right"></div></td>
							                <td>&nbsp;</td>
						                  </tr>
                                          <tr>
							                <td class="textoPies">&nbsp;</td>
							                <td align="left"><div align="left">AVAL No.2. </div><div id="DivAval2"></div></td>
						                  </tr>
							              <tr>
							                <td class="textoPies"><div align="right">No Control:</div></td>
							                <td width="80%" align="left"><input name="sNoConAv2" type="text" id="sNoConAv2" size="6" maxlength="6" onchange="javascript:getNomUsuario(this.parentNode,2)" onkeypress="return isOnlyNumberKey(event)" /></td>
						                  </tr>
							              <tr>
							                <td class="textoPies"><div align="right">Dependencia: </div></td>
							                <td align="left"><select name="depAval2" id="depAval2" onchange="javascript:getNomUsuario(this.parentNode,2)">
							                  <?php
											#echo $iEntidad;				
											if (count($aEntidades)>0) {
												foreach($aEntidades as $iCve=>$sDes){
													if ($aEntidades[$iCve]['clave']==1)
														$sSel='selected="selected"';
													else
														$sSel='';
												?>
							                  <option <?php echo $sSel?> value="<?php echo $aEntidades[$iCve]['clave'];?>">
							                    <?php echo $aEntidades[$iCve]['descripcion']?>
						                      </option>
							                  <?php
												}
											}
											?>
						                    </select><input name="sNombreDep2" id="sNombreDep2" type="hidden" value="" readonly="readonly"></td>
						                  </tr>
							              <tr>
							                <td class="textoPies"><div align="right">Cantidad Avalada </div></td>
							                <td align="left"><input name="iCantidadAv2" type="text" id="iCantidadAv2" size="7" maxlength="8" onkeypress="return isNumberKey(event)"/></td>
						                  </tr>
							              <tr>
							                <td class="textoPies"><div align="right">Domicilio</div></td>
							                <td align="left"><input name="sDomAv2" type="text" id="sDomAv2" size="50" maxlength="150" /></td>
						                  </tr>
							              <tr>
							                <td class="textoPies">&nbsp;</td>
							                <td><div align="right"></div></td>
						                  </tr>	
                                          <tr>
							                <td class="textoPies">&nbsp;</td>
							                <td align="left"><div align="left">AVAL No.3. </div><div id="DivAval3"></div></td>
						                  </tr>							             
							              <tr>
							                <td class="textoPies"><div align="right">No Control: </div></td>
							                <td align="left"><input name="sNoConAv3" type="text" id="sNoConAv3" size="6" maxlength="6" onchange="javascript:getNomUsuario(this.parentNode,3)" onkeypress="return isOnlyNumberKey(event)"/></td>
						                  </tr>
                                          <tr>
							                <td class="textoPies"><div align="right">Dependencia: </div></td>
							                <td align="left"><select name="depAval3" id="depAval3" onchange="javascript:getNomUsuario(this.parentNode,3)">
							                  <?php
											#echo $iEntidad;				
											if (count($aEntidades)>0) {
												foreach($aEntidades as $iCve=>$sDes){
													if ($aEntidades[$iCve]['clave']==1)
														$sSel='selected="selected"';
													else
														$sSel='';
												?>
							                  <option <?php echo $sSel?> value="<?php echo $aEntidades[$iCve]['clave'];?>">
							                    <?php echo $aEntidades[$iCve]['descripcion']?>
						                      </option>
							                  <?php
												}
											}
											?>
						                    </select><input name="sNombreDep3" id="sNombreDep3" type="hidden" value="" readonly="readonly"></td>
						                  </tr>
                                          <tr>
							                <td class="textoPies"><div align="right">Cantidad Avalada </div></td>
							                <td align="left"><input name="iCantidadAv3" type="text" id="iCantidadAv3" size="7" maxlength="8" onkeypress="return isNumberKey(event)"/></td>
						                  </tr>
							              <tr>
							                <td class="textoPies"><div align="right">Domicilio</div></td>
							                <td align="left"><input name="sDomAv3" type="text" id="sDomAv3" size="50" maxlength="150" /></td>
						                  </tr>
                                          <tr>
							                <td class="textoPies"><div align="right"></div></td>
							                <td>&nbsp;</td>
						                  </tr>
						                </table>
                                        
						              </div></td>
						            </tr>
							        <tr>
							          <td height="45" colspan="2"><div align="center">
							            <input name="btnGenera" type="button" id="btnGenera" onclick="enviarDatos()" value="Generar Formato" />
							            </div></td>
						            </tr>
						          </table>
					          </form>
						      </div></td>
						  </tr>
						</table>
						<p align="center" class="txt_normal"><a href="cerrar_sesion.php" class="txt_normal"><strong>Cerrar Sesi&oacute;n</strong></a>&nbsp;&nbsp; <strong>|</strong> &nbsp;<strong> <a href="clave.php" class="txt_normal">Asignar o Cambiar Clave</a>&nbsp;&nbsp; | &nbsp; <a href="saldos.php" class="txt_normal">Saldos</a> <br> 
					        <a href="corto.php" class="txt_normal">Pr&eacute;stamo Corto Plazo</a>&nbsp; |&nbsp; <a href="hipotecario.pdf" target="_blank" class="txt_normal">Pr&eacute;stamo Hipotecario</a>&nbsp; |&nbsp; <a href="simulador.php" class="txt_normal">Simulador</a> </strong></p>
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
          						Torres Quintero No. 156   CP 28000, Col.Centro Colima,Col. <a href="../ubicacion.php"><img src="../imagenes/ico/ico_ubicacion.png" alt="Ver Ubicación" border="0" style="cursor:pointer" title="Ver Ubicación" onclick="javascript:window.open('ubicacion.php','_self');" /></a>
                                contacto:dir_pensiones@prodigy.net.mx.
                                Teléfonos: 312 31 21116.
							</div>   
        </div>
      </div>
</div>
	<script type="text/javascript">qm_create(0,false,0,500,'lev2',false,false,false,true);</script>
</body>
<!-- InstanceEnd --></html>