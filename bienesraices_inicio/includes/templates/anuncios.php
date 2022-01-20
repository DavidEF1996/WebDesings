<?php

require 'includes/config/database.php';

$nombre_bd = 'hm_eventos';
$db = conectarBD();


$query = "SHOW TABLES FROM $nombre_bd";
$resultado = mysqli_query($db,$query);

?> 

<h1 class="<?php echo $inicio ?'ocultar':''; ?>" >EN HM EVENTOS, ESTAMOS PARA SERVIRLE</h1>

<div class="contenedor-anuncios">

<?php while ($fila = mysqli_fetch_row($resultado)):?>

    
<div class="anuncio">
 

   
          <!--Para dar estilo a la tarjeta individual-->
         <!-- <picture>
           Esta propiedad permite cargar imagenes en diferente formato segun soporte el navegador
            <source srcset="AuxiliarImages/foto1.jfif" type="image/webp" />
            <source srcset="build/img/anuncio1.jpg" type="image/jpg" />
            <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio" />
          </picture>-->
          <div class="contenido-anuncio">
          <?php $producto = "{$fila[0]}" ?>
            <!--Contenedor para dar padding y color de fondo al texto de la tarjeta-->
            
            <h3> <?php echo strtoupper($producto)  ?></h3>
         
          
            <!--Se le agrega una clase para darle estilo diferente a este p-->

            <a href="anuncio.php?id=<?php echo $producto ?>"  class="boton-rojo-block">
              Ver
              <!--El enlace al anuncio-->
            </a>
          </div>

         
        </div>
        <?php endwhile ?>
</div>

<section class="contenedor contenedor-nuevopro <?php echo $inicio ?'ocultar':''; ?>">


  <form  class=" formulario formulario-producto-aparte">

  <legend>Agregue el servicio o producto que necesite y no este arriba!!!</legend>


  <label for="producto-aparte">Producto o Servicio </label>
              
                <textarea id="textArea"></textarea>

                <input type="submit" value="agregar" class="boton-verder">

  </form>
 
</section>
<?php
    mysqli_close($db);
    ?>