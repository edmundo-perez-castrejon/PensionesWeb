<?php
/**
 * @author Luis Felipe Sotelo Chávez
 * @copyright 2009
 * @descripcion Obtiene los banners que estén en fecha y exista una imagen para mostrar en el sitio
 * @created 28/10/2009
 */
require_once($_SERVER['DOCUMENT_ROOT'].'/icc2010/clases/sql.php');

class banner{
	//DECLARACION DE VARIABLES
	private $id_banner = 0;
	private $banner = '';
	private $tooltip = '';
	private $enlace = '';
	private $target = '';
	private $fecha_inicio = '';
	private $fecha_fin = '';
	private $total_clics = 0;

	//CONSTRUCTOR
	public function __construct($id_banner = 0){
		if($id_banner != 0){
			$sqlQry = new sqlQry;
			
			$sTabla = "banners_copy";
			$sCampos = "id_banner, banner, tooltip, enlace, target, fecha_inicio, fecha_fin, total_clics";
			$sCriterio = "WHERE id_banner = ".$id_banner." LIMIT 1";
			
			$iRs = $sqlQry->buscar($sTabla,$sCampos,$sCriterio);
			$iRegs = mysql_num_rows($iRs);
			
			if($iRegs>0){
				$oRenglon = mysql_fetch_object($iRs);
		
				$this->id_banner = $oRenglon->id_banner;		//int identity
				$this->banner = $oRenglon->banner;				//varchar
				$this->tooltip = $oRenglon->tooltip;			//varchar
				$this->enlace = $oRenglon->enlace;				//varchar
				$this->target = $oRenglon->target;				//varchar
				$this->fecha_inicio = $oRenglon->fecha_inicio;	//datetime
				$this->fecha_fin = $oRenglon->fecha_fin;		//datetime
				$this->total_clics = $oRenglon->total_clics;	//int
			}//if($iRegs>0)
		}
	}

	//DESTRUCTOR
	public function __destruct(){
	}
	
	//METODOS ESPECIFICOS (FUNCIONES)
	public function Aumenta_Clic(){
		$sqlQry = new sqlQry;
		
		$sTabla = "banners_copy";
		$sDatos = "total_clics = ".($this->gettotal_clics()+1);
		$sCriterio = "id_banner = ".$this->getid_banner();
		
		$iRs = $sqlQry->actualizar($sTabla,$sDatos,$sCriterio);
		
		if($iRs>0){
			return true;
		}else{
			return false;
		}
	}
	
	//METODOS SETS
	public function setid_banner($valor){
		$this->id_banner = $valor;
	}
	
	public function setbanner($valor){
		$this->banner = $valor;
	}
	
	public function settooltip($valor){
		$this->tooltip = $valor;
	}
	
	public function setenlace($valor){
		$this->enlace = $valor;
	}
	
	public function settarget($valor){
		$this->target = $valor;
	}
	
	public function setfecha_inicio($valor){
		$this->fecha_inicio = $valor;
	}
	
	public function setfecha_fin($valor){
		$this->fecha_fin = $valor;
	}
	
	public function settotal_clics($valor){
		$this->total_clics = $valor;
	}
	
	//METODOS GETS
	public function getid_banner(){
		return $this->id_banner;
	}
	
	public function getbanner(){
		return $this->banner;
	}
	
	public function gettooltip(){
		return $this->tooltip;
	}
	
	public function getenlace(){
		return $this->enlace;
	}
	
	public function gettarget(){
		return $this->target;
	}
	
	public function getfecha_inicio(){
		return $this->fecha_inicio;
	}
	
	public function getfecha_fin(){
		return $this->fecha_fin;
	}
	
	public function gettotal_clics(){
		return $this->total_clics;
	}
}
?>