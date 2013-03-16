<?
function Nombre_mes($mes) {	
	switch ($mes) { 
	   case "01": 
		   $SMes="Enero"; 
		   break; 
	   case "02": 
		   $SMes="Febrero"; 
		   break; 
	   case "03": 
		   $SMes="Marzo"; 
		   break;
	   case "04": 
		   $SMes="Abril"; 
		   break; 
	   case "05": 
		   $SMes="Mayo"; 
		   break; 
	   case "06": 
		   $SMes="Junio"; 
		   break; 
	   case "07": 
		   $SMes="Julio"; 
		   break; 
	   case "08": 
		   $SMes="Agosto"; 
		   break; 
	   case "09": 
		   $SMes="Septiembre"; 
		   break;
	   case "10": 
		   $SMes="Octubre"; 
		   break; 
	   case "11": 
		   $SMes="Noviembre"; 
		   break; 
	   case "12": 
		   $SMes="Diciembre"; 
		   break;
	}
	if (isset($SMes))
		return $SMes;
}
/*
Funcion: Regresa el Nombre del dia de la semana de determinada fecha
*/
function dia($intDia,$intMes,$intAno)
{
	$strDia="";
	$dia=date("w", mktime(0,0,0,$intMes, $intDia, $intAno));
    switch ($dia) 
    { 
	   case 0: 
		   $strDia="Domingo"; 
		   break; 
	   case 1: 
		   $strDia="Lunes"; 
		   break; 
	   case 2: 
		   $strDia="Martes"; 
		   break;
	   case 3: 
		   $strDia="Miercoles"; 
		   break; 
	   case 4: 
		   $strDia="Jueves"; 
		   break; 
	   case 5: 
		   $strDia="Viernes"; 
		   break; 
	   case 6: 
		   $strDia="Sabado"; 
		   break; 
    }
	return $strDia;
}

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
	#$intErr2=count(explode("Content-Type:",$strText,2));
	$intErr3=count(explode("to:",$sText,2));
	#$intErr4=count(explode("To:",$strText,2));
	#$intErr5=count(explode("TO:",$strText,2));
	$intErr6=count(explode("cc:",$sText,2));
	#$intErr7=count(explode("Cc:",$strText,2));
	#$intErr8=count(explode("CC:",$strText,2));
	$intErr9=count(explode("bcc:",$sText,2));
	#$intErr10=count(explode("Bcc:",$strText,2));
	#$intErr11=count(explode("BCC:",$strText,2));
	#$intErr12=count(explode("From:",$strText,2));
	$intErr13=count(explode("from:",$sText,2));
	#$intErr14=count(explode("FROM:",$strText,2));
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


/*********
Funcion: Convierte Color Hexadecimal a RGB
*********/
function colorHex2RGB($sColHex) {
	if (strlen($sColHex)==6) {
		$sPart1=$sColHex[0].$sColHex[1];
		$sPart2=$sColHex[2].$sColHex[3];
		$sPart3=$sColHex[4].$sColHex[5];
		$iColR=hexdec($sPart1);
		$iColG=hexdec($sPart2);
		$iColB=hexdec($sPart3);
		$aColRgb=array($iColR,$iColG,$iColB);
	}
	else
		$aColRgb=array(0,0,0);
	return $aColRgb;
	/*for ($i=0; $i < strlen($sColHex); $i++)
	{
	   $temp = parseInt(input.charAt(i), 16);
	   $i++;
	   $temp2 = parseInt(input.charAt(i), 16)
	   $temp3 = (temp * 16) + (temp2 * 1);
	   output += new String(temp3) + " ";
	}*/
}


/***********
Funcion: "validaCadNumE" Realiza la validación de una Cadena revisando si contiene solo: Numeros, letras y espacio en blanco
Variables: 
		- $sCadena= Variable con el contenido de la cadena (string)
***********/
function validaCadNumE($sCadena)	
{
	if( !ereg('([^a-zA-Z0-9\ ])', $sCadena))
		return true;
	else
		return false;
}

function validaNum($sCadena)	#Valida que solo se reciban numeros
{
	if( !ereg('([^0-9])', $sCadena))
		return true;
	else
		return false;
}

/***********
Funcion: Genera tablas con mensajes (Error, aviso, alerta,etc.)
Variables: 
		- $strLugarImg= Se indica el lugar donde se encuentran las imagenes de las tablas
		- $strMsg = Es el mensaje que se mostrara en la tabla
		- $strImgAviso = Imagen que se mostrara; esta depende del mensaje que se desea dar (error,alerta, aviso,etc.)
***********/
function aviso($strLugarImg,$strMsg,$strImgAviso)
{ 
?>
	<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
	  <tr>
		<td width="9" height="6" valign="top"><img src="<? echo $strLugarImg?>tbl(1-1).gif" width="9" height="6" /></td>
		<td height="6" background="<? echo $strLugarImg?>tblfill(1-2).gif"></td>
		<td width="9" height="6" valign="top"><img src="<? echo $strLugarImg?>tbl(1-3).gif" width="9" height="6" /></td>
	  </tr>
	  <tr>
		<td valign="top" background="<? echo $strLugarImg?>tblfill(2-1).gif"></td>
		<td valign="top"><table width="100%" border="0" cellspacing="1" cellpadding="0" align="center">
		  <tr>
			<td width="21%" height="35" valign="middle">
			<div align="right"><img src="<? echo $strImgAviso?>" width="64" height="64" />&nbsp; </div></td>
			<td width="79%" valign="middle"><font size="2" face="Tahoma"><b><? echo $strMsg?></b></font></td>
		  </tr>
		</table></td>
		<td background="<? echo $strLugarImg?>tblfill(2-3).gif"></td>
	  </tr>
	  <tr>
		<td width="9" height="6" valign="top"><img src="<? echo $strLugarImg?>tbl(3-1).gif" width="9" height="6" /></td>
		<td height="6" background="<? echo $strLugarImg?>tblfill(3-2).gif"></td>
		<td width="6" height="6" valign="top"><img src="<? echo $strLugarImg?>tbl(3-3).gif" width="9" height="6" /></td>
	  </tr>
	</table>
<?
}


function get_days_for_month($m,$y){
	if($m == 02){
		if(($y % 4 == 0) && (($y % 100 != 0) || ($y % 400 == 0))){
			return 29;
		}else{
			return 28;
		}
	}
    if ($m == 4 || $m == 6 || $m == 9 || $m == 11){
         return 30;
	}else{
    	return 31;
	}
}

function DiasHabiles( $day, $month, $year, $daysto ){
	if(!isset($day) or !isset($month) or !isset($year) or !isset($daysto)){ exit; }
	
	
	#echo intval($day).' '.intval($month).' '.$year.' '.$daysto.'<br>';
	/*
	if($day=='')
		$day = date('d');
	if($month=='')
		$month = date('m');
	if($year=='')
		$year = date('Y');
	*/
	$inhabiles = array();
	$habiles = array();
	
	for($y=date('Y'); $y<=date('Y'); $y++){
		for($m=1; $m<=12; $m++){
			for($d=1; $d<=get_days_for_month($m,$y); $d++){
				$date = date('D', mktime(0,0,0,$m,$d,$y));
				if($date == 'Sat' or $date == 'Sun'){
					$inhabiles[] = date("j/n/Y", mktime(0,0,0,$m,$d,$y));
				}else{
					if(!in_array(date("j/n/Y", mktime(0,0,0,$m,$d,$y)),$inhabiles)){
						$habiles[] = date("j/n/Y", mktime(0,0,0,$m,$d,$y));
					}
				}
			}
		}
	}
	
	$hab=0;
	//fecha de la solicitud
	$date = $day.'/'.$month.'/'.$year;
	$contador = array_search($date,$habiles);
	for($i=0;$i<count($habiles);$i++){
		if($date==$habiles[$i]){
			$hab = $i+$daysto-1;
		}
	}
	list($dia, $mes, $anio) = split('[/.-]', $habiles[$hab]);
	if(strlen($dia)==1){
		$dia = '0'.$dia;
	}
	if(strlen($mes)==1){
		$mes = '0'.$mes;
	}
	return $dia."/".$mes."/".$anio;
}

function Limpiar($var){
	$var = str_replace('<','',$var);
	$var = str_replace('>','',$var);
	$var = str_replace('"','',$var);
	$var = str_replace('/','',$var);
	$var = str_replace('\'','',$var);
	$var = str_replace("'","",$var);
	$var = str_replace('_','',$var);
	$var = str_replace('@','',$var);
	$var = str_replace('[','',$var);
	$var = str_replace(']','',$var);
	return $var;
}

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

function cabezera_doc($tipo)
{
	switch($tipo){
		case 'doc':
					$tipo_doc="application/msword";
					break;
		case 'pdf':
					$tipo_doc="application/pdf";
					break;
		case 'txt':
					$tipo_doc="application/txt";
					break;
		case 'xls':
					$tipo_doc="application/excel";
					break;
		case 'ppt':
					$tipo_doc="application/mspowerpoint";
					break;
		case 'rtf':
					$tipo_doc="application/rtf";
					break;
	}
	return $tipo_doc;
	
}
function amoneda($numero, $moneda){  
	$longitud = strlen($numero);  
	$punto = substr($numero, -1,1);  
	$punto2 = substr($numero, 0,1);  
	$separador = ".";  
	if($punto == "."){  
		$numero = substr($numero, 0,$longitud-1);  
		$longitud = strlen($numero);  
	}  
	if($punto2 == "."){  
		$numero = "0".$numero;  
		$longitud = strlen($numero);  
	}  
	$num_entero = strpos ($numero, $separador);  
	$centavos = substr ($numero, ($num_entero));  
	$l_cent = strlen($centavos);  
	if($l_cent == 2){$centavos = $centavos."0";}  
	elseif($l_cent == 3){$centavos = $centavos;}  
	elseif($l_cent > 3){$centavos = substr($centavos, 0,3);}  
	$entero = substr($numero, -$longitud,$longitud-$l_cent);  
	if(!$num_entero){  
		$num_entero = $longitud;  
		$centavos = ".00";  
		$entero = substr($numero, -$longitud,$longitud);  
	}  
	
	$start = floor($num_entero/3);  
	$res = $num_entero-($start*3);  
	if($res == 0){$coma = $start-1; $init = 0;}else{$coma = $start; $init = 3-$res;}  
		$d= $init; $i = 0; $c = $coma;  
		while($i <= $num_entero){  
			if($d == 3 && $c > 0){$d = 0; $sep = ","; $c = $c-1;}else{$sep = "";}  
			$final .=  $sep.$entero[$i];  
			$i = $i+1; // todos los digitos  
			$d = $d+1; // poner las comas  
		 }  
		if($moneda == "pesos")  {$moneda = "$";  
		return $moneda." ".$final.$centavos;  
	}  
	elseif($moneda == "dolares"){$moneda = "USD";  
		return $moneda." ".$final.$centavos;  
	 }  
	 elseif($moneda == "euros")  {$moneda = "EUR";  
	 return $final.$centavos." ".$moneda;  
	}  
}  

/*function cabezera_doc($tipo)
{
	switch($tipo){
		case 'doc':
					$tipo_doc="application/msword";
					break;
		case 'pdf':
					$tipo_doc="application/pdf";
					break;
		case 'txt':
					$tipo_doc="application/txt";
					break;
		case 'xls':
					$tipo_doc="application/excel";
					break;
		case 'ppt':
					$tipo_doc="application/mspowerpoint";
					break;
		case 'rtf':
					$tipo_doc="application/rtf";
					break;
	}
	return $tipo_doc;
	
}*/


?>