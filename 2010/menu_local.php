<?php
try {  
    $menu= '';
    $iDpcia = 190000;   #Pensiones
    
    $wsMenu = new SoapClient("http://www.colima-estado.gob.mx/ws/wsMenuV2.php?wsdl");
    $result = $wsMenu->menuXml($iDpcia); 
    
    $xmlMenu = simplexml_load_string($result);
    
    if (!empty($xmlMenu) && isset($xmlMenu->opcion)){
        $x = 1;
        $menu = '<ul>'.chr(13).hijos($xmlMenu,$x).'</ul>';
    }               
} catch (SoapFault $E) {  
    $menu= '';
}

function hijos($hijos,$x){
    $tmpMenu = '';
    foreach($hijos as $opcion) {        
        if (isset($opcion->titulo) && !empty($opcion->titulo))
        {
            if (isset($opcion->target) && strlen(trim(base64_decode($opcion->target))) > 0)
                $tmpMenu.= '    <li><a href="'.$opcion->url.'" id="opt_'.$x.'" target="'.trim(base64_decode($opcion->target)).'">'.htmlentities(base64_decode($opcion->titulo)).'</a></li>'.chr(13);                
            else
                $tmpMenu.= '    <li><a href="'.$opcion->url.'" id="opt_'.$x.'">'.htmlentities(base64_decode($opcion->titulo)).'</a></li>'.chr(13);
                
            if (isset($opcion->hijos->opcion) && !empty($opcion->hijos->opcion)) {
                $x++;
                $tmpMenu.= hijos($opcion->hijos->opcion,$x);
            }

            $x++;
        }                            
    }
    
    return $tmpMenu;
} 

echo $menu; 
?>