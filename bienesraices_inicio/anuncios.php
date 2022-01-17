<?php
require 'includes/funciones.php';
  
incluirTemplate('header');  

?>
    
    <main class="contenedor seccion"> <!--Se crea el contenedor principal y usamos seccion para tener margin y padding, este esta creado en utilidades-->
    <h2>Carrito de Compras</h2>

    <di>

    <div id="carrito" class="table-responsive">
                  <table id="lista-carrito" class="u-full-width">
                    <thead>
                      <tr>
                        <th>Producto</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                   
                        <th></th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>

                  <div class="botones-carrito">
                
                   <a href="contacto.php" id="vaciar-carrito" class="boton-verder"
                    >Confirmar</a
                  >

                  </div>
                  
                </div>
    </di>
    
    </main>
   


    <?php
 incluirTemplate('footer');  

?>