<?php
session_start();
$_SESSION['agenda_users'] = array();

    if (isset($_POST['enviar'])) {
            if (empty($_POST['nombre'])) {
                echo "<h5 style='color: red'>Te falta el nombre para agregar</h5>";
            }
            else if (empty($_POST['numero'])) {
                echo "<h5 style='color: red'>Te falta el telefono para agregar</h5>";
            }

            $nombre = $_POST['nombre'];
            $numero = $_POST['numero'];
            array_push($_SESSION['agenda_users'], $nombre, $numero);
    }
?>

<h2>Nuevo contacto</h2>

<form action="" method="POST">
    <h3>Nombre: </h3>
    <input name="nombre" type="text">
    <br>
    <h3>Numero: </h3>
    <input name="numero" type="text">

    <br>
    <br>
    <input name="enviar" type="submit" value="Enviar">
</form>

<?php

    if(isset($_SESSION['agenda_users'])){
        for ($i=0; $i < count($_SESSION['agenda_users']); $i++) { 
            echo $_SESSION['agenda_users'][$i].'<br>';
        }
    }

//https://es.stackoverflow.com/questions/83253/c%C3%B3mo-guardar-datos-en-una-sesi%C3%B3n-con-php-y-cuando-recargue-la-p%C3%A1gina-muestre-lo
//https://stackoverflow.com/questions/2306159/array-as-session-variable
?>
