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
            <source srcset="AuxiliarImages/chica.jfif" type="image/webp" />
            <source srcset="AuxiliarImages/chica.jfif" type="image/jpg" />
            <img
              loading="lazy"
              src="build/img/nosotros.jpg"
              alt="texto de nosotros"
            />
          </picture>
        </div>

        <div class="">
          <h4>
            RESPALDADOS POR PATRICIA RIOS "LA LEONA" Y HERMEL MENDOZA "LOCUTORES
            PROFESIONALES
          </h4>
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
      <h2>DECORACIÓN PARA TODO EVENTO</h2>

      <div class="contenedor-anuncios">
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
            <h3>ORGANIZACIÓN TOTAL DE TUS EVENTOS</h3>

            <p class="precio">$200</p>
            <!--Se le agrega una clase para darle estilo diferente a este p-->

            <a href="anuncio.php" class="boton-amarillo-block">
              Ver
              <!--El enlace al anuncio-->
            </a>
          </div>
        </div>

        <div class="anuncio">
          <!--Para dar estilo a la tarjeta individual-->
          <picture>
            <!--Esta propiedad permite cargar imagenes en diferente formato segun soporte el navegador-->
            <source srcset="AuxiliarImages/foto2.jfif" type="image/webp" />
            <source srcset="build/img/anuncio2.jpg" type="image/jpg" />
            <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio" />
          </picture>
          <div class="contenido-anuncio">
            <!--Contenedor para dar padding y color de fondo al texto de la tarjeta-->
            <h3>TODO TIPO DE MANTELERIA</h3>

            <p class="precio">$50</p>
            <!--Se le agrega una clase para darle estilo diferente a este p-->

            <a href="anuncio.php" class="boton-amarillo-block">
              Ver
              <!--El enlace al anuncio-->
            </a>
          </div>
        </div>

        <div class="anuncio">
          <!--Para dar estilo a la tarjeta individual-->
          <picture>
            <!--Esta propiedad permite cargar imagenes en diferente formato segun soporte el navegador-->
            <source srcset="AuxiliarImages/foto3.jfif" type="image/webp" />
            <source srcset="build/img/anuncio3.jpg" type="image/jpg" />
            <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio" />
          </picture>
          <div class="contenido-anuncio">
            <!--Contenedor para dar padding y color de fondo al texto de la tarjeta-->
            <h3>PASTELERÍA <br></br>  </h3>

            <p class="precio">$50</p>
            <!--Se le agrega una clase para darle estilo diferente a este p-->

            <a href="anuncio.php" class="boton-amarillo-block">
              Ver
              <!--El enlace al anuncio-->
            </a>
          </div>
        </div>
      </div>
      <!--Boton para ver todas-->
      <div class="alinear-derecha">
        <a href="#" class="boton boton-verder"> Ver todos los productos </a>
      </div>
    </section>


    <section class="imagen-contacto">
   
      <h2>Porque en tu sueño cada detalle cuenta.</h2>
      <p>
        Comunicate con nostros ahora!!
      </p>
      <a href="contacto.php" class="boton-amarillo">Contactanos</a>

      <h3>O, aún mejor, ¡ven a visitarnos!</h3>
      <p>Av. los Andes y calle Cajas.</p>
    </section>

 
    <div class=" contenedor contenedor-horarios">
      <h2>HORARIOS DE ATENCIÓN</h2>
      <div class="alinear-derecha ocultar">
        <a href="#" class="boton boton-ocultar botonMostrar"> 🔽 </a>
      </div>
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

      <div class="alinear-derecha ocultar">
        <a href="#" class="boton boton-ocultar botonOcultar"> 🔼 </a>
      </div>
    </div>
  
    </div>

    <?php

incluirTemplate('footer');

  

?>

