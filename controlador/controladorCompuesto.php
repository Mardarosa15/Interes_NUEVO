<?php

require_once("../modelo/modeloBanco.php");


require_once("../views/VistaFormulaCompuesto.php");

if(isset($_POST['Calcular'])){

    $CI=$_POST['CI'];
    $moneda=$_POST['moneda'];
    $interes=$_POST['interes'];
    $periodos=$_POST['n'];
    $tipoPer=$_POST['tipoN'];
    $capitalizacion=$_POST['Cap'];

    
    if(empty($CI) || empty($moneda) || empty($interes) || empty($periodos) || empty($tipoPer) || empty($capitalizacion)){
        echo "<script>
        Swal.fire({
    icon: 'error',
    title: '¡Faltan datos!',
    text: 'Verifique que ha llenado todos los campos',
    confirmButtonColor: '#008037', 
    });
    </script>";
            
    }else{
        $calculo= new Banco($CI, $periodos, $moneda, $tipoPer, $interes, $capitalizacion);

        $N=$calculo->convertirTiempo($capitalizacion, $tipoPer, $periodos);
        $CF=$calculo->calcularInteresCompuesto($CI, $N, $interes, $tipoPer);

        

        //echo $calculo->montoGenerado();

        if($tipoPer == 'A'){ $tipoM='años';}else if($tipoPer=='M'){  $tipoM='meses'; }else if($tipoPer=="D"){$tipoM='días';}

        echo "<script>
        
        Swal.fire({
            icon: 'success',
        html: `<h2>Ticket</h2>
        <h4>"."Luego de $periodos ".$tipoM." obtendrás: <strong>".$moneda.$CF."</strong></h4>
        <h4>"."Monto generado: ".$moneda.$calculo->montoGenerado()."</h4>
        <br>
        <h5>"."Acércate al mostrador más cercano para comenzar tu transacción"."</h5>
        <img src='../views/IMG/liceo-impulso.png' width='100' height='100'>
        `,
        }).then(function(){
            window.location = '../index.php';
        });
    </script>";


        /*echo "<h1>"."Luego de $periodos ".$tipoM." acumularías: ".$moneda.$CF."</h1>";
     echo "<h1>"."Acércate al mostrador más cercano para comenzar tu transacción"."</h1>";
     echo "<h1>"."¡Gracias por elegirnos!"."</h1>";
     echo "<img src='IMG/liceo-impulso.png' width='200' height='200'>";*/
    }


    
    

}


?>