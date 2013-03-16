<?php
/**
class clsMysqlDB
se encarga de servicios para acessar a la base de datos mysql
version 1.0
author David Israel Raygoza Ramirez

**/
class clsMysqlDB {
				/**
				*@access private
				*@var resource
				**/
        var $dbh;
        /**
        * constructor inicializa variables
				**/

        /**
        *Se conecta a la base de datos, regresa true si se realizo la conexion
        *@param string $host host a conectar con sitaxis de ibase ejemplo "localhost:tests"
        *@param string $username nombre de usuario
        *@param string $password password del usuario
        *@return true|false regresa si la conexion se realizo
				**/
        function connect($host, $username, $password){
        	//	echo $host;
        	//	echo $username;
        	//	echo $password;
           if(!($this->dbh=@mysql_connect($host,$username,$password))){
          		//echo "truena";
				//echo mysql_error();
				return false;   
				
          }else{
                //echo "si funka";
				//echo $this->dbh;
                return $this->dbh;
          }
          
        }
        
        /**
        *Ejecuta el query especificado
        *@param string $sql sql a ejecutar
        *@return resource recurso del query
				**/
        function sentencia($sql){
          $sth = @mysql_query($this->dbh, $sql);
		  return $sth;
        }

        /**
        *Cierra la conexion
				**/        
        function close(){
          mysql_close($this->dbh);
        }

        /**
        *Ejecuta el query especificado y regresa el resultado en un array
        *@param string $sql sql a ejecutar
        *@return array|false array con resultados
				**/        
		function sqlAsArray($sql){
			$resultado= array();
			mysql_select_db('pensiones',$this->dbh);
			$sth = mysql_query($sql);
			if ($sth!= false) {
				$resultado=mysql_fetch_row($sth);
			}else{
				$resultado=false;
			}
			return $resultado;
		}
		function sqlAsArrayA($sql){
			$resultado= array();
			//$resultado="";
			mysql_select_db('pensiones',$this->dbh);
			$sth = mysql_query($sql);
			$nf=mysql_num_rows($sth);
			$NumR=count(mysql_fetch_array($sth))/3;
			if ($sth!= false){
				$i=0;
				$a=0;
				$b=1;
				$c=2;
				while($datos=mysql_fetch_array($sth)){
					echo $datos[$a]." ".$datos[$b]." ".$datos[$c]."<br>";
					$resultado[$i]=$datos[$a];
					$resultado[$i+1]=$datos[$b];
					$resultado[$i+2]=$datos[$c];
					$i=$i+3;
				}
			}else{
				$resultado=false;
			}
			return $resultado;
		}
		
		function sqlAsArreglo($sql){
			$resultado= array();
			mysql_select_db('pensiones',$this->dbh);
			$sth = mysql_query($sql);
			if ($sth!= false){
				while($datos=mysql_fetch_array($sth)){
					//print_r($datos);
					$resultado=array_merge($resultado,$datos);
				}
			}else{
				$resultado=false;
			}
			return $resultado;
		}
}
?>
