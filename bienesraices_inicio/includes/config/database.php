<?php
function conectarBD():mysqli{
    $db = mysqli_connect('localhost', 'root', 'cuenca', 'bienes_raices');
    if(!$db){
        echo "Error en la conexion";
        exit;
    }

    return $db;
}