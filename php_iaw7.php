<!DOCTYPE html>

<html>
	<head>
		<title> php_iaw7 </title>
	</head>
	
	<body>
		
		<form action="" method="post">
		<label for="numero">Introduce la nota del alumno:</label>
		<input type="text" name="nota"/>
		<input type="submit" value="Enviar"/>
		
		<?php
		
			if(isset($_POST['nota'])) {
				$nota = $_POST['nota'];
				
				switch($nota) {
					case 10:
					case 9:
						$calificacion = "Sobresaliente";
						break;
					case 8:
					case 7:
						$calificacion = "Notable";
						break;
					case 6:
					case 7:
						$calificacion = "Bien";
						break;
					case 5:
						$calificacion = "Suficiente";
						break;
					default:
						$calificacion = "Insuficiente";
				}
				
				echo "<br/>";
				echo "$calificacion";
			}
			
		?>
		
	<body/>
</html>