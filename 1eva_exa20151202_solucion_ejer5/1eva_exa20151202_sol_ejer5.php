<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
    <title>Adivina mi número</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
</head>

<body>

    <h1>Adivina mi número</h1>

    <?php
        /**
         * Examen 1ª evaluación. Solución al ejercicio 5. Fecha examen 20151202
         * 
         * Adivina un número. El jugador debe adivinar un número generado aleatoriamente en un
         * número limitado de intentos. En cada intento el programa informa si el número introducido
         * es mayor o menor que el número buscado. 
         * 
         * Contiene algunos atributos HTML5
         */
        /* Constantes que limitan entre MINIMO Y MAXIMO el rango del número aleatorio generado. */
        define('MINIMO', 1);
        define('MAXIMO', 50);

        /* MAX_INTENTOS, número de intentos disponibles para el usuario */
        define('MAX_INTENTOS', 6);

        if (isset($_POST["submitButton"]) and isset($_POST["sera_este"])) {
            processForm();
        } else {
            displayForm(rand(MINIMO, MAXIMO));
        }

        function processForm() {
            $adivina = (int) $_POST["adivina"];
            $intentos = (int) $_POST["intentos"] - 1;
            $sera_este = (int) $_POST["sera_este"];

            if ($sera_este == $adivina) {
                displaySuccess($adivina);
            } elseif ($intentos == 0) {
                displayFailure($adivina);
            } elseif ($sera_este < $adivina) {
                displayForm($adivina, $intentos, "Demasiado bajo - ¡Prueba otra vez!");
            } else {
                displayForm($adivina, $intentos, "Demasiado alto - ¡Prueba otra vez!");
            }
        }

        function displayForm($adivina, $intentos = MAX_INTENTOS, $mensaje = "") {
            ?>
    <form action="" method="post">
        <div>
            <input type="hidden" name="adivina" value="<?php echo $adivina ?>" />
            <input type="hidden" name="intentos" value="<?php echo $intentos ?>" />
            <?php if ($mensaje) echo "<p>$mensaje</p>" ?>
            <p>¡Tienes <?php echo $intentos ?>
                <?php echo ( $intentos == 1 ) ? "intento" : "intentos" ?> para adivinarlo!</p>
            <p>¿Cuál crees que es?
                <input type="number" name="sera_este" value="" autofocus required min="<?php echo MINIMO; ?>"
                    max="<?php echo MAXIMO; ?>" style="float: none; width: 3em;" />
                <input type="submit" name="submitButton" value="Intentar" style="float: none;" /></p>
        </div>
    </form>
    <?php
        }

        function displaySuccess($adivina) {
            ?>
    <h2>¡Enhorabuena!</h2>
    <p>Has adivinado mi número: <?php echo $adivina ?>!</p>

    <form action="" method="post">
        <p><input type="submit" name="OtroJuego" value="Otro juego" autofocus style="float: none;" /></p>
    </form>
    <?php
        }

        function displayFailure($adivina) {
            ?>
    <h2>¡Mala suerte!</h2>
    <p>Has agotado los intentos. ¡Mi número era el <?php echo $adivina ?>!</p>

    <form action="" method="post">
        <p><input type="submit" name="OtroJuego" value="Otro juego" autofocus style="float: none;" /></p>
    </form>
    <?php
        }
        ?>
</body>

</html>