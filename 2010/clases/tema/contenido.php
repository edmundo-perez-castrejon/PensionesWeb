<?php
/**
 * @author Agustin Santana Martinez
 * @copyright 2008
 * @descripcion Permite el uso de las sentencias basicas de SQL.
 */
#require_once("connexion.php");
#$sRuta = $_SERVER['DOCUMENT_ROOT'].'/colimaestado';
#$sRuta = $_SERVER['DOCUMENT_ROOT'];

//implementamos la clase empleado


		
class contenido {

 	//Defino el Recordset
	#private $idCat = 0;
    private $idTema = 0;
    private $idDpcia = 0;
	private $msg = "";
	#private $menu = ""; 
    private $pertenece = 0;
    private $titulo = "";
	private $contenido = '';
    private $fecha = '';
    private $navega = "";
    private $dependencia = '';
	
	//constructor	 	
	public function __construct($tema,$dep)
	{
		require($_SERVER['DOCUMENT_ROOT'].'/2010/clases/conexion.php');
		
		if (isset($tema) && is_numeric($tema) && $tema>0 && isset($dep) && is_numeric($dep) && $dep>0) 
        {            
            $this->idTema = $tema;
            $this->dependencia = $dep;

            #$con = new conecta();
            	       	    
            #if($con->conexionGral()==true)
            #{                                                    				
                $sTabla="webcontenidos as c
                         INNER JOIN cat_dependencias as d ON d.id_dependencia =  c.id_dpcia";
				$sCampos="c.id_cont,c.titulo,c.cuerpo_cont,DATE_FORMAT(c.fecha,'%d/%m/%Y') as fecha, c.id_pertenece, d.dependencia";
				$sCriterio = "WHERE c.id_cont = ".$this->idTema;	
				
				                                            

                $objSql = new sqlQry();
				

				
    			$iRs = $objSql->buscar($sTabla,$sCampos,$sCriterio);		
				
	
				echo $objSql->getMsgError();
				                			
                if ($iRs > 0 && mysql_num_rows($iRs) > 0) {                    
                    $aCat = mysql_fetch_row($iRs);
                    $this->titulo = trim($aCat[1]);
                    $this->contenido = trim($aCat[2]);
                    $this->fecha = trim($aCat[3]);
                    $this->dependencia = trim($aCat[5]);
                    $this->pertenece = $aCat[4];
                }
                else
                    $this->msg = 'Error: No se encuentra el contenido.';          
           # }
            #else
             #   $this->msg = 'Error: Información no disponible en este momento.';
        }
        else
            $this->msg = 'Error: No existe el contenido que deseas ver';
	}

	public function __destruct()
	{
	}	
 
	/*#Metodo para Generar el menu de las categorias
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
	}*/
        
    public function setIdTema($newVal){
        $this->idTema = $newVal;
    }
    
    public function setIdDpcia($newVal){
        $this->idDpcia = $newVal;
    }
    
    public function getTitulo(){        
        return $this->titulo;
    }
    
    public function getCotenido(){        
        return $this->contenido;
    }
    
    public function getFecha(){        
        return $this->fecha;
    }
    
    public function getDpcia(){        
        return $this->dependencia;
    }
    
    public function getNavegacion(){
        if ($this->pertenece > 0) 
        {                
            #$con = new conecta();
            	       	    
            #if($con->conexionGral()==true)
            #{                                                    				
                $sTabla="titulo";
				$sCampos="webcontenidos";
				$sCriterio = "id_cont =  ".$this->pertenece;	                                            
        	 	
                $objSql = new sqlQry(); 			
    			$iRs = $objSql->buscar($sTabla,$sCampos,$sCriterio);			
                
                if ($iRs > 0 && mysql_num_rows($iRs) > 0) {                    
                    $aCat = mysql_fetch_row($iRs);
                    $tmp = $aCat[0];
                    $this->navega = '<a href="tema.php?it='.base64_encode($this->pertenece).'" class="titulo_bold_negro">'.$tmp.'</a>';
                }
                else
                    $this->navega = $this->titulo;       
           # }
            #else
             #   $this->navega = $this->titulo;                                  
        }
        else
            $this->navega = $this->titulo;
        
        return $this->navega;                  
    }	
	
	public function getMsg(){
		return $this->msg;
	}
}
?>