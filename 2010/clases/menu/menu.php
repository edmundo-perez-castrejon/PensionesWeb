<?php
/**
 * @author Agustin Santana Martinez
 * @copyright 2010
 * @descripcion Genera Menu de las dependencias
 */
#require_once("connexion.php");
#$sRuta = $_SERVER['DOCUMENT_ROOT'].'/colimaestado';
#$sRuta = $_SERVER['DOCUMENT_ROOT'];
#require_once($_SERVER['DOCUMENT_ROOT']."/icc/clases/connexion.php");
//implementamos la clase empleado
class menu {
 	//Defino el Recordset	
    private $iMenu = 0;
    private $iDpcia = 0;
	private $sMsg = "";
	private $sMenuLista = '';
	
	//constructor	 	
	public function __construct($dep)
	{
		if (isset($dep) && strlen(trim($dep)) > 0 && is_numeric($dep) && $dep>0) 
        {                        
            $this->iDpcia = $dep;
            
           /* $con = new conecta();
            	       	    
            if($con->conexionGral()==true)
            {   */                                                 				                
                $sTabla="ma_menu mm
                         INNER JOIN de_menu dm ON dm.idmenu_opc = mm.id_menu";
				$sCampos="mm.id_menu, dm.titulo_opc,dm.descripcion_opc,dm.url_opc";
				$sCriterio = "WHERE mm.iddep_menu = ".$this->iDpcia." Order by orden_opc";	                                            
        	 	
                $objSql = new sqlQry(); 			
    			$iRs = $objSql->buscar($sTabla,$sCampos,$sCriterio);			
                
                if ($iRs > 0 && mysql_num_rows($iRs) > 0) {                    
                    $this->sMenuLista ='<ul>';
                    while($aMenu = mysql_fetch_row($iRs)) 
                    {
                        $this->sMenuLista.= '<li><a href="'.$aMenu[3].'" title="'.$aMenu[2].'">'.$aMenu[1].'</a></li>';
                    }
                    $this->sMenuLista.='</ul>';
                    #$this->titulo = trim($aCat[1]);
                    #$this->contenido = trim($aCat[2]);
                    #$this->fecha = trim($aCat[3]);
                    #$this->dependencia = trim($aCat[5]);
                    #$this->pertenece = $aCat[4];
                }
                else
                    $this->sMsg = 'Error: No se encuentra el menú.';          
           /* }
            else
                $this->sMsg = 'Error: Información no disponible en este momento.';*/
        }
        else
            $this->sMsg = 'Error: No existe el contenido que deseas ver';
	}

	public function __destruct() {
	   
	}	
 	            
    public function setIdDpcia($newVal) {
        $this->idDpcia = $newVal;
    }
    
    public function getMenuLista(){        
        return $this->sMenuLista;
    }        	
	
	public function getMsg(){
		return $this->sMsg;
	}
}
?>