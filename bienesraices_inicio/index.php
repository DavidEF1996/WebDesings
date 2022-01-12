<?php
require 'includes/funciones.php';
  
incluirTemplate('header', $inicio=true);  

?>

    <main class="contenedor seccion">
      <!--Se crea el contenedor principal y usamos seccion para tener margin y padding, este esta creado en utilidades-->
      <h1>Más Sobre Nostoros</h1>

      <div class="contenedor-nosotros">
        <div class="imagen-nosotros">
          <picture>
          <source srcset="/AuxiliarImages/chica.jfif" type="image/webp" />
            
            <source srcset="AuxiliarImages/chica.jfif" type="image/jpg" />
            <h2>
            RESPALDADOS POR PATRICIA RIOS "LA LEONA" Y HERMEL MENDOZA "LOCUTORES
            PROFESIONALES
          </h2>
            <img
              loading="lazy"
              src="build/img/nosotros.jpg"
              alt="texto de nosotros"
            />
          </picture>
        </div>

        <div class="texto-nosotros">
        
          <blockquote class="texto-nosotros">
            Respaldados por una trayectoria de 15 años HM-EVENTOS ofrece
            Asesoría Integral para la Organización de Eventos Sociales y
            Corporativos, cuidando con profesionalismo y calidad cada uno de los
            detalles que harán de su evento un momento inolvidable. Descubra
            nuevas tendencias en lo que se refiere al Mágico Mundo de las Bodas
            y permítanos soñar junto a usted el día más importante de su vida!.
            Trabajamos con una amplia variedad de quintas y salones de
            recepción, para que usted pueda elegir el que mejor se adapte a sus
            gustos y preferencias.
          </blockquote>
        </div>
      </div>
    </main>

    <section class="seccion contenedor">
      <!--contiene todos los elementos de esta seccion-->
      <h1>DECORACIÓN PARA TODO EVENTO</h1>

   <?php 
     $limite = 3;
   include 'includes/templates/anuncios.php';
 
   ?>
      </div>


    </section>


    <section class="imagen-contacto">
   
      <h2>Porque en tu sueño cada detalle cuenta.</h2>
      <p>
        Comunicate con nostros ahora!!
      </p>
      <a href="contacto.php" class="boton-rojo">Contactanos</a>

      <h3>O, aún mejor, ¡ven a visitarnos!</h3>
      <p>Av. los Andes y calle Cajas.</p>
    </section>

 
    <div class=" contenedor contenedor-horarios">
      <h1>HORARIOS DE ATENCIÓN</h1>
      
    <div class="tabla">
      
      <table id="tabla" >
        <TR><TH>Lunes</TH>
          <TD>08:00 am - 08:00 pm</TD> </TR>
        <TR><TH>Martes</TH>
          <TD>08:00 am - 08:00 pm</TD></TR>
        <TR><TH>Miercoles</TH>
          <TD>08:00 am - 08:00 pm</TD></TR>
          <TR><TH>Jueves</TH>
            <TD>08:00 am - 08:00 pm</TD></TR>
            <TR><TH>Viernes</TH>
              <TD>08:00 am - 08:00 pm</TD></TR>
              <TR><TH>Sábado</TH>
                <TD>Cerrado</TD></TR>
                <TR><TH>Domingo</TH>
                  <TD>Cerrado</TD></TR>

      </table>

 
    </div>
  
    </div>

    <?php

incluirTemplate('footer');

  

?>

