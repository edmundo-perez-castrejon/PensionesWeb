<?php
/**
* Funcion Anti-Spam
* Creo un array de 1 elemento en el caso de encontrar el texto que genera spam como lo es
* From:, from:, FROM:, CC:,cc:, BCC:, bcc:, to:, TO:, Content-Type:, content-type: 
* \n, \\n, \r, \\r, %0A, %0D, <LF>,
*/
function validaSpam($strText)
{
	$sText=strtolower($strText);
	$intErr1=count(explode("content-type:",$sText,2));
	$intErr3=count(explode("to:",$sText,2));
	$intErr6=count(explode("cc:",$sText,2));
	$intErr9=count(explode("bcc:",$sText,2));
	$intErr13=count(explode("from:",$sText,2));
	$intErr15=count(explode("%0a",$sText,2));
	$intErr16=count(explode("%0d",$sText,2));
	$intErr17=count(explode("\\r",$sText,2));
	$intErr18=count(explode("\\n",$sText,2));
	$intErr19=count(explode("<lf>",$sText,2));
	
	if ($intErr1>1|$intErr3>1|$intErr6>1|$intErr9>1|$intErr9>1|$intErr13>1||$intErr15>1|$intErr16>1|$intErr17>1|$intErr18>1|$intErr19>1)
		return $intError=1;
	else
		return $intError=0;
}

/**
* Funcion: Validar el formato de una direccion de correo electronico
*/
function emailValido($email)
{
	$mail_correcto = 0;
    //compruebo unas cosas primeras
    if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){
       if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," ")) && (!strstr($email,"/"))) {
          //miro si tiene caracter .
          if (substr_count($email,".")>= 1){
             //obtengo la terminacion del dominio
             $term_dom = substr(strrchr ($email, '.'),1);
             //compruebo que la terminación del dominio sea correcta
             if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){
                //compruebo que lo de antes del dominio sea correcto
                $antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1);
                #$aNoValido=array("-","!","|","#","\"","$")
				$caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1);
                if ($caracter_ult != "@" && $caracter_ult != "."){
                   $mail_correcto = 1;
                }
             }
          }
       }
    }
	return  $mail_correcto;
}

#Funcion para evitar XSS
function removeXss($val) {
   // remove all non-printable characters. CR(0a) and LF(0b) and TAB(9) are allowed
   // this prevents some character re-spacing such as <java\0script>
   // note that you have to handle splits with \n, \r, and \t later since they *are* allowed in some inputs
   $sOriginal = $val;
   
   $val = preg_replace('/([\x00-\x08][\x0b-\x0c][\x0e-\x20])/', '', $val);
   
   // straight replacements, the user should never need these since they're normal characters
   // this prevents like <IMG SRC=&#X40&#X61&#X76&#X61&#X73&#X63&#X72&#X69&#X70&#X74&#X3A&#X61&#X6C&#X65&#X72&#X74&#X28&#X27&#X58&#X53&#X53&#X27&#X29>
   $search = 'abcdefghijklmnopqrstuvwxyz';
   $search .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $search .= '1234567890!@#$%^&*()';
   $search .= '~`";:?+/={}[]-_|\'\\';
   for ($i = 0; $i < strlen($search); $i++) {
      // ;? matches the ;, which is optional
      // 0{0,7} matches any padded zeros, which are optional and go up to 8 chars
      // &#x0040 @ search for the hex values
      $val = preg_replace('/(&#[x|X]0{0,8}'.dechex(ord($search[$i])).';?)/i', $search[$i], $val); // with a ;
      // &#00064 @ 0{0,7} matches '0' zero to seven times
      $val = preg_replace('/(&#0{0,8}'.ord($search[$i]).';?)/', $search[$i], $val); // with a ;
   }
   
   // now the only remaining whitespace attacks are \t, \n, and \r
   $ra1 = Array('javascript', 'vbscript', 'expression', 'applet', 'meta', 'xml', 'blink', 'link', 'style', 'script', 'embed', 'object', 'iframe', 'frame', 'frameset', 'ilayer', 'layer', 'bgsound', 'title', 'base');
   $ra2 = Array('onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterchange', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload');
   $ra = array_merge($ra1, $ra2);
   
   $found = true; // keep replacing as long as the previous round replaced something
   while ($found == true) {      
      $val_before = $val;
	  for ($i = 0; $i < sizeof($ra); $i++) {
         $pattern = '/';
         for ($j = 0; $j < strlen($ra[$i]); $j++) {
            if ($j > 0) {
               $pattern .= '(';
               $pattern .= '(&#[x|X]0{0,8}([9][a][b]);?)?';
               $pattern .= '|(&#0{0,8}([9][10][13]);?)?';
               $pattern .= ')?';
            }
            $pattern .= $ra[$i][$j];
         }
         $pattern .= '/i';
         $replacement = substr($ra[$i], 0, 2).'<x>'.substr($ra[$i], 2); // add in <> to nerf the tag
         $val = preg_replace($pattern, $replacement, $val); // filter out the hex tags
         if ($val_before == $val) {
            // no replacements were made, so exit the loop
            $found = false;
         }
      }
   }
   
   if ($sOriginal == $val)	#Valida si se encontro algun caracter no valido
   		return $iError=0;
   else
		return $iError=1;
}

function validaSesion($sSesion) {	#Funcion para validar Sesion
	#require_once("sql.php");	//Manda llamar el archivo de conexion
	$iUsuario=0;
	
	$objQry=new sqlQry;
	//la variable $lista consulta todos los empleados
	$sTabla="sesiones s, usuarioz u";
	$sCampos="s.idUser, u.usuario,s.idSesion";
	$sCriterio="WHERE s.sesionid='".$sSesion."' AND s.idUser=u.idUsuario ORDER BY fechaSesion LIMIT 1";
	$iRs=$objQry->buscar($sTabla,$sCampos,$sCriterio);
	
	if ($iRs > 0 && mysql_num_rows($iRs)>0) {	//Valido si la consulta no me regresa registros
		$aDatos=mysql_fetch_row($iRs);
		$sSesionId=sha1(date('dYm').$aDatos[0].$aDatos[1].'R.4:p.u31;');	#Genero la Sesion
		$sTablaSes="sesiones";
		$sDatosSes="sesionid='".$sSesionId."', fechaSesion='".date("Y-m-d H:i:s")."'";
		$sCriterioSes="WHERE idSesion=".$aDatos[2];
		$iRsSesion=$objQry->actualizar($sTablaSes,$sDatosSes,$sCriterioSes);
		return $iUsuario=$aDatos[0];
	}
	else
		return $iUsuario;
}

/**
Funcion redimensionaImg
Crea una imagen redimensionada de otra imagen.
imgAct: Nombre de la imagen actual.
imgNueva: Nombre nuevo de la imagen. (Puede ser el mismo)
iAlto: Alto de la nueva imagen (Numero entero)
iAncho: Ancho de la nueva imagen (Numero entero)
sDirImg: Directorio donde se encuentra la imagen a redimensionar
sDirImgRed: Directorio donde se guardara la nueva imagen (Puede ser el mismo)
**/
function redimensionaImg($imgAct,$imgNueva,$iAncho,$iAlto) 
{
	#$sImgOrigen=$sDirImg.$imgAct;
	#$sImgNuevaDest=$sDirImgRed.$imgNueva;
	
	$aImg=getimagesize($imgAct);	#Obtengo la Informacion de la Imagen	
	switch ($aImg[2]){	#Creo la imagen segun el tipo
		case 1: 
			$img = imagecreatefromgif($imgAct);
			$sContenido="image/gif";
			$sTipoImg="GIF";		#Obtengo el tipo de Imagen			
			break;
		case 2: 
			$img = imagecreatefromjpeg($imgAct);
			$sContenido="image/jpeg";
			$sTipoImg="JPG";		#Obtengo el tipo de Imagen			
			break;		
		case 3:
			$img = imagecreatefrompng($imgAct);
			$sContenido="image/png";
			$sTipoImg="PNG";		#Obtengo el tipo de Imagen			
			break;
		default:
			$iErrorImg=1;
	}
	
	$iAnchoAct = imagesx($img);		#Ancho acutal de la imagen
	$iAltoAct = imagesy($img);		#Alto acutal de la imagen
	$scale = min($iAncho/$iAnchoAct, $iAlto/$iAltoAct);
	$iAnchoNew = floor($scale*$iAnchoAct);	#Ancho nuevo de la Imagen
	$iAltoNew = floor($scale*$iAltoAct);	#Nueva Altura de la imagen
	
	//creamos una imagen temporal
	$tmp_img = imagecreatetruecolor($iAnchoNew, $iAltoNew);
	
	//obtenemos el 100% de la imagen original y la asignamos a la temporal ya redimensionada       
	imagecopyresampled($tmp_img, $img, 0, 0, 0, 0,$iAnchoNew, $iAltoNew, $iAnchoAct, $iAltoAct);
	
	if (isset($sTipoImg) && $sTipoImg=="JPG")
		imagejpeg($tmp_img,$imgNueva); 	#Se Guarda la imagen en formato JPG con el nombre y en el directorio indicado
	if (isset($sTipoImg) && $sTipoImg=="GIF")
		imagegif($tmp_img,$imgNueva); 		#Se Guarda la imagen en formato GIF con el nombre y en el directorio indicado
	if (isset($sTipoImg) && $sTipoImg=="PNG")
		imagepng($tmp_img,$imgNueva); 		#Se Guarda la imagen en formato PNG con el nombre y en el directorio indicado
}

function nombreMes($mes) {	
	switch ($mes) { 
	   case '01': 
		   $strMes="Enero"; 
		   break; 
	   case '02': 
		   $strMes="Febrero"; 
		   break; 
	   case '03': 
		   $strMes="Marzo"; 
		   break;
	   case '04': 
		   $strMes="Abril"; 
		   break; 
	   case '05': 
		   $strMes="Mayo"; 
		   break; 
	   case '06': 
		   $strMes="Junio"; 
		   break; 
	   case '07': 
		   $strMes="Julio"; 
		   break; 
	   case '08': 
		   $strMes="Agosto"; 
		   break; 
	   case '09': 
		   $strMes="Septiembre"; 
		   break;
	   case '10': 
		   $strMes="Octubre"; 
		   break; 
	   case '11': 
		   $strMes="Noviembre"; 
		   break; 
	   case '12': 
		   $strMes="Diciembre"; 
		   break;
	}
	if (isset($strMes))
		return $strMes;
	else
		return $strMes="";
}

/**
Funcion: Funcion que nos regresa la ip del cliente.
*/
function getIp() {
	
	$sIp="1.1.1.1";
	
	if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) 
	{
	  if (isset($_SERVER["HTTP_CLIENT_IP"])) 
		$proxy = $_SERVER["HTTP_CLIENT_IP"];
	  else 
		$proxy = $_SERVER["REMOTE_ADDR"];
			
	  $sIp = $_SERVER["HTTP_X_FORWARDED_FOR"];
	} 
	else 
	{
	  if (isset($_SERVER["HTTP_CLIENT_IP"])) 
		$sIp = $_SERVER["HTTP_CLIENT_IP"];
	  else 
		$sIp = $_SERVER["REMOTE_ADDR"];
	}
	
	return $sIp;
}
function Limpiar($var){
	$var = str_replace('<','',$var);
	$var = str_replace('>','',$var);
	$var = str_replace('"','',$var);
	$var = str_replace('/','',$var);
	$var = str_replace('\'','',$var);
	$var = str_replace("'","",$var);
	$var = str_replace('_','',$var);
	return $var;
}
?>