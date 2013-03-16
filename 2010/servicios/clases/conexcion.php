<?php
//esta clase nos permitira conectarnos a la base de datos
class conManager{
 var $conect;
 //Método constructor
 function conManager(){
 }
 	
 function conectar() {   
	if(!($con=@mysql_connect("10.10.20.20","webpensiones","p3ns1on3s10"))){
     echo"Error al conectar a la base de datos";	
     exit();
   }
   if (!@mysql_select_db("pensionesdb",$con)) {
     echo "Error al seleccionar la base de datos";  
     exit();
   }
   $this->conect=$con;
   return true;	
 }
}
?>