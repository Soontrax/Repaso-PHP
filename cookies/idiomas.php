<?php
if (isset($_COOKIE['idioma'])) {
    $idiomas = $_COOKIE['idioma'];
    
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

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Agencia de viajes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <h2>Elige un idioma para poder ver la página</h2>


    <div style="display: flex; justify-content: center;">
        <div>
            <a href="ver_cookie.php?idioma=es">
                <img src="img/Flag_of_Spain.svg">
            </a>
        </div>

        <div>
            <a href="ver_cookie.php?idioma=en">
                <img src="img/EE-UU.jpg">
            </a>
        </div>
    </div>

</body>

</html>