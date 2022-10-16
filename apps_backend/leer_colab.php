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
					<h1>COLABORACIONES</h1>
				</header>
				<div class="contenedor_forms">
                    <div class="form_container">    
                    <?php

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
                try {
                    $sql="SELECT * FROM colaboraciones;";
                    $resultado = mysqli_query($conexion,$sql);
                } catch (Exception $e) {
                    die("Error: no se pudo recuperar el listado de mecánicos.");
                }

                /* Leemos los resultados de la consulta en un array. En principio se me ocurre para simplificar hacer un array de dos dimensiones con índices numéricos y un array como valor con todos los datos del mecánico ($registro). */
                $colaboraciones = array();
                while ( $registro = mysqli_fetch_assoc($resultado) ) {
                    array_push($colaboraciones, $registro);
                }

                /* Luego, pintaremos una serie de formularios editables para el listado de mecánicos, junto con formularios para los botones de eliminación. */
                ?>
                <table>
                    <tr>
                        <th>CORREOS</th>
                        <th>COLABORACIONES</th>
                </tr>
                    <?php
                    foreach ( $colaboraciones as $datos ) {
                        ?>
                <tr>    
                    <td>
                        <?php echo $datos['correo_colab']; ?>" 
                    </td>
                    <td>
                        <?php echo $datos['contenido_colab']; ?>
                    </td>
                </tr>
                <?php
                }
                ?>
                </table>
                        <div class="boton_registro">
                         <a class="boton " href="index.php">Volver</a> 
                        </div>
                    </div> 
                    </div>
			</article>
		</div>
	</body>
	
</html>