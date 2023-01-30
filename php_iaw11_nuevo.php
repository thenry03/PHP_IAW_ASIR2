<?php
			
	$mysqli = new mysqli('127.0.0.1', 'root', '', 'enrique');
	
	if($mysqli->connect_errno)
				echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

	$sql = "INSERT INTO `enrique`.`personas` (`nombre`,`apellido1`,`apellido2`) VALUES ('".$_GET["nombre"]."','".$_GET["apellido1"]."','".$_GET["apellido2"]."');";
	
	/* echo "$sql"; */
	
	$resultado = $mysqli->query($sql);
	
	header("location: php_iaw11_listado.php");
	
?>