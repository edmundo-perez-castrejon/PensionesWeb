<?php
/***************************
Fecha: 15-Ene-2005
Codigo: Archivo de Clases
		En ese script se declaran clases para la realizar las operaciones basicas en una BD de MySql
		INSERT,SELECT,UPDATE y DELETE		
Autor: Maximo Anguiano Gutierrez
Version:0.1
***************************/
require_once("conexcion.php");
require_once("sql.php");
//implementamos la clase empleado


class RegistroPrestamo{
	var $NoControl;
	var $Nombre;
	var $NoDependencia;
	var $Domicilio;
	var $Telefono;
	var $Lugar;
	var $Empleo;
	var $FechaIngreso;
	var $Ofi_Adscripcion;
	var $Dependencia;
	var $FecNombramiento;
	var $Ofi_Sueldo;
	var $Sueldo_Mes;
	var $Descuento;
	var $Cantidad_Prestamo;
	var $Plazo;
	var $Tipo_Fondo;
	var $Estatus;
	
	var $NoPrestamo;
	var $NoControlAval;
	var $NombreAval;
	var $NoDependenciaAval;
	var $NombreDependenciaAval;
	var $DomicilioAval;
	var $CantidadAvaladaAval;
	
	//var $Nombre;
	//var $Domicilio;
	//var $Telefono;
	//var $Lugar;
	//var $Empleo;
	//var $FechaIngreso;
	//var $Dependencia;
	
	
	
	
	public function SetNoPrestamo($NoPrestamo){
		$this->NoPrestamo = $NoPrestamo;}
		
	public function SetNoControlAval($NoControlAval){
		$this->NoControlAval = $NoControlAval;}
		
	public function SetNombreAval($NombreAval){
		$this->NombreAval = $NombreAval;}
		
	public function SetNoDependenciaAval($NoDependenciaAval){
		$this->NoDependenciaAval = $NoDependenciaAval;}
	public function SetNombreDependenciaAval($NombreDependenciaAval){
		$this->NombreDependenciaAval = $NombreDependenciaAval;}
	public function SetDomicilioAval($DomicilioAval){
		$this->DomicilioAval = $DomicilioAval;}
	public function SetCantidadAvaladaAval($CantidadAvaladaAval){
		$this->CantidadAvaladaAval = $CantidadAvaladaAval;}
		
	function GetNoPrestamo(){
		return $this->NoPrestamo;}
	function GetNoControlAval(){
		return $this->NoControlAval;}
	function GetNombreAval(){
		return $this->NombreAval;}
	function GetNoDependenciaAval(){
		return $this->NoDependenciaAval;}
	function GetNombreDependenciaAval(){
		return $this->NombreDependenciaAval;}
	
	function GetDomicilioAval(){
		return $this->DomicilioAval;}
	function GetCantidadAvaladaAval(){
		return $this->CantidadAvaladaAval;}
		
	//#Region "Solicitante"
	
	//Declaracion de funciones de asignacion de variables
	public function SetNoControl($NoControl){
		
		//echo "NumCo=".$NoControl." ";
		
		$this->NoControl = $NoControl;
		//$this->NoControl = $NoControl;
		//echo "NumCo=".$this->NoControl." ";
	}
	
	public function SetNombre($Nombre){
		$this->Nombre = $Nombre;
	}
	
	public function SetTelefono($Telefono){
		$this->Telefono = $Telefono;
	}
	
	public function SetLugar($Lugar){
		$this->Lugar = $Lugar;
	}
	
	
	public function SetEmpleo($Empleo){
		$this->Empleo = $Empleo;
	}
	
	public function SetFechaIngreso($FechaIngreso){
		$this->FechaIngreso = $FechaIngreso;
	}
	
	public function SetDependencia($Dependencia){
		$this->Dependencia = $Dependencia;
	}
	
	//var $Telefono;
	//var $Lugar;
	//var $Empleo;
	//var $FechaIngreso;
	//var $Dependencia;
	function SetNoDependencia($NoDependencia){
		$this->NoDependencia = $NoDependencia;
	}
		
	function SetDomicilio($Domicilio){
		$this->Domicilio = $Domicilio;
	}
	
	function SetOfi_Adscripcion($Ofi_Adscripcion){
		$this->Ofi_Adscripcion = $Ofi_Adscripcion;
	}
	
	function SetFecNombramiento($FecNombramiento){
		$this->FecNombramiento = $FecNombramiento;
	}
	
	function SetOfi_Sueldo($Ofi_Sueldo){
		$this->Ofi_Sueldo = $Ofi_Sueldo;
	}
		
	function SetSueldo_Mes($Sueldo_Mes){
		$this->Sueldo_Mes = $Sueldo_Mes;
	}
	
	function SetDescuento($Descuento){
		$this->Descuento = $Descuento;
	}
	
	function SetCantidad_Prestamo($Cantidad_Prestamo){
		$this->Cantidad_Prestamo = $Cantidad_Prestamo;
	}
	
	function SetPlazo($Plazo){
		$this->Plazo = $Plazo;
	}
	
	function SetTipo_Fondo($Tipo_Fondo){
		$this->Tipo_Fondo = $Tipo_Fondo;
	}
	
	function SetEstatus($Estatus){
		$this->Estatus = $Estatus;
	}
	
	
	//Declaracion de funciones de retorno de valores
	function GetNoControl(){
		return $this->NoControl;
	}
	
	function GetNoDependencia(){
		return $this->NoDependencia;
	}
		
	function GetDomicilio(){
		return $this->Domicilio;
	}
	
	function GetOfi_Adscripcion(){
		return $this->Ofi_Adscripcion;
	}
	
	function GetFecNombramiento(){
		return $this->FecNombramiento;
	}
	
	function GetOfi_Sueldo(){
		return $this->Ofi_Sueldo;
	}
		
	function GetSueldo_Mes(){
		return $this->Sueldo_Mes;
	}
	
	function GetDescuento(){
		return $this->Descuento;
	}
	
	function GetCantidad_Prestamo(){
		return $this->Cantidad_Prestamo;
	}
	
	function GetPlazo(){
		return $this->Plazo = $Plazo;
	}
	
	function GetTipo_Fondo(){
		return $this->Tipo_Fondo;
	}
	
	function GetEstatus(){
		return $this->Estatus;
	}
	
	
	#Metodo para Agregar Prestamo
	public function RegistrarPrestamo(){
	   //creamos el objeto $con a partir de la clase DBManager
	    $sDatabase="pensionesdb";
	    $sTabla="ma_prestamocortoplazo";
	    
		$sCampos="NoControl,Nombre,NoDependencia,Domicilio,Telefono,Lugar,Empleo,FechaIngreso,";
		$sCampos=$sCampos."Ofi_Adscripcion,Dependencia,FecNombramiento,Ofi_Sueldo,Sueldo_Mes,";
	    $sCampos=$sCampos."Descuento,Cantidad_Prestamo,Plazo,Tipo_Fondo,Estatus,FechaCaptura";
		
		
	
		
	    $sDatos=$this->NoControl.",'".$this->Nombre."',".$this->NoDependencia.",'".$this->Domicilio."','".$this->Telefono."','";
		$sDatos=$sDatos.$this->Lugar."','".$this->Empleo."','".$this->FechaIngreso."','".$this->Ofi_Adscripcion."','";
		$sDatos=$sDatos.$this->Dependencia."','".$this->FecNombramiento."','".$this->Ofi_Sueldo."',".$this->Sueldo_Mes.",";
		$sDatos=$sDatos.$this->Descuento.",".$this->Cantidad_Prestamo.",".$this->Plazo.",".$this->Tipo_Fondo.",".$this->Estatus.",NOW()";
		
		
		//var $Telefono;
	//var $Lugar;
	//var $Empleo;
	//var $FechaIngreso;
	//var $Dependencia;
	
		$QuerySql = new sqlQry();
		
		//$id=1;//QuerySql->agregarId($sTabla,$sCampos,$sDatos);
		
		$id=$QuerySql->agregarId($sTabla,$sCampos,$sDatos); 
		//echo $id;
		return $id;
		  
	} 
		
	#Metodo para Agregar Prestamo
	
	
	
	
	public function RegistrarAval(){
	   
	   
		
		$sTabla="da_avalprestamocortoplazo";
	    
		$sCampos="NoPrestamo,NoControlAval,NombreAval,NoDependenciaAval,NombreDependencia,Domicilio_Aval,Cantidad_Avalada";

		//NoPrestamo 
		//NoControlAval 
		//NombreAval 
		//NoDependenciaAval 
		//NombreDependenciaAval
		//DomicilioAval 
		//SetCantidadAvaladaAval	
		
		$sDatos=$this->NoPrestamo.",".$this->NoControlAval.",'".$this->NombreAval."',".$this->NoDependenciaAval.",'".$this->NombreDependenciaAval."','";
		$sDatos=$sDatos.$this->DomicilioAval."',".$this->CantidadAvaladaAval;
		
		$QuerySql = new sqlQry();
		$id=$QuerySql->agregarId($sTabla,$sCampos,$sDatos); 
		return $id;
		
		//return 1;//QuerySql->agregar($sTabla,$sCampos,$sDatos);
				
	} 
}
	//#End Region "Solicitante"
?>