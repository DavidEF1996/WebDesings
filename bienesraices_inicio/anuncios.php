<?php
require 'includes/funciones.php';
  
incluirTemplate('header');  

?>
    
    <main class="contenedor seccion"> <!--Se crea el contenedor principal y usamos seccion para tener margin y padding, este esta creado en utilidades-->
    <h2>Carrito de Compras</h2>

    <di>

    <div id="carrito">
                  <table id="lista-carrito" class="u-full-width">
                    <thead>
                      <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>

                  <a href="#" id="vaciar-carrito" class="button u-full-width"
                    >Vaciar Carrito</a
                  >
                </div>
    </di>
    
    </main>
   


    <?php
 incluirTemplate('footer');  

?>