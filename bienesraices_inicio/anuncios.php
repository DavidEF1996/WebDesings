<?php
require 'includes/funciones.php';
  
incluirTemplate('header');  

?>
    
    <main class="contenedor seccion"> <!--Se crea el contenedor principal y usamos seccion para tener margin y padding, este esta creado en utilidades-->
        <section class="seccion contenedor"> <!--contiene todos los elementos de esta seccion-->
            <h2>Casas y Departamentos en Venta</h2>
    
            <div class="contenedor-anuncios"><!--Contenedor para alinear los elementos tarjeta-->
                <div class="anuncio"><!--Para dar estilo a la tarjeta individual-->
                    <picture> <!--Esta propiedad permite cargar imagenes en diferente formato segun soporte el navegador-->
                        <source srcset="build/img/anuncio1.webp" type="image/webp">
                        <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                    </picture>
                    <div class="contenido-anuncio"> <!--Contenedor para dar padding y color de fondo al texto de la tarjeta-->
                        <h3>Casa de Lujo en el Lago</h3>
                        <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                        <p class="precio">$3,000,000</p> <!--Se le agrega una clase para darle estilo diferente a este p-->
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
                                <img  class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="dormitorios">
                                <p>4</p>
                            </li>
                        </ul>
    
                        <a href="anuncio.php" class="boton-amarillo-block">
                            Ver Propiedad <!--El enlace al anuncio-->
                        </a>
                    </div>
                </div>
    
                <div class="anuncio"><!--Para dar estilo a la tarjeta individual-->
                    <picture> <!--Esta propiedad permite cargar imagenes en diferente formato segun soporte el navegador-->
                        <source srcset="build/img/anuncio2.webp" type="image/webp">
                        <source srcset="build/img/anuncio2.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio">
                    </picture>
                    <div class="contenido-anuncio"> <!--Contenedor para dar padding y color de fondo al texto de la tarjeta-->
                        <h3>Casa terminados de lujo</h3>
                        <p>Casa con diseño moderno, así como tecnología inteligente y amueblada</p>
                        <p class="precio">$2,000,000</p> <!--Se le agrega una clase para darle estilo diferente a este p-->
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
    
                        <a href="anuncio.php" class="boton-amarillo-block">
                            Ver Propiedad <!--El enlace al anuncio-->
                        </a>
                    </div>
                </div>
    
                <div class="anuncio"><!--Para dar estilo a la tarjeta individual-->
                    <picture> <!--Esta propiedad permite cargar imagenes en diferente formato segun soporte el navegador-->
                        <source srcset="build/img/anuncio3.webp" type="image/webp">
                        <source srcset="build/img/anuncio3.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio">
                    </picture>
                    <div class="contenido-anuncio"> <!--Contenedor para dar padding y color de fondo al texto de la tarjeta-->
                        <h3>Casa con Piscina</h3>
                        <p>Casa con piscina y acabados de lujo en la ciudad, excelente oportunidad</p>
                        <p class="precio">$3,000,000</p> <!--Se le agrega una clase para darle estilo diferente a este p-->
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
    
                        <a href="anuncio.php" class="boton-amarillo-block">
                            Ver Propiedad <!--El enlace al anuncio-->
                        </a>
                    </div>
                </div>
                <div class="anuncio"><!--Para dar estilo a la tarjeta individual-->
                    <picture> <!--Esta propiedad permite cargar imagenes en diferente formato segun soporte el navegador-->
                        <source srcset="build/img/anuncio4.webp" type="image/webp">
                        <source srcset="build/img/anuncio4.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/anuncio4.jpg" alt="anuncio">
                    </picture>
                    <div class="contenido-anuncio"> <!--Contenedor para dar padding y color de fondo al texto de la tarjeta-->
                        <h3>Casa con Piscina</h3>
                        <p>Casa con piscina y acabados de lujo en la ciudad, excelente oportunidad</p>
                        <p class="precio">$3,000,000</p> <!--Se le agrega una clase para darle estilo diferente a este p-->
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
    
                        <a href="anuncio.php" class="boton-amarillo-block">
                            Ver Propiedad <!--El enlace al anuncio-->
                        </a>
                    </div>
                </div>
                <div class="anuncio"><!--Para dar estilo a la tarjeta individual-->
                    <picture> <!--Esta propiedad permite cargar imagenes en diferente formato segun soporte el navegador-->
                        <source srcset="build/img/anuncio5.webp" type="image/webp">
                        <source srcset="build/img/anuncio5.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/anuncio5.jpg" alt="anuncio">
                    </picture>
                    <div class="contenido-anuncio"> <!--Contenedor para dar padding y color de fondo al texto de la tarjeta-->
                        <h3>Casa con Piscina</h3>
                        <p>Casa con piscina y acabados de lujo en la ciudad, excelente oportunidad</p>
                        <p class="precio">$3,000,000</p> <!--Se le agrega una clase para darle estilo diferente a este p-->
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
    
                        <a href="anuncio.php" class="boton-amarillo-block">
                            Ver Propiedad <!--El enlace al anuncio-->
                        </a>
                    </div>
                </div>
                <div class="anuncio"><!--Para dar estilo a la tarjeta individual-->
                    <picture> <!--Esta propiedad permite cargar imagenes en diferente formato segun soporte el navegador-->
                        <source srcset="build/img/anuncio6.webp" type="image/webp">
                        <source srcset="build/img/anuncio6.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/anuncio6.jpg" alt="anuncio">
                    </picture>
                    <div class="contenido-anuncio"> <!--Contenedor para dar padding y color de fondo al texto de la tarjeta-->
                        <h3>Casa con Piscina</h3>
                        <p>Casa con piscina y acabados de lujo en la ciudad, excelente oportunidad</p>
                        <p class="precio">$3,000,000</p> <!--Se le agrega una clase para darle estilo diferente a este p-->
                        <ul class="iconos-caracteristicas"><!--Lista para los iconos de la tarjeta-->
                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="baño">
                                <p>3</p>
                            </li>
                            <li>
                                <img  class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="estacionamiento">
                                <p>3</p>
                            </li>
                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="dormitorios">
                                <p>4</p>
                            </li>
                        </ul>
    
                        <a href="anuncio.php" class="boton-amarillo-block">
                            Ver Propiedad <!--El enlace al anuncio-->
                        </a>
                    </div>
                </div>
            </div>
            
        </section>
    </main>



    <?php
 incluirTemplate('footer');  

?>