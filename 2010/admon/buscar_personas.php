<?
session_start();

if (isset($_SESSION['USUARIO'])){
	$IIdUser=$_SESSION['USUARIO'];
}else{
	$IIdUser="";
}

if (!empty($_SESSION['DEPENDENCIA'])){
	$IIdDep=$_SESSION['DEPENDENCIA'];
}else{
	$IIdDep="";
}

if($IIdUser=="" || $IIdDep==""){
	$msg= "ES%20NECESARIO%20INICIAR%20SESION";
	header("Location: index.php?msg=$msg");
}else{

	if(isset($_GET['formulario'])){
		$formulario=$_GET['formulario'];
		$dependencia=$_GET['dependencia'];
		$usuario=$_GET['usuario'];
		$clave=$_GET['clave'];
	}else{
		$formulario=$_POST['formulario'];
		$dependencia=$_POST['dependencia'];
		$usuario=$_POST['usuario'];
		$clave=$_POST['clave'];
	}
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Buscar Personas</title>
<link href="styles/estilo.css" rel="stylesheet" type="text/css">
<SCRIPT language="javascript1.1"> 
function trasladar(dependencia,clave,nombrecom){
	//alert ("nadaq");
	window.opener.document.<? echo $formulario;?>.<? echo $dependencia;?>.value=dependencia;
    window.opener.document.<? echo $formulario;?>.<? echo $clave;?>.value=clave;
	window.opener.document.<? echo $formulario;?>.<? echo $usuario;?>.value=nombrecom;
	
	window.opener.document.<? echo $formulario;?>.submit('nuevo.php');
	window.close();
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-size: 12px}
-->
</style>
</head>

<body class="textoPies12">
<form action="buscar_personas.php" method="post" name="forma" id="forma">
<table width="100%" border="0" align="center" bgcolor="#AEC49D">
  <tr>
    <td width="5%">&nbsp;<br><br></td>
    <td width="35%"><br>Nombre (s)</td>
    <td width="60%"><br><input name="fsNombre" type="text" class="colofon" id="fsNombre" size="50"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Apellido Paterno</td>
    <td><input name="fsAppaterno" type="text" class="colofon" id="fsAppaterno" size="40"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Apellido Materno</td>
    <td><input name="fsApmaterno" type="text" class="colofon" id="fsApmaterno" size="40"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input name="formulario" type="hidden" id="formulario" value="<? echo $formulario;?>"><input name="dependencia" type="hidden" id="dependencia" value="<? echo $dependencia;?>">
    <input name="clave" type="hidden" id="clave" value="<? echo $clave;?>">
    <input name="usuario" type="hidden" id="usuario" value="<? echo $usuario;?>">
    <input name="btnBuscar" type="submit" id="Buscar" value="Buscar"></td>
  </tr>
</table>
</form>
<blockquote class="style1"><?
if(isset($_POST['fsNombre'])){
	require_once('../clases/clsRPPCServer.php');
	$ConBD1 = new clsRPPCServer();	
	$ConnC = $ConBD1 -> clsRPPCServer();
	$lsNombre=strtoupper($_POST['fsNombre']);
	$lsAppaterno=strtoupper($_POST['fsAppaterno']);
	$lsApmaterno=strtoupper($_POST['fsApmaterno']);
	
	$sql="select nombre,ficha,entidad from internet where ";
	if(trim($lsNombre)!="")
		$sql .= " nombre like '%$lsNombre%' and";
	if(trim($lsAppaterno)!="")
		$sql .= " nombre like '%$lsAppaterno%' and";
	if(trim($lsApmaterno)!="")
		$sql .= " nombre like '%$lsApmaterno%' and";
	
	$sql .=" 1=1";
	//$sql .=" from intenet where nombre like '%$lsNombre%' and nombre like '%$lsAppaterno%' and nombre like '%$lsApmaterno%'";
	//echo $sql;
	$ConnS = $ConBD1 -> informacionArray($sql);
	$veces = count($ConnS)-3;
	if ($veces>0){
		for ($i=0;$i<$veces; $i=$i+3){
		echo  " &nbsp; &nbsp; ".$ConnS[0+$i]." ".$ConnS[1+$i];
?>
	<a href="#" onClick="trasladar('<? echo trim($ConnS[2+$i]);?>','<? echo $ConnS[1+$i];?>','<? echo $ConnS[$i];?>')">Seleccionar</a><br>
<?
		}
?></blockquote>
<?
	}//else{
?>

</body>
</html>
<?
	}
} // if ($IIdUser!="")
?>