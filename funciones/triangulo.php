<?php
/*Este ejercicio consiste en agregar primero el primer for es el que lleva el control y no terminará de iterar
y mandar al for de abajo hasta el numero que le hemos pasado*/

//Después una vez que estamos en el for de abajo cogemos y decimos vale j vale  y hasta que sea menor de $i no va a parar;
//La gracia de esto es que le decimos como 0 es menor que 1 pues pintame un *;
//Luego cuando termine volverá arriba y ahora $i ya no vale 1 vale 2 y vamos al for de abajo y decimos lo mismo
//$j ya no vale 0 ahora vale 1 y como 1 es menor que 2 pintame 2 estrellas ** y itera el for 2 veces y porque $i en 
//ese momento vale 2 y por eso escribe 2 estrellas;
function triangulo($numero){
    for ($i=1; $i <= $numero; $i++) {
        for ($j=0; $j < $i; $j++) { 
            echo "*";
        }
        echo "<br>";
    }

}

triangulo(5);
?>