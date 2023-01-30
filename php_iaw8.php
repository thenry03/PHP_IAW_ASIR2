<!DOCTYPE html>

<html>
	<head>
		<title> php_iaw8 </title>
	</head>
	
	<body>
		
		<?php
			
			//Declaración de los arrays de vehículos
			$motos = array("Honda", "Yamaha", "Suzuki", "Kawasaki");
			$coches = array("Ferrari", "Lamborghini", "Porsche", "McLaren");
			
			//Mostrar los elementos de dichos arrays
			echo "Estas son las motos: <br/>";
			
			echo "<br/>";
			
			foreach($motos as $moto)
				echo "$moto<br/>";
				
			echo "<br/>";
				
			echo "Estos son los coches: <br/>";
			
			echo "<br/>";
			
			foreach($coches as $coche)
				echo "$coche<br/>";
				
			echo "<br/>";
			
			//Mostrar número de elementos en los arrays
			echo "<br/> El número de elementos en el array de motos es " . count($motos) . "<br/><br/>";
			
		?>
		
		<!-- Petición al usuario -->
		<form method='post' action=''>
			<label for='busqueda'>Busca en el array de motos: </label>
			<input type='sumbit' name='busqueda' id='busqueda'/>
			<input type='submit' value='Buscar'/>
		</form>
			
		<?php
		
			//Búsqueda en el array de motos
			//if($_SERVER['REQUEST_METHOD'] === 'POST' && null !== $_POST['busqueda']) {
			if(isset($_POST['busqueda']) && !empty($_POST['busqueda'])) {
				$busqueda = $_POST['busqueda'];
			
				if(in_array($busqueda, $motos))
					$esta = "";
				else
					$esta = " no";
				
				echo "<br/> <b>La marca " . $busqueda . $esta . " se encuentra en el array de motos.</b><br/>";
			}
			
			//Mostrar la fecha y hora en dos formatos distintos
			echo "<br/> Esta prueba ha sido realizada el día " . date('d-m-Y H:i:s') . ", " . date('Y-m-d H:i:s') . " para los americanos ;-)";
			
		?>
		
	<body/>
</html>