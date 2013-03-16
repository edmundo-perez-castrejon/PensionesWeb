<?
session_start();

if(isset($_POST['txtusu']))
	$usu = $_POST['txtusu'];
else
	$usu = "";

if(isset($_POST['txtpass']))
	$cla = $_POST['txtpass'];
else
	$cla = "";

if($cla==""||$usu==""){
	$msg= "ES%20NECESARIO%20USUARIO%20Y%20CONTRASEÑA";
	header("Location: index.php?msg=.$msg");
}else{
	require_once('../clases/clsRPPCServer.php');

	//Crear instancia ahacia la clase clsMysqlDB
	$ConBD1 = new clsRPPCServer();
	
	//Ejecuto Funcion de Conexion
	$ConnC = $ConBD1 -> clsRPPCServer();
	//echo $ConnC;	
	$sen = "SELECT * FROM usuarios WHERE usuario='$usu' AND clave like '$cla'";
	//$sen = "SELECT * FROM usuarios WHERE clave like '$cla' AND usuario like '$usu' AND id_usuario=99999";
	//echo $sen; 
	//sentencia para autentificar el usuario
	$ConnS = $ConBD1 -> informacion($sen);
	echo $ConnS[1]." = ".$ConnS[2];	
	if($ConnS[1]=="" || $ConnS[2]==""){
		$msg= "EL%20USUARIO%20O%20CONTRASEÑA%20SON%20INCORRECTAS";
		//header("Location: index.php?msg=$msg");
	}else{
		session_register("USUARIO");
		session_register("DEPENDENCIA");
		$_SESSION['USUARIO'] = $ConnS[1];
		$_SESSION['DEPENDENCIA'] = $ConnS[2];
		echo $_SESSION['DEPENDENCIA']."segqw";
		//echo $_SESSION['USUARIO'];
		header("Location:nuevo.php");
	}	
	
	//ejecuto Funcion para carrar la Conexion
	$ConnClose = $ConBD1 -> cerrar();
}
?>