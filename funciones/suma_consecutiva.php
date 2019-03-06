<?php
/*Este problema consiste en sumar todos los numeros desde el 1 hasta el numero que nos han pasado*/

function suma($numero){
    $stmt = 0;
    //Recorremos del 1 hasta el numeros que le hemos pasado en mi caso el 4;
    for ($i=1; $i <= $numero; $i++) {
        //Lo que hace esta operación es la variable $stmt vale 0 eso esta claro y lo que hacemos es sumamos $stmt = 0 +  $i = 1 = 1 ahora $stmt vale 1;
        //Ahora $stmt vale 1 gracias a la suma de antes otra vez la operacion $stmt = 1 + $i = 2 = 3. Ahora $stmt vale 3 por la suma que hemos echo.
        //Otra vez la operacion $stmt = 3 + $i = 3 = 6 ahora $stmt vale 6;
        //Otra vez la operacion $stmt = 6 + $i = 4 = 10 Encaja perfectamente con el resultado es pura matemática.
        $stmt = $stmt + $i;
    }

    /*Basicamente conisten en suamr los resultados y agregarlos a una variable y con ese resultaado de la suma junto al iterador conseguiremos
    ese efecto de suma*/

    echo $stmt;
}

suma(4);//Suma 1 + 2 + 3 + 4 = 10 
?>