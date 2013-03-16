<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Buscar:</title>
<SCRIPT language="javascript1.1"> 
function trasladar(nombre,clave){
    window.opener.document.<? echo $formulario;?>.<? echo $nombre;?>.value=opener.document.<? echo $formulario;?>.<? echo $nombre;?>.value+nombre+",";
    window.opener.document.<? echo $formulario;?>.<? echo $clave;?>.value=opener.document.<? echo $formulario;?>.<? echo $clave;?>.value+clave+"~";
	window.close();
}
</script>
</head>

<body>
<table width="500" height="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><div align="center">
      <form id="forma" name="forma" method="post" action="buscar.php">
        <table width="300" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Nombre(s):</td>
            <td><label>
              <input name="nom" type="text" id="nom" />
            </label></td>
          </tr>
          <tr>
            <td>Apellido Paterno:</td>
            <td><label>
              <input name="app" type="text" id="app" />
            </label></td>
          </tr>
          <tr>
            <td>apellido Materno: </td>
            <td><label>
              <input name="apm" type="text" id="apm" />
            </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <input type="submit" name="Submit" value="Buscar" />
            </label></td>
          </tr>
        </table>
        </form>
<?
		if(isset($_POST['fsNombre'])){
			require_once('../clases/clsRPPCServer.php');
			$ConBD1 = new clsRPPCServer();	
			$ConnC = $ConBD1 -> clsRPPCServer();
			$lsNombre=strtoupper($_POST['fsNombre']);
			$lsAppaterno=strtoupper($_POST['fsAppaterno']);
			$lsApmaterno=strtoupper($_POST['fsApmaterno']);
			$sql="select nombre,ficha";
			$sql .=" from internet where nombre like '%$nom%' and nombre like '%$app%' and nombre like '%$apm%'";
			$ConnS = $ConBD1 -> informacionArray($sql);
			$veces = count($ConnS)-2;
			if ($veces>0){
				for ($i=0;$i<$veces; $i=$i+4){
					echo  " &nbsp; &nbsp; ".$ConnS[1+$i]." ".$ConnS[2+$i]." ".$ConnS[3+$i];
?>
					<a href="#" onClick="trasladar('<? echo trim($ConnS[1+$i])." ".trim($ConnS[2+$i])." ".trim($ConnS[3+$i])?>','<? echo $ConnS[0+$i]?>')">Seleccionar</a><br>
<?
				}
			}
		}
?>
      </div>
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>