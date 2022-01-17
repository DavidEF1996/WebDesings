<?php
require 'includes/funciones.php';
  
incluirTemplate('header');  

?>
    
    <main class="contenedor seccion contenido-centrado"> <!--Se crea el contenedor principal y usamos seccion para tener margin y padding, este esta creado en utilidades-->
        <h1>Contacto</h1>

        <div class="logo-formulario">
            <img src="AuxiliarImages/logoPequeno.png" alt="logo">
        </div>

        <h2>LLene el formulario para confirmar su compra</h2>

        <form class="formulario">
            <fieldset>
                <!--Para un grupo de campos se usa fieldset-->
                <legend>Datos:</legend>
                <label for="nombre">Nombre Cliente </label>
                <input type="text" placeholder="Escribe tu nombre..." id="nombre">

              

                <label for="telefono">Whatsapp </label>
                <input type="tel" placeholder="Escribe tu telefono..." id="telefono">

          
            </fieldset>

        

            <input type="submit" value="enviar" class="boton-verder">
        </form>
    </main>


    <?php

incluirTemplate('footer');

  

?>