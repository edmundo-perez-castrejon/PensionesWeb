<?php
        require_once('nusoap.php');
        require_once('clases/clsMysqlDB.php');
        require_once('clases/clsRPPCServer.php');
        $s = new soap_server;
        $s->register('datos_rppc');
        function datos_rppc($codigo){
                // optionally catch an error and return a fault
                if($name == '') {
                        return new soap_fault('Client','','Debe ingresar Codigo Territorial.');
                }
                return "hello $name!";
        }
        $s->service($HTTP_RAW_POST_DATA);
?>
