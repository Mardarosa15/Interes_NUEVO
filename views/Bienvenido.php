<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/CSS/Estilo.css">
    <title>Bienvenido</title>
</head>
<body>
    <div class="div1">
        <form action="" method="post">
        <h1>¡Bienvenido/a al Banco Impulso!</h1>
        <h3>¿Deseas invertir u obtener un préstamo?</h3>
            <input type="submit" value="Sí" name="si">
            <input type="submit" value="No" name="no">
        </form>
    </div>
    <?php
    if (isset($_POST['si'])) {
        require_once('SoC.php');
      header("Location: views/SoC.php");
    }
    if (isset($_POST['no'])) {
        require_once('Chau.php');
      header("Location: views/Chau.php");
    }
    ?>
</body>
</html>
