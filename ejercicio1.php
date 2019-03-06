<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ejercicio 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input name="number1" type="number" placeholder="Put first number">
        <input name="number2" type="number" placeholder="Put second number">
        <input type="submit" value="Enviar" name="Enviar">
    </form>

<?php
?>
</body>
</html>