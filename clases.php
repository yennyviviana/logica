<?php


class auto{

    public  $no_llantas;
    public $no_puertas;
    public $no_pasajeros;
    public   $modelo;
    public   $color;
    public  $km_g;

    
    function _construct($no_llantas,$no_puertas,$no_pasajeros) {
    	$this->no_llantas = $no_llantas;
    	$this->no_puertas = $no_puertas;
    	$this->no_pasajeros = $no_pasajeros;
    	date_default_timezone_set('America/Bogota');
    	$this->modelo = date('Y');
    	$this->color ='plata';
    	
    	
  }	
  
  public function calcular_km($gasolina,$km){
        $this->km_g= $km / $gasolina;
 
 
 
 

 } 
 

}


  
?>
   
  