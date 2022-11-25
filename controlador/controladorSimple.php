<?php

require_once("../modelo/modeloBanco.php");


require_once("../views/VistaFormulaSimple.php");

if(isset($_POST['Calcular'])){

    $CI=$_POST['CI'];
    $moneda=$_POST['moneda'];
    $interes=$_POST['interes'];
    $periodos=$_POST['n'];
    $tipoPer=$_POST['tipoN'];

    
    if(empty($CI) || empty($moneda) || empty($interes) || empty($periodos) || empty($tipoPer)){
        echo "<script>
        Swal.fire({
    icon: 'error',
    title: '¡Faltan datos!',
    text: 'Verifique que ha llenado todos los campos',
    confirmButtonColor: '#008037', 
    });
    </script>";
            
    }else{
        $calculo= new Banco($CI, $periodos, $moneda, $tipoPer, $interes);

        $CF=$calculo->calcularInteresSimple($CI, $periodos, $interes, $tipoPer);


        //echo $calculo->montoGenerado();

    
     echo "<h1>"."Luego de $n períodos de tiempo acumularías o pagarías un capital de:"."</h1>";
     echo "<h1>"."Acércate al mostrador más cercano para comenzar tu transacción"."</h1>";
     echo "<h1>"."¡Gracias por elegirnos!"."</h1>";
     echo "<img src='IMG/liceo-impulso.png' width='200' height='200'>";
    }


    
    

}


?>