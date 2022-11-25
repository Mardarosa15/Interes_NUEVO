<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Formularios.css">
    <title>¿Cual Prefieres?</title>
</head>
<body>
    <div class="div1">
        <form action="" method="post">
        <h1>¿Bajo qué tipo de interés?</h1>
        <h3>Acérquese al personal si no sabe las diferencia entre estos.</h3>
            <input type="submit" value="Simple" name="Simple">
            <input type="submit" value="Compuesto" name="Compuesto">
        </form>
    </div>
    <?php
    if (isset($_POST['Simple'])) {
     
      header("Location: ../controlador/controladorSimple.php");
    }
    if (isset($_POST['Compuesto'])) {
      
      header("Location: ../controlador/controladorSimple.php");
    }
    ?>
</body>
</html>
