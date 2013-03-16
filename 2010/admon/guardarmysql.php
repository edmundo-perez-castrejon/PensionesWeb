<?
if(isset($_GET['sql']))
	$sql=trim($_GET['sql']);
else
	$sql="";

if(isset($_GET['ficha']))
	$ficha=$_GET['ficha'];
else
	$ficha=" ";

if(isset($_GET['fecha']))
	$fecha=str_replace('/','-',$_GET['fecha']);
else
	$fecha.=" ";
	
if(isset($_GET['nombre']))
	$nombre=$_GET['nombre'];
else
	$nombre=" ";
	
if(isset($_GET['curp']))
	$curp=$_GET['curp'];
else
	$curp=" ";

if(isset($_GET['fondot']))
	$fondot=$_GET['fondot'];
else
	$fondot="0";
	
if(isset($_GET['saldopcp']))
	$saldopcp=$_GET['saldopcp'];
else
	$saldopcp="0";

if(isset($_GET['qnpencp']))
	$qnpenpcp=$_GET['qnpencp'];
else
	$qnpenpcp="0";
	
if(isset($_GET['avala']))
	$avalapcp=$_GET['avala'];
else
	$avalapcp="0";
	
if(isset($_GET['saldophi']))
	$saldophi=$_GET['saldophi'];
else
	$saldophi="0";
	
if(isset($_GET['qnpenphi']))
	$qnpenphi=$_GET['qnpenphi'];
else
	$qnpenphi="0";
	
if(isset($_GET['saldoshi']))
	$saldoshi=$_GET['saldoshi'];
else
	$saldoshi="0";

if(isset($_GET['entidad']))
	$entidad=$_GET['entidad'];
else
	$entidad="0";
	
if(isset($_GET['puesto']))
	$puesto=$_GET['puesto'];
else
	$puesto=" ";

if(isset($_GET['tipotrab']))
	$tipotrab=$_GET['tipotrab'];
else
	$tipotrab=" ";
	
$values="'".$ficha."','".$fecha."','".$nombre."','".$curp."',".$fondot.",".$saldopcp.",".$qnpenpcp.",";
$values.= $avalapcp.",".$saldophi.",".$qnpenphi.",".$saldoshi.",".$entidad.",'".$puesto."','".$tipotrab."'";

require_once('conex.php');

$sqlS="SELECT fechaum,curp,fondotot,saldopcp,qnpenpcp,avalapcp,saldophi,qnpenphi,saldoshi FROM internet WHERE ficha='".$_GET['ficha']."' AND entidad=".$_GET['entidad'];
$resul=mysql_query($sqlS);
$num=mysql_num_rows($resul);
if($num!=0){
	$datos=mysql_fetch_array($resul);
	$sqlU="UPDATE internet SET ";
	$ban=0;
	if(trim($datos[0])!=trim($fecha)){
		$sqlU.="fechaum='".trim($fecha)."'";
		$ban=1;
	}
	if(trim($datos[1])!=trim($curp)){
		if($ban==1)
			$sqlU.=",curp='".trim($curp)."'";
		else
			$sqlU.="curp='".trim($curp)."'";
		$ban=1;
	}
	if(trim($datos[2])!=trim($fondot)){
		if($ban==1)
			$sqlU.=",fondotot=".trim($fondot);
		else
			$sqlU.="fondotot=".trim($fondot);
		$ban=1;
	}
	if(trim($datos[3])!=trim($saldopcp)){
		if($ban==1)
			$sqlU.=",saldopcp=".trim($saldopcp);
		else
			$sqlU.="saldopcp=".trim($saldopcp);
		$ban=1;
	}
	if(trim($datos[4])!=trim($qnpenpcp)){
		if($ban==1)
			$sqlU.=",qnpenpcp=".trim($qnpenpcp);
		else
			$sqlU.="qnpenpcp=".trim($qnpenpcp);
		$ban=1;
	}
	if(trim($datos[5])!=trim($avalapcp)){
		if($ban==1)
			$sqlU.=",avalapcp=".trim($avalapcp);
		else
			$sqlU.="avalapcp=".trim($avalapcp);
		$ban=1;
	}
	if(trim($datos[6])!=trim($saldophi)){
		if($ban==1)
			$sqlU.=",saldophi=".trim($saldophi);
		else
			$sqlU.="saldophi=".trim($saldophi);
		$ban=1;
	}
	if(trim($datos[7])!=trim($qnpenphi)){
		if($ban==1)
			$sqlU.=",qnpenphi=".trim($qnpenphi);
		else
			$sqlU.="qnpenphi=".trim($qnpenphi);
		$ban=1;
	}
	if(trim($datos[8])!=trim($saldoshi)){
		if($ban==1)
			$sqlU.=",saldoshi=".trim($saldoshi);
		else
			$sqlU.="saldoshi=".trim($saldoshi);
		$ban=1;
	}
	$sqlU.=" WHERE ficha='".$_GET['ficha']."' AND entidad=".$_GET['entidad'];
	echo $ban."<br>".$sqlU;
	if($ban==1){
		$result=mysql_query($sqlU);
	}
	//echo "ASEGTWQ";
}else{
	$sql=$sql."(".$values.")";
	$result=mysql_query($sql);
	if($result){
		echo "1";
	}else{
		echo "0";
	}
	//echo "aka entra".mysql_affected_rows();
}
?>