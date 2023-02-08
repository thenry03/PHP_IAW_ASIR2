<!DOCTYPE html>

<html>
	<title> IAW_PHP | Suma </title>
	
	<body>
	
		<h1>Suma de dous operandos</h1>
	
		<form method='post' action=''>
			<label for='numero1'>Operando 1:  </label>
			<input type='text' name='numero1' id='numero1'/>
			
			<br/>
			
			<label for='numero2'>Operando 2: </label>
			<input type='text' name='numero2' id='numero2'/>
			
			<br/>
			
			<input type='submit' name='enviar' id='enviar'/>
		</form>

	<?php

		//Suma de operandos
		echo "<br/>";
		
		if(isset($_POST['numero1']) && isset($_POST['numero2'])) {
			$numero1 = $_POST['numero1'];
			$numero2 = $_POST['numero2'];
			
			$resultado = $numero1 + $numero2;
			
			echo "El resultado de la operación es $resultado";
		}
		
	?>
	
	</body>
</html>
