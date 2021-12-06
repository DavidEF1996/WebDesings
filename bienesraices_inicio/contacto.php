<?php
require 'includes/funciones.php';
  
incluirTemplate('header');  

?>
    
    <main class="contenedor seccion contenido-centrado"> <!--Se crea el contenedor principal y usamos seccion para tener margin y padding, este esta creado en utilidades-->
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpg">
            <img src="build/img/destacada3.jpg" alt="destacada"></img4>
        </picture>

        <h2>LLene el formulario de contacto</h2>

        <form class="formulario">
            <fieldset>
                <!--Para un grupo de campos se usa fieldset-->
                <legend>Información Personal</legend>
                <label for="nombre">Nombre </label>
                <input type="text" placeholder="Escribe tu nombre..." id="nombre">

                <label for="email">Correo </label>
                <input type="email" placeholder="Escribe tu direccion de correo..." id="email">

                <label for="telefono">Telefono </label>
                <input type="tel" placeholder="Escribe tu telefono..." id="telefono">

                <label for="mensaje">Mensaje </label>
                <textarea id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <!--Para un grupo de campos se usa fieldset-->
                <legend>Información Sobre la propiedad</legend>
                <label for="opciones">Vende o Compra: </label>
                <select id="opciones">
                    <option value="" disabled selected>--Seleccione--</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto </label>
                <input type="number" id="presupuesto">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contactar-correo">Correo</label>
                    <input  name="contacto" type="radio" value="correo" id="contactar-correo">
                
                </div>    <!--Se agrega name para que pueda solo seleccionarse un radio button-->
                <p>Si eligió teléfono, elija una fecha y una hora para se contactado</p>

                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">

                <label for="hora">Hora</label>
                <input type="time" id="hora" min="09" max="18">
               
            </fieldset>

            <input type="submit" value="enviar" class="boton-verder">
        </form>
    </main>


    <?php

incluirTemplate('footer');

  

?>