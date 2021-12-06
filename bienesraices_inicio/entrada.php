<?php
require 'includes/funciones.php';
  
incluirTemplate('header');  

?>
    
    <main class="contenedor seccion contenido-centrado"> <!--Se crea el contenedor principal y usamos seccion para tener margin y padding, este esta creado en utilidades-->
        <h1>Casa en Venta frente al Bosque</h1>


        <div class="imagen-anuncio">
            <picture> <!--Esta propiedad permite cargar imagenes en diferente formato segun soporte el navegador-->
                <source srcset="build/img/destacada2.webp" type="image/webp">
                <source srcset="build/img/destacada2.jpg" type="image/jpg">
                <img loading="lazy" src="build/img/destacada2.jpg" alt="anuncio">
            </picture>
            <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed cupiditate quaerat, porro adipisci excepturi animi consequuntur pariatur, doloribus sint laudantium fugiat facilis molestias delectus itaque alias minus, nemo voluptate repellat.

                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae quod fugiat ad, modi culpa laboriosam error tempora voluptas delectus. Sit harum, consequatur qui accusantium doloribus ad error. Dolor, eligendi voluptatum!
            </p>
        </div>
    </main>



    <?php

incluirTemplate('footer');

  

?>