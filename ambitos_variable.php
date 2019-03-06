<?php

$nombre = "Juan";

function a(){
    /*Para poder acceder a dicha variable de nombre que sta declarada fuera de la funcion si queremo manipularala dentro de un afunciuon
    y despyues retornas ese valor tendremos que poner dentro de la funciojnm global y el nombre del avareialbe
    y al final el sabrá que cuando hacemos en la última linea echo la varible nombre se podrá manipular fuera de su ambito*/
    
    global $nombre;
    $nombre = "El nombre es ". $nombre;
}

a();
echo $nombre;
?>