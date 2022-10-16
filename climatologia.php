<!DOCTYPE html>
<html>
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
                    <p><a class="inicio" href="index.php">Inicio</a>/CLIMATOLOGÍA</p>
                    <h1>CLIMATOLOGÍA</h1>
                </header>
                <div class="article_contenido">
                    <div class="">
                        <h3>¡Deporte y aventuras!</h3>
                        <p> Me parecia importante dedicar un apartado de esta pagina, explicitamente a esta aplicación web, ya que mi vida gira entorno a ella a la hora de organizarlo todo.</p>
                        <p>Si te gusta hacer tanto deportes de montaña, como para  deportes acuáticos como el surf, buceo o cualquier actividad que dependa de las condiciones climáticas.<strong>¡Todo lo que necesita cualquier loco de mar!</strong> Entre los que me incluyo.</p>
                        <p>Dentro de este mapa no solo podras comprobar la temperatura y las condiciones atmosfericas, sino tambien las olas, dirección del viento y el mar de fondo. Algo fundamental para poder decidir cuando coger tu tabla y lanzarte al mar sin dejarle nada al azar.</p>
                    </div>
                    <div class="separador"></div>
                    <div class="cover_mapa">
                        
                        <iframe class="mapa_clima"width="100%" height="100%" src="https://embed.windy.com/embed2.html?lat=40.011&lon=-3.340&detailLat=39.241&detailLon=-0.439&width=650&height=450&zoom=6&level=surface&overlay=wind&product=ecmwf&menu=&message=true&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=&metricWind=default&metricTemp=default&radarRange=-1" frameborder="0"></iframe>
                        
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