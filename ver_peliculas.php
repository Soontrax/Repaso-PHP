<h2>Muestra peliculas</h2>

<form action="" method="POST">
    <select name="mes">
			<option value="enero">Enero
			</option>
			<option value="febrero">Febrero
			</option>
			<option value="marzo">Marzo
			</option>
			<option value="abril">Abril
			</option>
	</select>
    <br>
    <br>
    <input name="enviar" type="submit" value="Enviar">
</form>


<?php
//Realizar un programa que muestre las peicuasl quese han visto. https://www.youtube.com/watch?v=1mRIcyqvXBw

if ($_POST) {
    if (isset($_POST['enviar'])) {
        $mes = $_POST['mes'];

        switch ($mes) {
            case 'enero':
                $result = "En $mes has visto 9 películas";
                break;

            case 'febrero':
                $result = "En $mes has visto 0 películas";
                break;

            case 'marzo':
                $result = "En $mes has visto 14 películas";
                break;

            case 'abril':
                $result = "En $mes has visto 5 películas";
                break;
        }

        echo $result;
    }
}



?>