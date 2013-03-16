<?php

 require_once('clases/cls_cdbarras.php');
 //$new_code = new cd_barra($_GET['code']);
 $codigo=$_GET['codigo'];
 $longcad=strlen($codigo);
 
 if ($longcad<25) {
	  $codigo=str_pad($codigo, 25, '0', STR_PAD_LEFT);
	 }
 
 $new_code = new cd_barra($codigo,'');
 echo $codigo;
 
?>

