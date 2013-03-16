<?php
/**
 * @author Agustin Santana Martinez
 * @copyright 2008
 * @descripcion Permite el uso de las sentencias basicas de SQL.
 */
#require_once("connexion.php");
#$sRuta = $_SERVER['DOCUMENT_ROOT'].'/colimaestado';
#$sRuta = $_SERVER['DOCUMENT_ROOT'];
#require_once($sRuta."/webcol/clases/connexion.php");
//implementamos la clase empleado
class tema{
 	//Defino el Recordset
	#private $idCat = 0;
    private $idTema = 0;
    private $idDpcia = 0;
	private $msg = "";
	private $menu = ""; 
    private $tema = "";
	private $cuertpo = '';
    private $navega = "";
	
	//constructor	 	
	public function __construct()
	{
		$con = new conecta();	   
	    //usamos el metodo conectar para realizar la conexion
		#echo $this->idCat.$this->idTema."XXX";
        if($con->conexionGral()==true){
            
            if ($this->idTema > 0) {
                
				$sTabla="cat_dependencias d, temas_relacionados t";
				$sCampos="t.tema";
				$sCriterio = "WHERE t.id_tema=".$this->idTema." AND d.id_dependencia=".$this->idDpcia;	                                            
        	 	
                $objSql = new sqlQry(); 			
    			$iRs = $objSql->buscar($sTabla,$sCampos,$sCriterio);			
                
                if ($iRs > 0 && mysql_num_rows($iRs) > 0) {                    
                    $aCat = mysql_fetch_row($iRs);
                    $this->tema = $aCat[0];
                }
            }
        }
	}

	public function __destruct()
	{
	}	
 
	#Metodo para Generar el menu de las categorias
	public function getMenu(){
        //creamos el objeto $con a partir de la clase DBManager
		$con = new conecta;	   
	    //usamos el metodo conectar para realizar la conexion
		if($con->conexionGral()==true){
			if ($this->idTema > 0) {                
                $objSql = new sqlQry();
    			                
                $sTabla="categorias";
                $sCampos="id_categoria,categoria";
                $sCriterio="WHERE id_tema=".$this->idTema." ORDER BY categoria";	
                
    			$iRs = $objSql->buscar($sTabla,$sCampos,$sCriterio);			
                
                if ($iRs > 0 && mysql_num_rows($iRs)) {                    
                    $sTmp = '<table align="center" width="100%" border="0" cellspacing="1" cellpadding="0">';
                    
                    while($aCont = mysql_fetch_row($iRs)){
                        $sTmp.= '<tr>
                                  <td align="left"><a href="categoria.php?ic='.$aCont[0].'&it='.$this->idTema.'" class="enlaces_secciones">'.$aCont[1].'</a></td>
                                </tr>'; 
                    }
                    
                    $sTmp.= '</table>';
                    
                    $this->menu = $sTmp;
                }
            }
		}
		return $this->menu;
	}
        
    public function setIdTema($newVal){
        $this->idTema = $newVal;
    }
    
    public function setIdDpcia($newVal){
        $this->idDpcia = $newVal;
    }
    
    public function getTituloTema(){
        //creamos el objeto $con a partir de la clase DBManager
		$con = new conecta();	   
	    //usamos el metodo conectar para realizar la conexion
		#echo $this->idCat.$this->idTema."XXX";
        if($con->conexionGral()==true){
            
            if ($this->idTema > 0) {
                
				$sTabla="cat_dependencias d, temas_relacionados t";
				$sCampos="t.tema";
				$sCriterio = "WHERE t.id_tema=".$this->idTema." AND d.id_dependencia=".$this->idDpcia;	                                            
        	 	
                $objSql = new sqlQry(); 			
    			$iRs = $objSql->buscar($sTabla,$sCampos,$sCriterio);			
                
                if ($iRs > 0 && mysql_num_rows($iRs) > 0) {                    
                    $aCat = mysql_fetch_row($iRs);
                    $this->tema = $aCat[0];
                }
            }
        }
		
        return $this->tema;
    }
    
    public function getNavegacion(){
        if ($this->idTema > 0) {                
            $sTmp = '&nbsp;'.$this->getTema();  #Tema            
            $this->navega = $sTmp;                
        }    
        return $this->navega;       
    }		
	
	/*public function getMsg(){
		return $this->msg;
	}*/
}
?>