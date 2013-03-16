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

if(isset($_POST['dep']))
	$dep = $_POST['dep'];
else
	$dep = "";

if($cla=="" || $usu=="" || $dep==""){
	$msg= "ES%20NECESARIO%20USUARIO%20Y%20CONTRASEÑA%20Y%20DEPENDENCIA";
	header("Location: index.php?msg=$msg&e=$dep");
}else{
	require_once("../ws/lib/nusoap.php");
						
	#$client = new soapclient('http://10.10.20.62/dirpensiones/dir_pensiones/rppc/ws_saldos.php?wsdl', true);	#local
	#$client = new nusoap_client('http://dirpensiones.dyndns.org/nusoap/ws_saldos.php?wsdl', true);	#Server
	$client = new nusoap_client('http://dirpensiones.dyndns.org/nusoap/ws_saldos.php?wsdl', true);	#Server
	
	/*$iConn = odbc_connect("pensiones","","","");
	$iError=0;
	$aClaves=array("noControl"=>0,"dpcia"=>0,"curp"=>"0");
	
	###### Funcion para obtener el numero de registros que devuelve un Select, ya que no funciona la funcion de odbc
	function numRows ($result,$odbcDbId,$sCriterio)
	{
		$numRecords = odbc_num_rows ($result);
		if ($numRecords < 0)
		{
			$countQueryString = "SELECT count(*) as results FROM ".$sCriterio;
			$count = odbc_exec ($odbcDbId, $countQueryString);
			$numRecords = odbc_result ($count, "results");
		}
		
		return $numRecords;
	} 
	####### Fin Funcion
	
	if ($iConn) {
		
		$sQryP = "SELECT curp,passw FROM ";
		$sCriterioP = "empleados_web WHERE ficha_df=".$usu." AND cve_ea=".$dep;
		$sQryP.= $sCriterioP;
		$iRsP = odbc_exec($iConn, $sQryP);
		$iNumRegsP = numRows($iRsP, $iConn, $sCriterioP);
		
		if ($iNumRegsP > 0 ){			
			$aDatos = odbc_fetch_object($iRsP);
			#print_r($aDatos);
			#echo strlen($aDatos->passw);
			if (strlen(trim($aDatos->passw))>0)
				echo $sPas=" AND ltrim(passw)='".trim($cla)."'";
			elseif (strlen(trim($aDatos->curp))==18 && strlen(trim($cla))==18)
				$sPas=" AND ltrim(upper(curp))='".trim(strtoupper($cla))."'";
			else
				$iError=1;
			
			if (isset($sPas) && $iError==0) {			
				$sQry = "SELECT cve_ea, ficha_df,curp FROM ";
				$sCriterio = "empleados_web WHERE ficha_df=".$usu.$sPas." AND cve_ea=".$dep;
				$sQry.= $sCriterio;
				
				$iRs = odbc_exec($iConn, $sQry);
				
				$iNumRegs = numRows($iRs, $iConn, $sCriterio);	
				
				if ($iNumRegs > 0 ){	#Valido que exista al menos un registro
					while ($rows = odbc_fetch_object($iRs)) {				
						$aClaves=array("noControl"=>$rows->ficha_df,"dpcia"=>$rows->cve_ea,"curp"=>trim($rows->curp));
					}
				}
			}
			#else
				#$aClaves=array("noControl"=>0,"dpcia"=>0,"curp"=>"0");
		}
	}
	odbc_close($iConn);
	print_r($aClaves);
	die();*/
	$aUser = $client->call("usuario",array("noControl"=>$usu,"pass"=>$cla,"dep"=>$dep));		
	#$aUser = array('noControl'=>4850,'dpcia'=>130300,'curp'=>'AAFO730125HCHLLS04');
		
	if ($aUser['noControl']==0 || $aUser['dpcia']==0 || $aUser['curp']=="0"){
		$msg= "EL%20USUARIO%20O%20CONTRASEÑA%20SON%20INCORRECTAS%20O%20LA%20DEPENDENCIA";
		header("Location: index.php?msg=$msg&e=$dep");
	}
	else{
		session_register("cioiap");
		session_register("seraes");
		#Sesion con los datos principales del usuario noControl-dpcia-curp
		$aTime=gettimeofday();
		$_SESSION['cioiap'] = $aUser['noControl'].'-'.$aUser['dpcia'].'-'.$aUser['curp'];	
		$_SESSION['seraes'] = sha1($aUser['noControl'].'-'.$aUser['dpcia'].'-'.$aUser['curp']."P3nz1.nE$");
		
		header("Location:saldos.php");
	}	
}
?>