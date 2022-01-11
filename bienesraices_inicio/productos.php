<?php
require 'includes/funciones.php';
  
incluirTemplate('header');  

?>
    
    <main class="contenedor seccion"> <!--Se crea el contenedor principal y usamos seccion para tener margin y padding, este esta creado en utilidades-->


    <?php 
     $limite = 3;
   include 'includes/templates/anuncios.php';
 
   ?>
    
    </main>
   


    <?php
 incluirTemplate('footer');  

?>