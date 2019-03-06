<h2>Calculadora</h2>

<form action="" method="POST">
    <input name="n1" type="text" max="50"> 
    <select name="operador">
			<option value="+">+
			</option>
			<option value="-">-
			</option>
			<option value="*">*
			</option>
			<option value="/">/
			</option>
	</select>
    <input name="n2" type="text" max="50">
    <br>
    <br>
    <input name="enviar" type="submit" value="Enviar">
</form>

<?php
if ($_POST) {

    if (isset($_POST['enviar'])) {
            //Control de parametros
            if (empty($_POST['n1'])) {
                echo "<h5 style='color: red'>Te falta el nombre para agregar</h5>";
            }
            else if (empty($_POST['n2'])) {
                echo "<h5 style='color: red'>Te falta el telefono para agregar</h5>";
            }

            //Control de la elección de la operación aritmética
            $operacion = $_POST['operador'];
            $numero1 = $_POST['n1'];
            $numero2 = $_POST['n2'];

            function calcular($operacion,$numero1,$numero2){
                if ($operacion == "+") {
                    $stmt =  $numero1 + $numero2;
                }
    
                else if ($operacion == "-") {
                    $stmt = $numero1 - $numero2;
                }
    
                else if ($operacion == "*") {
                    $stmt = $numero1 * $numero2;
                }
    
                else if ($operacion == "/") {
                    $stmt = $numero1 / $numero2;
                }

                echo "El resultado es: ".$stmt;
            }

            calcular($operacion,$numero1,$numero2);
        
    }
    
}
?>