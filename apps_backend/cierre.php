
<?php 
try {
    @mysqli_close($conexion);
} catch (Exception $e) {
    ?>
    <p>Error: no se pudo cerrar la conexión.</p>
    <?php
    die();
}
?>