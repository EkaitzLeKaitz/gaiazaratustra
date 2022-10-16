<!DOCTYPE html>
<html lang="es">
<head>
    <title>GAIA A ZARATUSTRA</title>
    <meta charset="UTF-8" name="gaia">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="https://kit.fontawesome.com/db4518cf15.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/archivo.css">
</head>
    <?php
        include "header.php";
    ?>
    <div class="contenido_web">
        <div class="contenedor_web">
            <article>
                <header>
                    <p><a class="inicio" href="index.php">Inicio</a>/CONTACTO & COLABORACIONES</p>
                    <h1>CONTACTO & COLABORACIONES</h1>
                </header>
                <div class="article_contenido">
                    <div class="contenedor_forms">
                        <p><strong>¿Tienes alguna sugerencia?</strong> ¡Danos tu feedback!</p>
                            <div class="form_container">    
                                <form method="post" class="form" action="sugerencias.php">
                                    <h3 class="form_title">Correo:</h3>
                                    <input type="email" class="form_input" placeholder="Ejemplo@callefalsa123.com" name="correo_sug" required>
                                    <h3 class="form_title">Sugerencia:</h3>
                                        <textarea class="form_input form_input--message"placeholder="Escribe aqui tu sugerencia..." name="sugerencia"></textarea>
                                    </label>
                                    <input type="submit" class="boton" value="Enviar Sugerencia" name="btn_sugerencia">                        
                                </form>
                        <p><strong>¿Quieres colaborar con nosotros?</strong> ¡Dejanos aqui tu propuesta!</p>
                        <div class="form_container">    
                            <form method="post" class="form" action="colaboraciones.php">                            
                                <h3 class=form_title>Correo:</h3>
                                <input type="email" class="form_input" placeholder="callefalsa123@gmail.com"  name="correo_colab" required>
                                <h3 class="form_title">Colaboración:</h3>
                                    <textarea class="form_input form_input--message" placeholder="Escribe aqui tu propuesta.." name="propuesta" ></textarea>
                                
                                <input class="boton" type="submit" value="Enviar Colaboración" name="btn_propuesta">     
                            </form>
                        </div> 
                      
                        <p><strong>Si quieres ayudar a financiar el proyecto para seguir haciendo posible este contenido hazte mecenas aqui:</strong></p>
                        <div id="icono">
                            
                            <a href="https://www.patreon.com/" class="patreon footer_rrss" target="_blank"><i class="icono fa-brands fa-patreon"></i></a> 
                        
                        </div>
                    <div class="separador"></div>                    
                </div>    
            </article>
        </div>    
    </div>
    <?php 
        include "footer.php";
    ?>
</body>