<?php
require 'includes/funciones.php';
  
incluirTemplate('header');  

?>
    
    <main class="contenedor seccion contenido-centrado"> <!--Se crea el contenedor principal y usamos seccion para tener margin y padding, este esta creado en utilidades-->
        <h1>Casa en Venta frente al Bosque</h1>


        <div class="imagen-anuncio">
            <picture> <!--Esta propiedad permite cargar imagenes en diferente formato segun soporte el navegador-->
                <source srcset="build/img/destacada.webp" type="image/webp">
                <source srcset="build/img/destacada.jpg" type="image/jpg">
                <img loading="lazy" src="build/img/destacada.jpg" alt="anuncio">
            </picture>
            <p class="precio">$2,000,000</p>
            <ul class="iconos-caracteristicas"><!--Lista para los iconos de la tarjeta-->
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="baño">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="dormitorios">
                    <p>4</p>
                </li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed cupiditate quaerat, porro adipisci excepturi animi consequuntur pariatur, doloribus sint laudantium fugiat facilis molestias delectus itaque alias minus, nemo voluptate repellat.</p>
        </div>
    </main>


    <?php

incluirTemplate('footer');

  

?>