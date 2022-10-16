<<!DOCTYPE html>
<html lang="es">
<head>
    <title>GAIA A ZARATUSTRA</title>
    <meta charset="UTF-8" name="gaia">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="https://kit.fontawesome.com/db4518cf15.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/archivo.css">
</head>
	
	<body>
<?php
/* Primero, comprobar si llegamos al script a través del formulario y si no, redirigir a dicho formulario. */

if ( !isset( $_POST['btn_post'] ) ) {
    header("Location: insertar_post.php");
}

/* Recoger los datos del formulario. */
$link=$_POST['link'];
$titulo=$_POST['titulo'];
$imagen=$_POST['imagen'];
$descripcion_corta=$_POST['descripcion_corta'];
$descripcion=$_POST['descripcion'];
$autor=$_POST['autor'];


	/* 1. Conexión. */
	try {
			
		/* El include nos coge los datos de conexión almacenados en una carpeta privada del servidor. */
		include "conexion.php";
		
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
		$sql1 = "INSERT INTO posts(link, imagen_viaje, titulo_post, descripcion_corta, post, autor) VALUES ('$link','$imagen','$titulo','$descripcion_corta','$descripcion','$autor');";
		/* Ejecuto la consulta. */
		@$resultado = mysqli_query($conexion,$sql1);
		?>
		<div class="registro">
			<h3 class="titulo_registro">!Se ha insertado el nuevo post en la base de datos!</h3>
			<div class="boton_registro">
			<a class="boton registro_btn "href="index.php">Volver al menu</a> 
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