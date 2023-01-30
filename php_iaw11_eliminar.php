<?php

	$mysqli = new mysqli('127.0.0.1', 'root', '', 'enrique');
	
	if($mysqli->connect_errno)
				echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

	$sql = "DELETE FROM `enrique`.`personas` WHERE idpersona = " . $_GET['idpersona'];

	/* echo "$sql"; */
	
	$resultado = $mysqli->query($sql);
	
	header("location: php_iaw11_listado.php");
	
?>