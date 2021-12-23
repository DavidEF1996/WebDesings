<?php
$id = $_GET['id'];



if(!$id){
    header('Location: /');
}

$ron = "ron";
$contador = 1;

require 'includes/config/database.php';
$db = conectarBD();

$query ="SELECT * FROM ${id}";


$resultado = mysqli_query($db,$query);
if($resultado->num_rows===0){
    header('Location: /');
}



require 'includes/funciones.php';
incluirTemplate('header');  

?>
    
    <div class="contenedor-anuncios contenedor productos "> <!--Se crea el contenedor principal y usamos seccion para tener margin y padding, este esta creado en utilidades-->
    
        
      <?php while ($propiedad = mysqli_fetch_assoc($resultado)): ?>

        <div class="imagen-anuncio">
        <h1><?php echo $propiedad['desc_lic']?></h1>
            <picture> <!--Esta propiedad permite cargar imagenes en diferente formato segun soporte el navegador-->
                <source srcset="build/img/destacada.webp" type="image/webp">
                <source srcset="build/img/destacada.jpg" type="image/jpg">
        
            </picture>

            <div id="galeria">
 <div id="galeria_imagen">
 <img id="imgGaleria <?php echo $contador ?>" class="imagePrincipal" src="build/img/anuncio1.webp" /></div>
 <div id="galeria_miniaturas">
 <img class="miniatura" onclick="javascript:document.getElementById('imgGaleria <?php echo $contador ?>').src=this.src;" src="build/img/anuncio1.webp" />
 <img class="miniatura" onclick="javascript:document.getElementById('imgGaleria <?php echo $contador ?>').src=this.src;" src="build/img/anuncio2.webp" />
 <img class="miniatura" onclick="javascript:document.getElementById('imgGaleria <?php echo $contador ?>').src=this.src;" src="build/img/anuncio3.webp" />
 </div>
 </div>
      <!--      <p class="precio">$<?php // echo $propiedad['precio_lic']?></p>--> 
           
            <p>Aquí va una descripción del producto </p>
            <a
                href="#"
                class="u-full-width button-primary button input agregar-carrito"
                data-id=<?php echo $propiedad['id_lic'] ?>
                >Agregar Al Carrito</a>
        </div>
        
        <?php $contador++; ?>
        <?php endwhile ?>
      </div>
    


    <?php

mysqli_close($db);
incluirTemplate('footer');

  

?>