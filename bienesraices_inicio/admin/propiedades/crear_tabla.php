<?php
require '../../includes/config/database.php';
$db = conectarBD();
$errores=[];
$nombre_tabla = '';
if ($_SERVER['REQUEST_METHOD']==='POST'){
    $nombre_tabla = mysqli_real_escape_string($db, $_POST['nombre_tabla']);
    if(!$nombre_tabla){
        $errores[]="Escriba el nombre de la tabla";
    }
    if(empty($errores)){
        
        $auxiliar = substr($nombre_tabla,0 ,3);
        $query = " create TABLE $nombre_tabla ( 
        id_$auxiliar int(11) AUTO_INCREMENT PRIMARY KEY,
        desc_$auxiliar VARCHAR(30) NOT NULL,
        precio_$auxiliar Decimal(6,2) DEFAULT NULL,
        unidad_medida_$auxiliar varchar(100) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
        $resultado  = mysqli_query($db,$query);
        if($resultado){
           header('Location: /admin?mensaje=Creado Correctamente&registrado=1');
        }
    }


}
?>