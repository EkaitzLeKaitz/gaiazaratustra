<!DOCTYPE html>
<html lang="es">
    <title>GAIA A ZARATUSTRA</title>

    <meta charset="UTF-8" name="gaia">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="https://kit.fontawesome.com/db4518cf15.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/archivo.css">
   
	
	<body>
		<div class="contenedor_web">
			<article>
				<header>
					<h1>CREAR POST</h1>
				</header>
				<div class="contenedor_forms">
                    <div class="form_container">    
                        <form method="post" class="form" action="backend_post.php">
                            <h3 class=form_title>Link del Post:</h3>
                            <input type="text" class="form_input" placeholder="Link del post"  name="link" required>                            
                            <h3 class=form_title>Título:</h3>
                            <input type="text" class="form_input" placeholder="titulo"  name="titulo" required>
                            <h3 class=form_title>Imagen:</h3>
                            <input type="text" class="form_input" placeholder="imagen"  name="imagen" required>
                            <h3 class="form_title">Descripción corta:</h3>
                            <textarea class="form_input form_input--message" placeholder="Escribe aqui.." name="descripcion_corta" required></textarea>
                            <h3 class="form_title">Descripción:</h3>
                            <textarea class="form_input form_input--message" placeholder="Escribe aqui.." name="descripcion" ></textarea required>
                            <h3 class=form_title>Autor:</h3>
                            <input type="text" class="form_input" placeholder="autor"  name="autor" required>
                            
                            <input class="boton" type="submit" value="Enviar Post" name="btn_post">     
                        </form>
                        <div class="boton_registro">
                         <a class="boton " href="index.php">Volver</a> 
                        </div>
                    </div> 
                    </div>
			</article>
		</div>
	</body>
	
</html>