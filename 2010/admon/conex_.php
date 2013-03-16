<?php 

function init_variables()                       //iniciliza variables
{
   global $db_server;
   global $db_username;
   global $db_password;
   global $db_name;

   $db_server="localhost";
   $db_username="pensiones";
   $db_password="admin06";
   //$db_username="webcol";
   //$db_password="20asradaweb04";
  // $db_username="pipe";
   //$db_password="sama";
   $db_name="pensiones";

}

function connect_db()                          //conexion a la base de datos
{
  global $db_server;
  global $db_username;
  global $db_password;
  global $db_name;
  MYSQL_CONNECT($db_server,$db_username,$db_password) OR DIE("Imposible conectar a la base de datos");
  @MYSQL_SELECT_DB("$db_name") or die("Imposible seleccionar base de datos");
}

init_variables();
connect_db();
?>