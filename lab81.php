<?php

include("class_lib.php");

$numero = $_POST['numero'];

$valor = new NumeroEntero($numero);

echo "<br>El factorial de $numero es: ", $valor->factorial(),"<br>";

?>