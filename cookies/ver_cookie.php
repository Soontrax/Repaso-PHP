<?php

if ($_GET) {
    setcookie("idioma", $_GET['idioma'], time()+3600);
    $idiomas = $_GET['idioma'];

    switch ($idiomas) {
        case 'es':
            header("Location:español.php");
            break;

        case 'en':
            header("Location:english.php");
            break;
    }
}
?>