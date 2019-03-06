<?php
	$nombre_archivo = $_FILES["archivo"]["name"];
	$directorio = "img/";
	if(isset($_POST["subeArchivo"])){
		move_uploaded_file(($_FILES["archivo"]["tmp_name"]), $directorio.$nombre_archivo);
		echo '<img src="'.$directorio.$nombre_archivo.'">';
	}
?>