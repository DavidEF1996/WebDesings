<?php

require '../../includes/config/database.php';
$db = conectarBD();

$errores=[];
$opcionestipo = '';
    $nombre = '';
    $precio = '';
    $opcionesmedida = '';

if ($_SERVER['REQUEST_METHOD']==='POST'){

   
    $opcionestipo =mysqli_real_escape_string($db, $_POST['opcionestipo']);
    $nombre =mysqli_real_escape_string($db, $_POST['nombre']);
    $precio =mysqli_real_escape_string($db, $_POST['precio']);
    $opcionesmedida =mysqli_real_escape_string($db, $_POST['opcionesmedida']);
    echo $opcionestip;
    echo $nombre ;
    echo $precio;
    echo $opcionesmedida;

    if(!$opcionestipo){
        alert($opcionestipo);
        $errores[]="Seleccione el tipo de producto a Insertar";
    }
    if(!$nombre){
        $errores[]="El nombre del producto es obligatorio";
    }
    if(!$precio){
        $errores[]="El precio del producto es obligatorio";
    }
    if(!$opcionesmedida){
        $errores[]="Seleccione el tipo de unidad del producto";
    }

    if(empty($errores)){
        alert($opcionestipo);
        $auxiliar = substr($opcionestipo,0 ,3);
        $query = "Insert into $opcionestipo(desc_$auxiliar, precio_$auxiliar, unidad_medida_$auxiliar) values ('$nombre', '$precio', '$opcionesmedida')";
        $resultado  = mysqli_query($db,$query);
        if($resultado){
           header('Location: /admin?mensaje=Creado Correctamente&registrado=1');
        }
    }

 

 
 
 
}


require '../../includes/funciones.php';
incluirTemplate('header');

?>
<?php
    $nombre_bd = 'hm_eventos';
    $query_tablas = "SHOW TABLES FROM $nombre_bd";
    $resultado_tablas = mysqli_query($db,$query_tablas); 

?>
<main class="contenedor seccion">
    <h1>Crear</h1>
    <a href="/admin/"  class="boton boton-verder">Volver</a>


    <?php foreach($errores as $error): ?>
        
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
 
    <form class="formulario_crear" name="formulario" method="POST" action="/admin/propiedades/crear.php">
 
        <legend>Insertar productos</legend>
        <label for="opcionestipo" name  ="opcionestipo">Seleccione el tipo de producto: </label>  
        
        <select name="opcionestipo">
            
            <?php while ($fila = mysqli_fetch_row($resultado_tablas)):?> 
                <?php $producto = "{$fila[0]}" ?>
                <!--<option value="<?php echo $producto ?>"><?php echo $producto ?></option>-->
                <option  value="<?php echo $producto?>" > <?php echo strtoupper($producto)?> </option>
            <?php endwhile ?>
        </select>
     

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre del producto" value="<?php echo $nombre ?>">

        <label for="precio">Precio</label>
        <input type="number" step=0.01 id="precio" name="precio" placeholder="Ingrese el precio del producto" value="<?php echo $precio ?>">

        <label for="opcionesmedida">Unidad de Medida</label>
        <input type="text" id="opcionesmedida" name="opcionesmedida" placeholder="Ej. porcion, litro, caja, etc."  value="<?php echo $opcionesmedida ?>">
        
        <label for="opcionesmedida">Foto del producto</label>
        <form action="photo.php" method="post" enctype="multipart/form-data">
            Elegir archivo:
            <input type="file" name="fileToUpload" id="fileToUpload">
            
        </form>
            
            
    </form>
    <input type="submit" value="Crear PRODUCTO" class="boton boton-verder"  >
</main>

<?php
incluirTemplate('footer');
?>