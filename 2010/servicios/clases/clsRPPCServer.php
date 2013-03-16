<?php
/**
*class clsAuthServer
*se encarga de los servicios necesarios en el servidor de autenticacion
*@version 1.0
*@author Marco Polo Ornelas Alfaro
*@package sistema
**/
include_once("clsMysqlDB.php");
class clsRPPCServer {
		var $rtdb;
		var $connected;
        var $server;
        var $login;
        var $password;
       
  		function clsRPPCServer(){
    		  	$ini=parse_ini_file("clases/rppcServer.ini.php",true);
    		   	$this->server=$ini['database']['server'];
    		   	$this->login=$ini['database']['login'];
    		   	$this->password=$ini['database']['password'];
            	$respuesta=$this->conectar();
            	//***************--------------------------------------- POLO <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
            	// este lo cambie, pero fue cosa mia				
    			if($respuesta==false){
    				$this->connected=false;
    			}else{
    				$this->connected=true;
    			}
        }
        /*
        * Se encarga de conectar a la base de datos de autenticacion
        * se llama en el constructor, esto con el fin de poder
        * regresar el error SOAP (_code1) en caso de que no se pueda conectar
        */
        function conectar(){
         	$this->rppcdb= new clsMysqlDB;
          
       	 	$flag=$this->rppcdb->connect($this->server,$this->login ,$this->password);
            if($flag!=true) {
          		return false;
			} 
			//***************--------------------------------------- POLO <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
        	// aqui siemrpe regresaba false
			return true;
      	}
      	function informacion($sSql){
          $res=$this->rppcdb->sqlAsArray($sSql);
          return $res;
        }
		
		function informacionArray($sSql){
	          $res=$this->rppcdb->sqlAsArreglo($sSql);
	          return $res;
        }
		
		function cerrar(){
			$clo=$this->rppcdb->close();
		}
		
}
?>
