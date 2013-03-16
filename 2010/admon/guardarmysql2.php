<?

if(isset($_GET['sql']))
	$sql=trim($_GET['sql']);
else
	$sql="";

if(isset($_GET['fondo_av']))
	$fondo_av=$_GET['fondo_av'];
else
	$fondo_av=" ";

if(isset($_GET['pagad_av']))
	$pagad_av=str_replace('/','-',$_GET['pagad_av']);
else
	$pagad_av.=" ";
	
if(isset($_GET['cve_ea_o']))
	$cve_ea_o=$_GET['cve_ea_o'];
else
	$cve_ea_o=" ";
	
if(isset($_GET['ficha_df_o']))
	$ficha_df_o=$_GET['ficha_df_o'];
else
	$ficha_df_o=" ";

if(isset($_GET['cve_ea_l']))
	$cve_ea_l=$_GET['cve_ea_l'];
else
	$cve_ea_l="0";
	
if(isset($_GET['ficha_df_l']))
	$ficha_df_l=$_GET['ficha_df_l'];
else
	$ficha_df_l="0";

if(isset($_GET['nom_df_l']))
	$nom_df_l=$_GET['nom_df_l'];
else
	$nom_df_l="0";
	
if(isset($_GET['nom_df_o']))
	$nom_df_o=$_GET['nom_df_o'];
else
	$nom_df_o="0";

	
$values="'".$fondo_av."','".$pagad_av."','".$cve_ea_o."','".$ficha_df_o."','".$cve_ea_l."','";
$values.= $ficha_df_l."','".$nom_df_l."','".$nom_df_o."'";

require_once('conex.php');

/*$sqlS="SELECT fondo_av,pagad_av,cve_ea_o,ficha_df_o,nom_df_l,nom_df_o FROM avalados WHERE cve_ea_l='".$_GET['cve_ea_l']."' AND ficha_df_l=".$_GET['ficha_df_l'];
$resul=mysql_query($sqlS);
$num=mysql_num_rows($resul);
if($num==1){
	$datos=mysql_fetch_array($resul);
	if(trim($datos[0])!=trim($fondo_av)){
		$sqlU="UPDATE avalados SET fondo_av='".trim($fondo_av)."' WHERE cve_ea_l='".$_GET['cve_ea_l']."' AND ficha_df_l=".$_GET['ficha_df_l'];
		$resul=mysql_query($sqlU);
	}
	if(trim($datos[1])!=trim($pagad_av)){
		$sqlU="UPDATE avalados SET pagad_av='".trim($pagad_av)."' WHERE cve_ea_l='".$_GET['cve_ea_l']."' AND ficha_df_l=".$_GET['ficha_df_l'];
		$resul=mysql_query($sqlU);
	}
	if(trim($datos[2])!=trim($cve_ea_o)){
		$sqlU="UPDATE avalados SET cve_ea_o=".trim($cve_ea_o)." WHERE cve_ea_l='".$_GET['cve_ea_l']."' AND ficha_df_l=".$_GET['ficha_df_l'];
		$resul=mysql_query($sqlU);
	}
	if(trim($datos[3])!=trim($ficha_df_o)){
		$sqlU="UPDATE avalados SET ficha_df_o=".trim($ficha_df_o)." WHERE cve_ea_l='".$_GET['cve_ea_l']."' AND ficha_df_l=".$_GET['ficha_df_l'];
		$resul=mysql_query($sqlU);
	}
	if(trim($datos[4])!=trim($nom_df_l)){
		$sqlU="UPDATE avalados SET nom_df_l=".trim($nom_df_l)." WHERE cve_ea_l='".$_GET['cve_ea_l']."' AND ficha_df_l=".$_GET['ficha_df_l'];
		$resul=mysql_query($sqlU);
	}
	if(trim($datos[5])!=trim($nom_df_o)){
		$sqlU="UPDATE avalados SET nom_df_o=".trim($nom_df_o)." WHERE cve_ea_l='".$_GET['cve_ea_l']."' AND ficha_df_l=".$_GET['ficha_df_l'];
		$resul=mysql_query($sqlU);
	}
}	
else{*/
	$sql=$sql."(".$values.")";
	$result=mysql_query($sql);
	//echo $sql;
	//echo "aka entra";
//}
?>