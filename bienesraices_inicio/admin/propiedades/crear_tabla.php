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
        $carpeta_imagenes = "../../AuxiliarImages/Productos/$nombre_tabla";
        if(!is_dir($carpeta_imagenes)){
            echo "debe crear el directorio";
            mkdir($carpeta_imagenes);
        }
        $auxiliar = substr($nombre_tabla,0 ,3);
        $query = " create TABLE $nombre_tabla ( 
                    id_$auxiliar int(11) AUTO_INCREMENT PRIMARY KEY,
                    desc_$auxiliar VARCHAR(30) NOT NULL,
                    precio_$auxiliar Decimal(6,2) DEFAULT NULL,
                    unidad_medida_$auxiliar varchar(100) NOT NULL
                    );";
        $resultado  = mysqli_query($db,$query);
        echo $resultado;
        if($resultado && is_dir($carpeta_imagenes)){
            echo($resultado);
           header('Location: /admin?mensaje=Creado Correctamente&registrado=1');
        }else{
            header("Location: /admin?mensaje=Creado Correctamente&registrado=2");
        }
    }


}

require '../../includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1>Crear</h1>
    <a href="/admin/"  class="boton boton-verder">Volver</a>
    <?php foreach($errores as $error): ?>
        
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form class="formulario_tabla" name="formulario_tabla" method="POST" action="/admin/propiedades/crear_tabla.php">
        <legend>Insertar nombre de la nueva sección de productos</legend>
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre_tabla" name="nombre_tabla" placeholder="Ej: Cristaleria, Comida, etc." value="<?php echo $nombre_tabla ?>">
        <input type="submit" value="Crear SECCIÓN" class="boton boton-verder"  >
    </form>
</main>
<?php
incluirTemplate('footer');
?>