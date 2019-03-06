<?php

function num_Aleatorio($num1, $num2){
   if (is_numeric($num1) & is_numeric($num2)) {
      echo "Tu numero aleatorio es: ".rand($num1, $num2);
   }else{
      echo "no son numeros";
   }

}

function factorial($num){
   if (is_numeric($num)) {
      $resultado = $num;
      for ($i=$num-1; $i >= 1 ; $i--) { 
         echo $resultado * $i."<br>";
      }
   }else{
      echo "no es un numero";
      exit;
   }

}

factorial(5);

?>