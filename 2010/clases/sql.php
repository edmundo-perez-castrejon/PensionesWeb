<?php
/**
 * @author Agustin Santana Martinez
 * @copyright 2008
 * @descripcion Permite el uso de las sentencias basicas de SQL.
 */
#require_once("connexion.php");
#echo $sRuta = $_SERVER['DOCUMENT_ROOT'].'/pensiones/2010/clases/conexion.php';

require_once('conexion.php');

//implementamos la clase empleado
class sqlQry{
 	//Defino el Recordset
	private $iRs=0;
	private $msgError="";
	
	//constructor	 	
	public function __construct()
	{
	}

	public function __destruct()
	{
	}	
 
	#Metodo para BUSCAR registros
	public function buscar($sTabla,$sCampos,$sCriterio){
	     //creamos el objeto $con a partir de la clase DBManager
		#$con = new conecta();	   
		
	    //usamos el metodo conectar para realizar la conexion
		#if($con->conexionGral()==true){
			$sQuery = "SELECT ".$sCampos." FROM ".$sTabla." ".$sCriterio;
			$this->iRs = @mysql_query($sQuery);		 		   		
		#}
       # echo $con->getMsgError().'zaz';
		return $this->iRs;
	}
	
	#Metodo para AGREGAR Registros
	public function agregar($sTabla,$sCampos,$sDatos){
	   //creamos el objeto $con a partir de la clase DBManager
	   #$con = new conecta();
	   $iResultado=0;
	   //usamos el metodo conectar para realizar la conexion
	   #if($con->conexionAdmon()==true){
			$sQuery = "INSERT INTO ".$sTabla." (".$sCampos.") VALUES (".$sDatos.")";
		 	$rsQry = @mysql_query($sQuery);
		 	if (!$rsQry){
		 		$this->msgError="Error: No se logro agregar el registro.";
		   		return $iResultado;
		 	}
		 	else {
		   		$iResultado=mysql_affected_rows();
				return $iResultado;
			}
			mysql_close();	
			#$con->desconecta();
	   #}
	   /*else	  { 		
	   		$this->msgError="Error al intentar agregar el registro.";
	   		return $iResultado;
	   }*/   		
	} 
	
	#Metodo para ACTUALIZAR Registros
	public function actualizar($sTabla,$sDatos,$sCriterio){
	   //creamos el objeto $con a partir de la clase DBManager
	   #$con = new conecta;
	   $iResultado=0;
	   //usamos el metodo conectar para realizar la conexion
	   #if($con->conexionAdmon()==true){
			$sQuery = "UPDATE ".$sTabla." SET ".$sDatos." WHERE ".$sCriterio;
		 	$rsQry = @mysql_query($sQuery);
		 	if (!$rsQry) {
		   		$this->msgError="Error: no se logro realizar la actualizacion del registro.";
		   		return $iResultado;
		 	}
		 	else 
				return mysql_affected_rows();
			mysql_close();		
			#$con->desconecta();
	   /*}
	   else {
	   		$this->msgError="Error al intentar actualizar el registro.";
	   		return $iResultado;
	   }*/
	}
	
	#Metodo para ELIMINAR Registros
	public function borrar($sTabla,$sCriterio){
	   //creamos el objeto $con a partir de la clase DBManager
	   #$con = new conecta;
	   $iResultado=0;
	   //usamos el metodo conectar para realizar la conexion
	  # if($con->conexionAdmon()==true){
			$sQuery = "DELETE FROM ".$sTabla." WHERE ".$sCriterio;
		 	$rsQry = @mysql_query($sQuery);
		 	if (!$rsQry){
		   		$this->msgError="Error: no se logro eliminar el registro.";
		   		return $iResultado;
		 	}
		 	else 
		   		return mysql_affected_rows();
			mysql_close();	
			#$con->desconecta();
	   /*}
	   else {
	   		$this->msgError="Error al intentar eliminar el registro.";
	   		return $iResultado;
	   }*/	   
	}
	
	public function getMsgError(){
		return $this->msgError;
	}
}
?>