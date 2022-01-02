<?php

$mensaje = $_GET['registrado']??null;

require '../includes/funciones.php';
incluirTemplate('header');

?>
<main class="contenedor seccion">
    <h1>Administrador</h1>

    <a href="/admin/propiedades/crear.php"  class="boton boton-verder">Agregar</a>

    <?php if(intval( $mensaje)===1): ?>
        <p class="alerta exito">Producto Insertado Correctamente</p>
        <?php endif;?>

        <table class="productos">
            
        </table>
</main>

<?php
incluirTemplate('footer');
?>