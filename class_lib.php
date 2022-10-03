<?php

class NumeroEntero {
    private $valor;

    public function __construct($numero) {
        if($numero >= 1)
            $this->valor = $numero;
    }

    function factorial() {
        if($this->valor == 1) {
            return $this->valor;
        } else {
            $resultado = 1;
            for($i = 2; $i <= $this->valor; $i++) {
                $resultado = $resultado * ($i);
            }
            return $resultado;
        }
    }
}

class Arreglo {
    private $vector = array();
    private $mayor = 0;

    public function __construct($tam) {
        for($i = 0; $i <= $tam - 1; $i++) {
            $nvoNum = generarRandom(1, 100);
            while(in_array($nvoNum, $this->vector)) {
                $nvoNum = generarRandom(1,100);
            }
            array_push($this->vector, $nvoNum);
            if($nvoNum > $this->mayor)
                $this->mayor = $nvoNum;
        }
    }

    public function mostrar() {
        echo "<br> Mostrando arreglo:<br>";
        foreach($this->vector as $numero) {
            echo "<br> $numero";
        }
        echo "<br><br>El mayor de los números es: $this->mayor <br>";
    }
}

class Matriz {
    private $arreglo;

    public function __construct($tam) {
        $this->arreglo = array();
        for($i = 0; $i < $tam; $i++) {
            $fila = array();
            for($j = 0; $j < $tam; $j++) {
                $valor = 0;
                if($i == $j) {
                    $valor = 1;
                }
                array_push($fila, $valor);
            }
            array_push($this->arreglo, $fila);
        }
    }

    public function mostrar() {
        echo "<table border=1>";
        foreach($this->arreglo as $fila) {
            echo "<tr>";
            foreach($fila as $valor) {
                echo "<td  width=20><center>$valor</center></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}



function generarRandom($inicio, $fin) {
    return rand($inicio, $fin);
}

?>