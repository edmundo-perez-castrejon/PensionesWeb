<?php
/**
 * @author Luis Felipe Sotelo Chávez
 * @copyright 2009
 * @descripcion Obtiene los banners que estén en fecha y exista una imagen para mostrar en el sitio
 * @created 28/10/2009
 */
require_once("banner.php");

class banners{

	private $lstBanners;
	
	//CONSTRUCTOR
	public function __construct($id_dep=0){
	
		$this->lstBanners = array();
		
		$sqlQry = new sqlQry;
		
		$sTabla = "banners_copy";
		$sCampos = "id_banner";
		$sCriterio = "WHERE id_dependencia= ".$id_dep." AND SYSDATE() BETWEEN fecha_inicio AND fecha_fin";
		
		$iRs = $sqlQry->buscar($sTabla,$sCampos,$sCriterio);
		#print_r($iRs);
		$iRegs = mysql_num_rows($iRs);
		
		if($iRegs>0){
		
			while($oRenglon = mysql_fetch_object($iRs)){
				$this->lstBanners[] = new banner($oRenglon->id_banner);
			}
		
		}//if($iRegs>0)
		
	}

	//DESTRUCTOR
	public function __destruct(){
	}
	
	//METODOS ESPECIFICOS (FUNCIONES)
	public function getBanners($rutaBnr = '', $rutaClic = ''){
		if($rutaBnr!=''){

			$sHTML = '';
			foreach($this->lstBanners as $bnr){
				
				if(file_exists($rutaBnr.'/'.$bnr->getbanner())){
					$sHTML .= '<li>';
					if($bnr->getenlace()!=""){
						if($rutaClic!='' && file_exists($rutaClic)){
							$sHTML .= '<a href="'.$rutaClic.'?id='.base64_encode($bnr->getid_banner()).'"';
						}else{
							$sHTML .= '<a href="'.$getenlace().'"';
						}
						if($bnr->gettarget()!=""){
							$sHTML .= ' target="'.$bnr->gettarget().'"';
						}else{
							$sHTML .= ' target="_blank"';
						}
						$sHTML .= '>';
					}
					$sHTML .= '<img width="255" height="75"';
					if($bnr->gettooltip()!=""){
						$sHTML .= ' alt="'.$bnr->gettooltip().'" title="'.$bnr->gettooltip().'"';
					}
					$sHTML .= ' src="thumbBaner.php?f='.$bnr->getbanner().'" border="0" />';
					#$sHTML .= ' src="http://www.colima-estado.gob.mx/archivos_prensa/img/banners/'.$bnr->getbanner().'" border="0" />';
					if($bnr->getenlace()!=""){
						$sHTML .= '</a>';
					}
					$sHTML .= '</li>'."\n\t\t\t\t\t\t\t\t\t\t";
					
				}//if(file_exists)
				
			}//foreach
		}else{//if($ruta!='')
			$sHTML = '<li>Por favor especifique la ruta de los banners</li>';
		}//if($ruta!='')
		//var_dump($this);
		return $sHTML;
	}
}
?>