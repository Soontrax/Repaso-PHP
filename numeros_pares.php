<?php

//Almacena en una array los 10 primeros numeros pares; muestralos cada uno en una linea;

$numeros = array();

for ($i=1; $i < 10 ; $i++) { 
    if ($i %2 == 0) {
        array_push($numeros,$i);
    }
}   


for ($j=0; $j < count($numeros); $j++) { 
    echo $numeros[$j];
}
?>