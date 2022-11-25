<?php


class Banco{


private $CI;
private $n;
private $moneda;
private $tipoN;
private $interes;
private $CF;

public function __construct($CI, $n, $moneda, $tipoN, $interes){
    $this->CI=$CI;
    $this->n=$n;
    $this->moneda=$moneda;
    $this->tipoN=$tipoN;
    $this->interes=$interes;
    $this->CF=0;
}

public function calcularInteresSimple($CI, $n, $interes, $tipoN){

    if($tipoN=="A"){ 

        $CF=$CI*(1+($interes/100)*($n));
        $this->CF=$CF;
    
        return $CF;
     
    }else if($tipoN=="M"){

        $per=$n/12;
        $CF=$CI*(1+($interes/100)*$per);
        $this->CF=$CF;
    
        return $CF;
    }else if($tipoN=="D"){
        
        $per=$n/365;
        $CF=$CI*(1+($interes/100)*$per);
        $this->CF=$CF;
    
        return $CF;
    }

}

public function montoGenerado(){

    $generado=$this->CF-$this->CI;
    return $generado;
}





}

?>