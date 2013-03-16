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

/**
Funcion para evitar inyeccion de SQL
Recibe: una cadena
Regresa: 1: en caso de existir alguna palabra no permitida. 0: en caso de ser una cadena valida
*/
function sqlInjection($cadena) {
	$aKeyWord=array("insert","update","delete","drop","alter","grant");
	$pos=0;
	foreach($aKeyWord as $sPalabra) {
		$pos=strpos($cadena,$sPalabra);
		if ($pos==false)
			$pos=1;
	}
	
	return $pos;
}

function cambiaf_a_mysql($fecha){
    ereg( "([0-9]{1,2})/([0-9]{1,2})/([0-9]{2,4})", $fecha, $mifecha);
    $lafecha=$mifecha[3]."-".$mifecha[2]."-".$mifecha[1];
    return $lafecha;
} 

?>