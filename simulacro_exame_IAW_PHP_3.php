<!DOCTYPE html>

<html>
	<head>
		<title> IAW_PHP | Arrays </title>
	</head>
	
		<?php
		
			//Arrays
			
			//Apartado A
			$edad = array("Shakira"=>"45", "Piqué"=>"34", "Chía"=>"23");
			
			krsort($edad);
			
			foreach($edad as $x => $x_value) {
				echo "Clave = " . $x . ", Valor = " . $x_value;
				echo "<br>";
			}
			
			echo "<br/>";
		
			//Apartado B
			asort($edad);
			
			foreach($edad as $x => $x_value) {
				echo "Clave = " . $x . ", Valor = " . $x_value;
				echo "<br>";
			}
			
			echo "<br/>";
			
			//Apartado C
			$nombres = array("Shakira", "Piqué", "Chía");
			
			array_push($nombres, "Pelé");
			
			print_r($nombres);
			
			echo "<br/><br/>";
			
			//Apartado D
			$primer_valor = array_shift($nombres);
			
			echo "Así se extrae el primer valor del <b>array</b>: $primer_valor<br/>";
			
			print_r($nombres);

		?>
		
	</body>
</html>