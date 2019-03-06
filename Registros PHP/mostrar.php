<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mostrar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>

<?php
    if (isset($_POST["idiomas"])) {
        $_SESSION["idioma"] = $_POST["idiomas"];
    }

    if (isset($_POST["perfil_publico"])) {
        $_SESSION["perfil"] = $_POST["perfil_publico"];
    }

    if (isset($_POST["Zona_horaria"])) {
        $_SESSION["Hora"] = $_POST["Zona_horaria"];
    }

?>

<div id=centro style="width: 250px;margin: auto;border: 1px solid black;padding: 20px;">

<h2>Preferencias</h2>

<?php
    if (isset($_POST["borrar"])) {
        echo "<p style='background-color: yellow;text-align:center;'>Información borrada en la sesión</p>";
        session_destroy();
    }else{
        echo "";
    }
    
?>

<br>

<h4>Idioma:</h4>
<br>
<?php
if (isset($_SESSION["idioma"])) {
    echo $_SESSION["idioma"];
}else{
    echo "";
}
?>

<br>

<h4>Perfil Público:</h4>
<br>
<?php
if (isset($_SESSION["perfil"])) {
    echo $_SESSION["perfil"];
}else{
    echo "";
}
?>

<br>

<h4>Zona horaria:</h4>
<br>
<?php
if (isset($_SESSION["Hora"])) {
    echo $_SESSION["Hora"];
}else{
    echo "";
}
?>

<br>
<br>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method=POST>
<input type="submit" name="borrar" value="Borrar Preferencias">
<br>
<br>
<a href="preferencias.php">
Establecer Preferencias
</a>

</form>

</div>
    
</body>
</html>