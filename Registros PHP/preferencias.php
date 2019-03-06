<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Preferencias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>

<div id=centro style="width: 250px;margin: auto;border: 1px solid black;padding: 20px;">

<h2>Preferencias</h2>

<br>

<?php
    if (isset($_POST["enviar"])) {
        echo "<p style='background-color: yellow;text-align:center;'>Información guardada en la sesión</p>";
    }else{
        echo "";
    }
    
?>

<?php
//<?php echo $_SERVER['PHP_SELF']; ?>


<form action="mostrar.php" method=POST id="formulario">

<h4>Idioma:</h4>
<select name="idiomas" form="formulario">
  <option value="español">español</option>
  <option value="ingles">Inglés</option>
</select>

<h4>Perfil público:</h4>
<select name="perfil_publico" form="formulario">
  <option value="si">Sí</option>
  <option value="no">No</option>
</select>

<h4>Zona Horaria:</h4>
<select name="Zona_horaria" form="formulario">
  <option value="GMT-2">GMT-2</option>
  <option value="GMT+1">GMT+1</option>
  <option value="GMT+2">GMT+2</option>
  <option value="GMT-1">GMT-1</option>
  <option value="GMT">GMT</option>
</select>
<br>
<br>

<input type="submit" name="enviar" value="Establecer Preferencias">
<br>
<br>
<a href="mostrar.php">
Mostrar Preferencias
</a>

</form>

</div>
    
</body>
</html>
