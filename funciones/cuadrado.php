<?php
function cuadrado($numero){
    for ($i=1; $i <= $numero; $i++) { 
        for ($j=0; $j < $numero; $j++) { 
            echo "* ";
        }
        echo "<br>";
    }

}

cuadrado(10);
?>