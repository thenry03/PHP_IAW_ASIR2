<!DOCTYPE html>

<html>
	<title>
		Listado
	</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	
	<body>
	
		<?php
	
			$mysqli = new mysqli('127.0.0.1', 'root', '', 'enrique');
			
			if($mysqli->connect_errno)
				echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			
			echo "<p><b>Resumen de los registros:</p></b>";
			
			$resultado = $mysqli->query("SELECT * FROM personas");
			
			echo "<table class = 'table table-dark'><thead> ";
			echo "<tr><th scope = 'col'>ID</th><th scope = 'col'>Nombre</th><th scope = 'col'>Apellido 1</th><th scope = 'col'>Apellido 2</th><th scope = 'col'> </th><th scope = 'col'> </th></tr></thead>";
			
			while ($columnas = $resultado->fetch_assoc()) {
				echo "<tr><td>" . $columnas['idpersona'] . "</td>";
				echo "<td>" . $columnas['nombre'] . "</td>";
				echo "<td>" . $columnas['apellido1'] . "</td>";
				echo "<td>" . $columnas['apellido2'] . "</td>";
				echo "<td>
						<a href = 'php_iaw11_modificar.php?idpersona=". $columnas['idpersona'] . "'>Modificar</a>
					  </td>";
				echo "<td>
						<a href = 'php_iaw11_eliminar.php?idpersona=". $columnas['idpersona'] . "'>Eliminar</a>
					  </td>";
				echo "</tr>";
			}
			
			echo "</tbody></table>";
			
		?>
		
	</body>
</html> 