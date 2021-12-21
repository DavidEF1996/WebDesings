<?php
function conectarBD():mysqli{
    $db = mysqli_connect('localhost', 'root', 'cuenca', 'hm_eventos');
    if(!$db){
        echo "Error en la conexion";
        exit;
    }

    return $db;
}