<!DOCTYPE html>
<html lang="es">
<head>
    <title>GAIA A ZARATUSTRA</title>
    <meta charset="UTF-8" name="gaia">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="https://kit.fontawesome.com/db4518cf15.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/archivo.css">
</head>
	
	<body>
<?php
/* Primero, comprobar si llegamos al script a través del formulario y si no, redirigir a dicho formulario. */

if ( !isset( $_POST['btn_sugerencia'] ) ) {
    header("Location: contacto.php");
}

/* Recoger los datos del formulario. */
$correo_sug=$_POST['correo_sug'];
$sugerencia=$_POST['sugerencia'];


	/* 1. Conexión. */
	try {
			
		/* El include nos coge los datos de conexión almacenados en una carpeta privada del servidor. */
		include "private/conexion.php";
		
		@$conexion = mysqli_connect($host,$usuario,$pass,$nombreBD);
	} catch (Exception $e) {
		?>
		<p>Error. No se pudo establecer la conexión. Inténtelo más tarde.</p>
		<?php
		die();
	}
	
	/* Para no tener conflictos con acentos y similares, debemos indicarle a la conexión que nuestros datos se encuentran codificados en utf8. Para hacerlo, inmediatamente después de establecer la conexión, ejecutaremos el siguiente comando: */
	mysqli_set_charset($conexion,"utf8");
	
	/* 2. Ejecución de la consulta. */
	try {
		/* Primero, preparamos la consulta. */
		$sql1 = "INSERT INTO sugerencias(correo_sug, contenido_sug) VALUES ('$correo_sug','$sugerencia');";
		/* Ejecuto la consulta. */
		@$resultado = mysqli_query($conexion,$sql1);
		?>
		<div class="registro">
			<h3 class="titulo_registro">!MUCHAS GRACIAS POR TU SUGERENCIA!</h3>
				<div class="texto_camp">
					<p>Hemos recibido tu sugerencia, intentaremos aprender de ella. Si es necesario, en unos dias nos pondremos en contacto contigo via e-mail.</p>
				</div>
			<div class="boton_registro">
			<a class="boton registro_btn "href="index.php">Volver a "Nómadas"</a> 
			</div>
		</div>
		<?php
		
	} catch (Exception $e) {
		?>
		<p>Error. No hemos podido recibir tu sugerencia. Por favor, inténtelo más tarde.</p>
		<?php
		die();
	}
	
	/* 3. Cierre de la conexión. */
	try {
		@mysqli_close($conexion);
		?>
		<!-- <p>La conexión se cerró con éxito.</p> -->
		<?php
	} catch (Exception $e) {
		?>
		<p>Error. No se pudo cerrar la conexión.</p>
		<?php
		die();
	}
	
	?>
	
</body>

</html>