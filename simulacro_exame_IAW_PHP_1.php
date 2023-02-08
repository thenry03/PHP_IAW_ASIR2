<!DOCTYPE html>

<html>
	<title> IAW_PHP | Votaci&oacuten </title>
	
	<body>
	
		<h1>Formulario para o proceso de votación</h1>
	
		<form method='post' action=''>
			<label for='nome'>Nome: </label>
			<input type='text' name='nome' id='nome'/>
			
			<br/>
			
			<label for='idade'>Idade: </label>
			<input type='text' name='idade' id='idade'/>
			
			<br/>
			
			<input type='submit' name='enviar' id='enviar'/>
		</form>

	<?php

		//Estrutura condicional e datas
		echo "<br/>";
		
		if(isset($_POST['nome']) && isset($_POST['idade'])) {
			$nome = $_POST['nome'];
			$idade = $_POST['idade'];
			
			echo "O seu nome &eacute $nome e ten $idade anos.<br/>";
			
			if($idade >= 18)
				echo "Vostede pode votar.";
			else
				echo "Vostede non pode votar.";
		}
		
	?>
	
	</body>
</html>
