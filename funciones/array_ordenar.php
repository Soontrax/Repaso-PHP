<?php

function agregar($array, $numero){
    $array[] = $numero;
    return $array;
}

function mostrar($array){
    echo "<h2>Esto es el contenido de la array</h2>";
    for ($i=0; $i < count($array); $i++) { 
        echo "El indice $i es = ".$array[$i]."<br>";
    }
}

function ordenar($array){
    for ($i=0; $i < count($array); $i++) {
        for ($j=0; $j < count($array)-1; $j++) { 
            if ($array[$j] > $array[$j+1]) {
                $despues = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $despues;
            }
        }
    }

    echo "<h2>Esto es la array ordenada</h2>";

    for ($i=0; $i < count($array); $i++) {
        echo "El indice $i es = ".$array[$i]."<br>";
    }
}
$a = array();
$a = agregar($a,5);
$a = agregar($a,9);
$a = agregar($a,8);
mostrar($a);
ordenar($a);

?>