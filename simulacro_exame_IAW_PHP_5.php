<!DOCTYPE html>

<html>
	<head>
		<title> IAW_PHP | Subida de ficheiros </title>
	</head>
	
	<body>
		<p>
			<h1>Formulario de alta</h1>
			<h5>Realizado por Enrique Garc&iacutea.</h5>
		</p>
		
		<form method='post' action='simulacro_exame_IAW_PHP_5.php'>
			<label for='nombre'>Nombre: </label>
			<input type='text' name='nombre' id='nombre' style='display: block; width: 25%;'/>
			
			<br/>
			<br/>
			
			<label for='email'>Email: </label>
			<input type='text' name='email' id='email' style='display: block; width: 25%;'/>
			
			<br/>
			<br/>
			
			<label for='pagina_web'>P&aacutegina web: </label>
			<input type='text' name='pagina_web' id='pagina_web' style='display: block; width: 25%;'/>
			
			<br/>
			<br/>
			
			<label for='comentario'>Comentario: </label>
			
			<br/>
			
			<textarea id='comentario' name='comentario' rows='4' cols='50'>Escribe un comentario... </textarea>
			
			<br/>
			<br/>
			<br/>
			
			<label for='genero'>G&eacutenero: </label>
			
			<br/>
			
			<label for='genero_hombre'>Hombre </label>
			<input type='radio' name='genero' value='hombre' id='genero_hombre' style='float:left;' checked />
			
			<br/>
			
			<label for='genero_mujer'>Mujer </label>
			<input type='radio' name='genero' value='mujer' id='genero_mujer' style='float:left;'/>
			
			<br/>
			<br/>
			
			<input type='file' name='archivo' id='archivo'/>
			
			<br/>
			<br/>
			
			<input type='submit' name='enviar' id='enviar'/>
		</form>
		
		<?php
		
			//Subida de ficheros: debe crearse o cartafol "archivos_subidos" no cartafol raíz onde se atope este arquivo.
			if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
				$archivoPathTemp = $_FILES['archivo']['tmp_name'];
				$nombreArchivo = $_FILES['archivo']['name'];
				
				//echo "$archivoPathTemp<br/>$nombreArchivo";
				
				$dirSubido = './archivos_subidos/';
				$pathDestino = $dirSubido . $nombreArchivo;
				
				if(move_uploaded_file($archivoPathTemp, $pathDestino))		
					echo "<br/>El archivo ha sido enviado correctamente";
				else
					echo "<br/>Ha ocurrido un error al enviar el archivo. Por favor, revisa que la extensión y el tamaño del archivo sean correctos.";
			}
			
		?>
		
	</body>
</html>
