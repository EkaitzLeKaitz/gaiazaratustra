<!DOCTYPE html>
<html lang="es">
    <title>GAIA A ZARATUSTRA</title>

    <meta charset="UTF-8" name="gaia">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="https://kit.fontawesome.com/db4518cf15.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/archivo.css">
    <script src="menu.js" defer></script>
<body>
    <?php
        include "header.php";
    ?>
    <div class="contenido_web">
        <div class="contenedor_web">
            <article>
                <header>
                    <p><a class="inicio" href="index.php">Inicio</a>/POSTS & VIAJES</p>
                    <h1>POSTS & VIAJES</h1>
                </header>
                <div class="article_contenido">

                    <!--CONEXIÓN-->

                    <?php
                        try {

                            include "private/conexion.php";
                            
                            @$conexion = mysqli_connect($host,$usuario,$pass,$nombreBD);
                        } catch (Exception $e) {
                            ?>
                            <p>Error. No se pudo establecer la conexión. Inténtelo más tarde.</p>
                            <?php
                            die();
                        }

                        /*Caracteres en web*/

                        mysqli_set_charset($conexion,"UTF8");
                        
                        /* Consulta */

                        try {
                            $sql="SELECT * FROM `posts`";
                            $resultado = mysqli_query($conexion,$sql);
                        } catch (Exception $e) {
                            die("Error: no se pudo conectar con la tabla posts.");
                        }

                        /* Recojo los datos de la BD en un array $posts*/

                        $posts = array();
                        while ( $datos = mysqli_fetch_assoc($resultado) ) {
	                        array_push($posts, $datos);
                        }
                        
                        /*Muestro los datos del array*/

                        ?>
                    <?php foreach($posts as $valores){?>
                    <a href="post.php?">
                        <div class="contenedor_post">                        
                            <div >
                                <img class=imagen_post src="<?php echo $valores['imagen_viaje'];?>">
                            </div>
                            <div class=titulo_post>
                            <h3><?php echo $valores['titulo_post'];?></h3>
                            </div>
                            <div class="descripcion_corta">
                                <p><?php echo $valores['descripcion_corta'];?></p>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                    <?php
                        include "conexion/cierre.php";
                    ?>
                    
                </div>    
            </article>
        </div>    
    </div>
    <?php 
        include "footer.php";
    ?>
</body>