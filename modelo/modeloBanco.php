<?php


class Banco{


private $CI;
private $n;
private $moneda;
private $tipoN;
private $interes;
private $CF;
private $capitalizacion;

public function __construct($CI, $n, $moneda, $tipoN, $interes, $capitalizacion){
    $this->CI=$CI;
    $this->n=$n;
    $this->moneda=$moneda;
    $this->tipoN=$tipoN;
    $this->interes=$interes;
    $this->CF=0;
    $this->capitalizacion=$capitalizacion;
}

public function calcularInteresSimple($CI, $n, $interes, $tipoN){

    
        $CF=$CI*(1+($interes/100)*$n);
        $this->CF=$CF;
    
        return $CF;
  

}

public function calcularInteresCompuesto($CI, $n, $interes, $tipoN){

    
    $CCF=1+($interes/100);
    $CAF=pow($CCF, $n);
    $CSF=$CI*$CAF;
   
    $CF=round($CSF, $precision = 2, $mode = PHP_ROUND_HALF_UP );
    $this->CF=$CF;

    return $CF;


}

public function montoGenerado(){

    $generado=$this->CF-$this->CI;
    return $generado;
}

public function convertirTiempo($capitalizacion, $tipoN, $n){

    if($capitalizacion == "M" && $tipoN=="M"){

        return $n;

    }else if($capitalizacion == "D" && $tipoN=="D"){

        return $n;

    }else if($capitalizacion == "A" && $tipoN=="A"){

        return $n;

    }else if($capitalizacion == "A" && $tipoN=="M"){
        //MESES A AÑOS
        $tiempo=$n/12;
        return $tiempo;

    }else if($capitalizacion == "A" && $tipoN=="D"){
        //DIAS A AÑOS
        $tiempo=$n/365;
        return $tiempo;

    }else if($capitalizacion == "M" && $tipoN=="D"){
        //DIAS A MESES
        $tiempo=$n/30;
        return $tiempo;

    }else if($capitalizacion == "M" && $tipoN=="A"){
        //AÑOS A MESES
        $tiempo=$n*12;
        return $tiempo;

    }else if($capitalizacion == "D" && $tipoN=="A"){
        //AÑOS A DIAS
        $tiempo=$n*365;
        return $tiempo;

    }else if($capitalizacion == "D" && $tipoN=="M"){
        //MESES A DIAS
        $tiempo=$n*30;
        return $tiempo;

    }

}



}

?>