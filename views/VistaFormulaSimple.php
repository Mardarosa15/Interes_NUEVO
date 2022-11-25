<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/CSS/Formularios.css">

    <title>Interés Simple</title>
</head>
<body>
    <div class="div1">
        <form action="" method="post">
        <h1>Interés Simple:</h1>
      <h3> <input type="text"  name="CI" placeholder="Capital de inversión:"></h3>
      <select name="moneda" >
        <option value="">Monetización</option>
        <option value="Dolares">Dólares</option>
        <option value="Pesos">Pesos</option>
      </select></h3>
      <h3> <input type="text" name="interes" placeholder="Interés:"></h3>  
      <h3> <input type="text" name="n" placeholder="Periodos de tiempo:"></h3>
     <h3> <select name="tipoN" >
        <option value="">Capitalización</option>
        <option value="D">Diaria</option>
        <option value="M">Mensual</option>
        <option value="A">Anual</option>
      </select></h3>
            <input type="submit" value="Calcular" name="Calcular" id="boton">
           
        </form>
    
    </div>
</body>
</html>
