<?php

require 'includes/config/database.php';
$db = conectarBD();

$query ="SELECT * FROM pasteleria LIMIT ${limite} ";

$resultado = mysqli_query($db,$query);

?>
<div class="contenedor-anuncios">
<div class="anuncio">
          <!--Para dar estilo a la tarjeta individual-->
          <picture>
            <!--Esta propiedad permite cargar imagenes en diferente formato segun soporte el navegador-->
            <source srcset="AuxiliarImages/foto1.jfif" type="image/webp" />
            <source srcset="build/img/anuncio1.jpg" type="image/jpg" />
            <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio" />
          </picture>
          <div class="contenido-anuncio">
            <!--Contenedor para dar padding y color de fondo al texto de la tarjeta-->
            <h3>Ejemplo</h3>

          
            <!--Se le agrega una clase para darle estilo diferente a este p-->

            <a href="anuncio.php?id=licores" class="boton-amarillo-block">
              Ver
              <!--El enlace al anuncio-->
            </a>
          </div>

         
        </div>
</div>

<div class="contenedor-anuncios">
    <?php while ($propiedad = mysqli_fetch_assoc($resultado)): ?>
        <!--Contenedor para alinear los elementos tarjeta-->
        <div class="anuncio">
          <!--Para dar estilo a la tarjeta individual-->
          <picture>
            <!--Esta propiedad permite cargar imagenes en diferente formato segun soporte el navegador-->
            <source srcset="AuxiliarImages/foto1.jfif" type="image/webp" />
            <source srcset="build/img/anuncio1.jpg" type="image/jpg" />
            <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio" />
          </picture>
          <div class="contenido-anuncio">
            <!--Contenedor para dar padding y color de fondo al texto de la tarjeta-->
            <h3><?php echo $propiedad['desc_past']?></h3>

          
            <!--Se le agrega una clase para darle estilo diferente a este p-->

            <a href="anuncio.php?id=<?php echo $propiedad['precio_past'] ?>" class="boton-amarillo-block">
              Ver
              <!--El enlace al anuncio-->
            </a>
          </div>

         
        </div>
        <?php endwhile ?>
</div>

<?php
    mysqli_close($db); 
?>