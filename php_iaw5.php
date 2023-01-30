<!DOCTYPE html>

<html>
	<head>
        <title> php_iaw5 </title>
    </head>

    <body>
	
		<form action="" method="POST">
			<label for="numero">Introduce un número:</label>
			<input type="text" id="numero" name="numero"/>
			<input type="submit" value="Enviar"/>
		</form>

        <?php
			
			if(isset($_POST['numero'])) {
				$numero = $_POST['numero'];
			
				if ($numero % 2 == 0) {
					echo "<br/>";
					echo "Soy un número par";
				}
				else {
					echo "<br/>";
					echo "Soy un número impar";
				}
			}
			
        ?>
		
    </body>
</html>
