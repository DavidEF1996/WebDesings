<?php
$id = $_GET['id'];



if(!$id){
    header('Location: /');
}

$ron = "ron";
$contador = 1;

require 'includes/config/database.php';
$db = conectarBD();

$query ="SELECT * FROM ${id}";


$resultado = mysqli_query($db,$query);
if($resultado->num_rows===0){
    header('Location: /');
}



require 'includes/funciones.php';
incluirTemplate('header');  

?>
    
    <div class="contenedor-anuncios contenedor productos "> <!--Se crea el contenedor principal y usamos seccion para tener margin y padding, este esta creado en utilidades-->
    
        
      <?php while ($propiedad = mysqli_fetch_assoc($resultado)): ?>
       <?php $aux = substr($id,0 ,3);?>
        <div class="imagen-anuncio">
     
        <h1><?php echo $propiedad["desc_$aux"] ?></h1>

        
            <div id="galeria">
                <div id="galeria_imagen">
                    <?php 
                    $descripcion = $propiedad["desc_$aux"];
                    $cnt=0;
                       $ruta = ("AuxiliarImages/Productos/$id/$descripcion");
                        /*echo "$ruta <br/>";*/
                        if (is_dir($ruta)){                                    
                        
                            $gestor = opendir($ruta);
                        
                            // Recorre todos los archivos del directorio
                            while (($archivo = readdir($gestor)) !== false)  {
                                // Solo buscamos archivos sin entrar en subdirectorios
                                if ((is_file($ruta."/".$archivo)) && ( $cnt<1)) {
                               //     echo "<img src='".$ruta."/".$archivo."' width='100px' alt='".$archivo."' title='".$archivo."'>";
                                  echo " <img id='imgGaleria.$contador'   class=imagenPrincipal src='".$ruta."/".$archivo."' />";
                                  $cnt+=1;   
                                }else{
                                    echo "<div class='galeria_miniaturas' ><img   class=miniatura src='".$ruta."/".$archivo."' /></div>";
                                }
                                     
                            }

                            // Cierra el gestor de directorios
                            closedir($gestor);
                        } else {
                            echo "No es una ruta de directorio valida<br/>";
                        }
                    ?>
              
                </div>
                        <!--      <p class="precio">$<?php // echo $propiedad['precio_lic']?></p>--> 
                        <input id = "cantidad" type="number" class="cantidad"  min="1" max="50"  >
                        <p>Aquí va una descripción del producto </p>
                        <a
                            href="#"
                            class="u-full-width button-primary button input agregar-carrito"
                            data-id=<?php echo $propiedad["id_$aux"] ?>
                            >Agregar Al Carrito</a>
                            </div>
        
                    </div>
                            <?php $contador++; ?>
                            <?php endwhile ?>
    
    

                    </div>


                    </div>










    <?php

mysqli_close($db);
incluirTemplate('footer');

  

?>