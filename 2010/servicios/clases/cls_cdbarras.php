<?php 

class cd_barra {
var $file;
var $into;

var $cd_barras = array(
						0=>"00110",
						1=>"10001",
						2=>"01001",
						3=>"11000",
						4=>"00101",
						5=>"10100",
						6=>"01100",
						7=>"00011",
						8=>"10010",
						9=>"01010"
					);
	function cd_barra($value,$into=1, $filename = 'barcode.gif') { 
	  $lower = 1 ; $hight = 50;          
	  $this->into = $into;
          $this->file = $filename;
	  for($count1=9;$count1>=0;$count1--){ 
		for($count2=9;$count2>=0;$count2--){   
		  $count = ($count1 * 10) + $count2 ; 
		  $text = "" ; 
		  for($i=1;$i<6;$i++){ 
			$text .=  substr($this->cd_barras[$count1],($i-1),1) . substr($this->cd_barras[$count2],($i-1),1); 
		  } 
		  $this->cd_barras[$count] = $text; 
	   } 
	  } 
	
		  //$img 		= imagecreate($lower*95+300,$hight+30);
		  $img 		= imagecreate(395,73);    
		  $cl_black = imagecolorallocate($img, 0, 0, 0); 
		  $cl_white = imagecolorallocate($img, 255, 255, 255); 
	

		//Creando fondo imagen          
		   
		  imagefilledrectangle($img, 0, 0, $lower*95+1000, $hight+30, $cl_white); 
		   

		//Iniciando el C�digo de Barras

		  imagefilledrectangle($img, 1,5,1,65,$cl_black); 
		  imagefilledrectangle($img, 2,5,2,65,$cl_white); 
		  imagefilledrectangle($img, 3,5,3,65,$cl_black); 
		  imagefilledrectangle($img, 4,5,4,65,$cl_white); 
	

		//Checando el C�digo de Barras

	
	$thin = 1 ; 
	if(substr_count(strtoupper($_SERVER['SERVER_SOFTWARE']),"WIN32")){
		// gruesor de linea3
 		$wide = 3;
	} else {
			$wide = 2.72;
	   }
	$pos   = 5 ; 
	$text = $value ; 
	if((strlen($text) % 2) <> 0){ 
		$text = "0" . $text; 
	} 
	
	//Graficando
	
	while (strlen($text) > 0) { 
	  $i = round($this->barra_left($text,2)); 
	  $text = $this->barra_right($text,strlen($text)-2); 
	   
	  $f = $this->cd_barras[$i]; 
	   
	  for($i=1;$i<11;$i+=2){ 
		if (substr($f,($i-1),1) == "0") { 
		  $f1 = $thin ; 
		}else{ 
		  $f1 = $wide ; 
		} 
	
	
	//Graficando Barras
	  imagefilledrectangle($img, $pos,5,$pos-1+$f1,65,$cl_black)  ; 
	  $pos = $pos + $f1 ;   
	   
	  if (substr($f,$i,1) == "0") { 
		  $f2 = $thin ; 
		}else{ 
		  $f2 = $wide ; 
		} 
	
	//Imprimiendo Lineas Blancas
	  imagefilledrectangle($img, $pos,5,$pos-1+$f2,65,$cl_white)  ; 
	  $pos = $pos + $f2 ;   
	  } 
	} 
	
	//Cierre del C�digo de Barras
	
	imagefilledrectangle($img, $pos,5,$pos-1+$wide,65,$cl_black); 
	$pos=$pos+$wide; 
	
	imagefilledrectangle($img, $pos,5,$pos-1+$thin,65,$cl_white); 
	$pos=$pos+$thin; 
	
	
	imagefilledrectangle($img, $pos,5,$pos-1+$thin,65,$cl_black); 
	$pos=$pos+$thin; 
	
	$this->put_img($img);
	} 
	
	function barra_left($input,$comp){ 
		return substr($input,0,$comp); 
	} 
	
	function barra_right($input,$comp){ 
		return substr($input,strlen($input)-$comp,$comp); 
	} 
	
	//Imprimiendo C�digo de Barras
	function put_img($image,$file='test.jpg'){
		if($this->into){
			imagejpeg($image,$this->file);
		} else {
					header("Content-type: image/jpeg");
					imagejpeg($image);
					
			   }
		imagedestroy($image);
	}
}

?>