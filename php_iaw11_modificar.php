<!DOCTYPE html>

<html>
	<title>
		Modificar
	</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	
	<style type="text/css"/>
	
		table {
			margin:10px;
			padding: 0 5px;
		}
	
		form {
			margin:10px; 
			padding: 0 5px;
			background: #F5F5F5;  
		}
		
		label {
			display:block;
			margin: 1px 0;
			padding: 0 5px;
		}
		
		input.text {
				margin; 5px 0;
		}
	
	</style>
	
	<body>
	
		<?php
	
			$mysqli = new mysqli('127.0.0.1', 'root', '', 'enrique');
			
			if($mysqli->connect_errno)
				echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			
			echo "<p><b>Registro solicitado:</p></b>";
			
			$resultado = $mysqli->query("SELECT * FROM personas WHERE idpersona = " . $_GET['idpersona']);
			
			echo "<table class = 'table table-dark'><thead> ";
			echo "<tr><th scope = 'col'>ID</th><th scope = 'col'>Nombre</th><th scope = 'col'>Apellido 1</th><th scope = 'col'>Apellido 2</th><th scope = 'col'> </th><th scope = 'col'> </th></tr></thead>";
			
			if ($columnas = $resultado->fetch_assoc()) {
				echo "<tr><td>" . $columnas['idpersona'] . "</td>";
				echo "<td>" . $columnas['nombre'] . "</td>";
				echo "<td>" . $columnas['apellido1'] . "</td>";
				echo "<td>" . $columnas['apellido2'] . "</td>";
				echo "<td>
						<a href = 'modificar.php?idpersona=". $columnas['idpersona'] . "'>Modificar</a>
					  </td>";
				echo "<td>
						<a href = 'eliminar.php?idpersona=". $columnas['idpersona'] . "'>Eliminar</a>
					  </td>";
				echo "</tr>";
				echo "</tbody></table>";
			}
			
		?>
		
		<form action="php_iaw11_modificar.php" method="get">
			<p>
				<input type="hidden" name="idpersona" value="<?php echo $columnas['idpersona']?>"/>
			
					Modifique los valores...
			
						<table border=2>
							<tr>
								<td>
									<label for="nombre">
										<b>Nombre</b>
									</label>
									
									<br/>
									
									<input type="text" name="nombre" value="<?php echo $columnas['nombre']?>"/>
									
									<br/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="apellido1">
										<b>Apellido 1</b>
									</label>
									
									<br/>
									
									<input type="text" name="apellido1" value="<?php echo $columnas['apellido1'] ?>"/>
		
									<br/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="apellido2">
										<b>Apellido 2</b>
									</label>
									
									<br/>
									
									<input type="text" name="apellido2" value="<?php echo $columnas['apellido2'] ?>"/>
									
									<br/>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="submit"/>
								</td>
							</tr>
						</table>
			</p>
		</form>
		
		<?php
		
				if (isset($_GET['nombre'])) {
		
					$mysqli = new mysqli('127.0.0.1', 'root', '', 'enrique');
					
					if($mysqli->connect_errno)
						echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
				
					$sql = "UPDATE `enrique`.`personas` SET nombre ='" . $_GET['nombre']."' , apellido1 ='" . $_GET['apellido1']."' ,apellido2 ='" . $_GET['apellido2']."'  WHERE idpersona =". $_GET['idpersona'].";";
				
					echo "$sql";
					
					$resultado = $mysqli->query($sql);
					
					header("location: php_iaw11_listado.php?idpersona=" . $_GET['idpersona']);
				}
		
		?>
		
	</body>
</html> 