<!DOCTYPE html>

<html>
	<head>
		<title> php_iaw6 </title>
	</head>
	
	<body>
		
		<form action="" method="post">
		<label for="numero">Introduce dos enteros:</label>
		<input type="text" name="entero1"/>
		<input type="text" name="entero2"/>
		<input type="submit" value="Enviar"/>
		
		<?php
		
			//Conocer el mayor de dos enteros mediante el uso de un "if"
			if(isset($_POST['entero1'], $_POST['entero2'])) {
				$entero1 = $_POST['entero1'];
				$entero2 = $_POST['entero2'];
			
				if($entero1 > $entero2) {
					echo "<br/>";
					echo "$entero1 es mayor que $entero2";
				}
				
				else {
					echo "<br/>";
					echo "$entero2 es mayor que $entero1";
				}
			}
			
		?>
		
	<body/>
</html>