<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Formularios.css">
    <title>Interes Compuesto:</title>
</head>
<body>
<div class="div1">
        <form action="" method="post">
        <h1>Interés Compuesto</h1>
      <h3> <input type="text"  placeholder="Capital de inversión:"></h3>
      <select name="slect" >
        <option value="Moneda">Monetización</option>
        <option value="Dolares">Dólares</option>
        <option value="Pesos">Pesos</option>
      </select></h3>
      <h3> <input type="text" placeholder="Interés:"></h3>  
      <h3> <input type="text" name="n" placeholder="Periodos de tiempo:"></h3>
     <h3> <select name="slect" >
        <option value="CApitalizacion">Capitalización</option>
        <option value="D">Diaria</option>
        <option value="M">Mensual</option>
        <option value="A">Anual</option>
      </select></h3>
            <input type="submit" value="Calcular" name="Calcular" id="boton">
            <?php
    if (isset($_POST['Calcular'])) {
      $n = $_POST['n'];
     echo "<h1>"."Luego de $n períodos de tiempo acumularías o pagarías un capital de:"."</h1>";
     echo "<h1>"."Acércate al mostrador más cercano para comenzar tu transacción"."</h1>";
     echo "<h1>"."¡Gracias por elegirnos!"."</h1>";
     echo "<img src='IMG/liceo-impulso.png' width='200' height='200'>";


    }
    ?>
</body>
</html>