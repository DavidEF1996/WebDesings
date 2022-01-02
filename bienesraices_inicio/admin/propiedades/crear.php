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

    if(!$opcionestipo){
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
<main class="contenedor seccion">
    <h1>Crear</h1>
    <a href="/admin/"  class="boton boton-verder">Volver</a>


    <?php foreach($errores as $error): ?>
        
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
 
    <form class="formulario" name="formulario" method="POST" action="/admin/propiedades/crear.php">
 
 <legend>Insertar productos</legend>
 <label for="opcionestipo">Seleccione el tipo de producto: </label>
     <select name="opcionestipo">
         <option value="">--Seleccione--</option>
         <option <?php echo $opcionestipo==="licores"?'selected':'' ?> value="licores">Licores</option>
         <option <?php echo $opcionestipo==="pasteleria"?'selected':'' ?> value="pasteleria">Pastelería</option>
     </select>

 <label for="nombre">Nombre</label>
 <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre del producto" value="<?php echo $nombre ?>">

 <label for="precio">Precio</label>
 <input type="number" step=0.01 id="precio" name="precio" placeholder="Ingrese el precio del producto" value="<?php echo $precio ?>">

 <label for="opcionesmedida">Unidad de Medida</label>
 <select  name="opcionesmedida">
         <option value="" >--Seleccione--</option>
         <option <?php echo $opcionesmedida==="litro"?'selected':'' ?> value="litro">Litro</option>
         <option <?php echo $opcionesmedida==="unidad"?'selected':'' ?> value="unidad">Unidad</option>
     </select>


 <input type="submit" value="Crear PRODUCTO" class="boton boton-verder"  >

    </form>

</main>

<?php
incluirTemplate('footer');
?>