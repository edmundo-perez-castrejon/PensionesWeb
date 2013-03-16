<?php
if(!isset($_SESSION))
	session_start();
//esta clase nos permitira conectarnos a la base de datos
class conecta
{

	private $iIdCon = 0;
	private $sMsgError = "";
	private $sBase = '';
	private $sUserAd = "";
	private $sPassAd = "";
	private $sServAd = "";

	#Datos de usuario normal
	private $sUser = "";
	private $sPass = "";
	private $sServ = "";

	public function __construct(){				
				$this->sBase = "colimaedo";
				#datos de usuario administrador
				$this->sUserAd = "icc";
				$this->sPassAd = "webicc2003";
				$this->sUser = "icc";
				$this->sPass = "webicc2003";
				$this->sServAd = "localhost"; #148.235.70.99

	}

	public function __destruct()
	{
	}

	function conexionAdmon() #Metodo de conexion para usuario con todos los permisos sobre la bd
	{
		if(!($this->iIdCon=@mysql_connect($this->sServAd,$this->sUserAd,$this->sPassAd))){
			$this->sMsgError="No se puede mostrar la informacion en este momento.";
		}
		else {
			if (!@mysql_select_db($this->sBase,$this->iIdCon)) 	{
				$this->sMsgError = "No se puede mostrar la informacion en este instante.";
			}
		}

		return $this->iIdCon;
	}

	function conexionGral() #Metodo de conexion para usuario con permisos solo de lectura
	{
		if(!($this->iIdCon=mysql_connect($this->sServAd,$this->sUser,$this->sPass))){
			$this->sMsgError="No se puede mostrar la informacion en este momento.";
		}
		else {
			if (!mysql_select_db($this->sBase,$this->iIdCon)) 	{
				$this->sMsgError = "No se puede mostrar la informacion en este instante.";
			}
		}

		return $this->iIdCon;
	}

	function conexionDelete() #Metodo de conexion para usuario con permisos solo de lectura
	{
		if(!($this->iIdCon=@mysql_connect($this->sServDel,$this->sUserDel,$this->sPassDel))){
			$this->sMsgError="No se puede mostrar la informacion en este momento.";
		}
		else {
			if (!@mysql_select_db($this->sBase,$this->iIdCon)) 	{
				$this->sMsgError = "No se puede mostrar la informacion en este instante.";
			}
		}

		return $this->iIdCon;
	}

	function desconecta() {			#Metodos para cerrar la conexion con la bd
		mysql_close($this->iIdCon);
	}

	function getMsgError(){
		return $this->sMsgError;
	}
}
?>