<?php
function conectarBD():mysqli{
<<<<<<< HEAD
    $db = mysqli_connect('localhost', 'root', '', 'hm_eventos');
=======
    $db = mysqli_connect('localhost', 'root', 'cuenca', 'hm_eventos');
>>>>>>> origin/david
    if(!$db){
        echo "Error en la conexion";
        exit;
    }

    return $db;
}       