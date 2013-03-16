<?
session_start();
if(isset($_SESSION['USUARIO']))
	unset($_SESSION['USUARIO']);
if(isset($_SESSION['DEPENDENCIA']))
	unset($_SESSION['DEPENDENCIA']);

session_unset();
session_destroy();
$SUrl="index.php";
header("Location: $SUrl");
?>