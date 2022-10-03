<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 8.3</title>
</head>
<body>

    <?php

    if(array_key_exists('enviar', $_POST)) {
        include("class_lib.php");
        $matriz = new Matriz($_REQUEST['numero']);
        $matriz->mostrar();
    } else {
        ?>

        <form action="lab83.php" method="post">
            Matriz de orden: <input type="number" name="numero" value="0" step="2">
            <input type="submit" name="enviar" value="Generar">
        </form>

        <?php
    }
    
    ?>

</body>
</html>