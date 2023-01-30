<!DOCTYPE html>

<html>
	<head>
        <title> php_iaw4 </title>
    </head>

    <body>

        <?php
			
			//Tabla de multiplicar del 9
			$numero_multiplicado = 9;
			
			for($i =0; $i <= 10; $i++) {
				$resultado = $numero_multiplicado * $i;
				echo("9 x $i = $resultado");
				echo("<br/>");
			}
		
        ?>

    </body>
</html>
