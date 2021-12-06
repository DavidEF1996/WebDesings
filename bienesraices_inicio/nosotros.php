<?php
require 'includes/funciones.php';
  
incluirTemplate('header');  

?>
    
    <main class="contenedor seccion"> <!--Se crea el contenedor principal y usamos seccion para tener margin y padding, este esta creado en utilidades-->
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenedor-nosotros">
            <div class="imagen-nosotros">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="texto de nosotros">
                </picture>
            </div>

            <div class="">
                <h4>25 Años de Experiencia</h4>
                <blockquote class="texto-nosotros">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quasi odio qui voluptatibus hic perferendis ullam, a sunt eius nostrum autem consequatur veritatis expedita porro excepturi repellendus quos commodi praesentium!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis illo, adipisci porro, neque, quis quidem laborum culpa nobis accusamus a iusto magni beatae consequatur ullam corrupti minima! Ipsa, accusantium sit.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint provident iusto iste vitae esse. Itaque repellendus pariatur eius exercitationem nam tenetur nemo sapiente, ratione aspernatur, laborum nulla fugit, at nobis!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores porro dolor, ipsam nam assumenda ratione dignissimos quas, cupiditate dolorum laboriosam nobis eligendi asperiores maxime doloribus obcaecati? Sunt aliquam rem suscipit!
                </blockquote>
            </div>

        </div>
    </main>

    <main class="contenedor seccion"> <!--Se crea el contenedor principal y usamos seccion para tener margin y padding, este esta creado en utilidades-->
        <h1>Más Sobre Nostoros</h1>

        <div class="iconos-nosotros"> <!--Para dar estilo a los iconos-->
            <div class="icono"> <!--Para seleccionar el icono individualmente-->
                
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil hic error molestias, voluptatum obcaecati recusandae! Numquam eligendi recusandae, similique a sunt quidem voluptas hic sint dicta cumque ex quo mollitia.</p>

            </div>
            <div class="icono"> <!--Para seleccionar el icono individualmente-->
                
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil hic error molestias, voluptatum obcaecati recusandae! Numquam eligendi recusandae, similique a sunt quidem voluptas hic sint dicta cumque ex quo mollitia.</p>

            </div>
            <div class="icono"> <!--Para seleccionar el icono individualmente-->
                
                <img src="build/img/icono2.svg" alt="icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil hic error molestias, voluptatum obcaecati recusandae! Numquam eligendi recusandae, similique a sunt quidem voluptas hic sint dicta cumque ex quo mollitia.</p>

            </div>
        </div>
    </main>



    <?php
incluirTemplate('footer');

  

?>