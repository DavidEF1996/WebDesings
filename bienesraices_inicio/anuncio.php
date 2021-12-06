<?php
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id){
    header('Location: /');
}


require 'includes/config/database.php';
$db = conectarBD();

$query ="SELECT * FROM propiedades where idPropiedades = ${id} ";

$resultado = mysqli_query($db,$query);
if($resultado->num_rows===0){
    header('Location: /');
}
$propiedad = mysqli_fetch_assoc($resultado);

require 'includes/funciones.php';
incluirTemplate('header');  

?>
    
    <main class="contenedor seccion contenido-centrado"> <!--Se crea el contenedor principal y usamos seccion para tener margin y padding, este esta creado en utilidades-->
    <h1><?php echo $propiedad['tituloPropiedades']?></h1>


        <div class="imagen-anuncio">
            <picture> <!--Esta propiedad permite cargar imagenes en diferente formato segun soporte el navegador-->
                <source srcset="build/img/destacada.webp" type="image/webp">
                <source srcset="build/img/destacada.jpg" type="image/jpg">
        
            </picture>

            <div id="galeria">
 <div id="galeria_imagen">
 <img id="imgGaleria" src="build/img/anuncio1.webp" /></div>
 <div id="galeria_miniaturas">
 <img class="miniatura" onclick="javascript:document.getElementById('imgGaleria').src=this.src;" src="build/img/anuncio1.webp" />
 <img class="miniatura" onclick="javascript:document.getElementById('imgGaleria').src=this.src;" src="build/img/anuncio2.webp" />
 <img class="miniatura" onclick="javascript:document.getElementById('imgGaleria').src=this.src;" src="build/img/anuncio3.webp" />
 </div>
 </div>
            <p class="precio">$<?php echo $propiedad['precioPropiedades']?></p>
           
            <p><?php echo $propiedad['descripcionPropiedades'] ?> </p>
        </div>
    </main>


    <?php

mysqli_close($db);
incluirTemplate('footer');

  

?>