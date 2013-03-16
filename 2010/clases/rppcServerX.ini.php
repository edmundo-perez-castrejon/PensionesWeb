; <?php die("--------accesso denegado--------"); ?>
; Configuracion del servicio de autenticacion
; este archivo es llamado por clsRTServer.php y por authserver.php
;
;------------------------------------------ seccion base de datos
[database]
;direccion del servidor de la base de datos
server = localhost
;login de la base de datos a utilizar
login = corral
;password de la base de datos
password = webcorral05
;------------------------------------------ seccion capas
[authserver]
authserver=http://pensiones.col.gob.mx/polo/authserver.php?wsdl
;------------------------------------------ mensajes
[mensajes]
;mensaje cuando no se peude conectar a la base de datos
dbaconnect=No se puede conectar al servidor contacte a su administrador
;sesion no valida 
invses=sesion no valida
;codigo invalido
_code2=codigo invalido
;no existe el objeto
_code3=no existe el objeto
;no existe el objeto padre
_code4=error, no existe padre
;no existe el objeto abuelo
_code5=error, no existe abuelo
