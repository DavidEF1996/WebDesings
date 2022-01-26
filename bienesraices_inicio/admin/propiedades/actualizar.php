<?php

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

$tabla = $_GET['tabla'];


if(!$id||!$tabla){
    header('Location: /admin');
}


require '../../includes/config/database.php';
$db = conectarBD();

//Obtener datos para la actualizacion
$aux = substr($tabla,0 ,3);
$queryConsulta = "select * from $tabla where id_$aux = $id";
$resultadoConsulta = mysqli_query($db,$queryConsulta);
$producto = mysqli_fetch_assoc($resultadoConsulta);

$errores=[];
$opcionestipo = $tabla;
    $nombre = $producto['desc_'.$aux];
    $precio = $producto['precio_'.$aux];
    $opcionesmedida = $producto['unidad_medida_'.$aux];

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
       // $query = "Insert into $opcionestipo(desc_$auxiliar, precio_$auxiliar, unidad_medida_$auxiliar) values ('$nombre', '$precio', '$opcionesmedida')";
        $query = "UPDATE $tabla set desc_$aux='$nombre', precio_$aux='$precio', unidad_medida_$aux='$opcionesmedida' where id_$aux=$id";
      
        $resultado  = mysqli_query($db,$query);
        if($resultado){
           header('Location: /admin?mensaje=Actualizado Correctamente&registrado=2');
        }
    }

 

 
 
 
}


require '../../includes/funciones.php';
incluirTemplate('header');

?>
<main class="contenedor seccion">
    <h1>Actualizar</h1>
    <a href="/admin/"  class="boton boton-verder">Volver</a>


    <?php foreach($errores as $error): ?>
        
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
 
    <form class="formulario" name="formulario" method="POST" >
 
 <legend>Insertar productos</legend>
 <label for="opcionestipo">Seleccione el tipo de producto: </label>
     <select name="opcionestipo">
         <option value="">--Seleccione--</option>
         <option <?php echo $opcionestipo==="licores"?'selected':'' ?> value="licores">Licores</option>
         <option <?php echo $opcionestipo==="pasteleria"?'selected':'' ?> value="pasteleria">Pastelería</option>
         <option <?php echo $opcionestipo==="amplificacion"?'selected':'' ?> value="amplificacion">Amplificación</option>
         <option <?php echo $opcionestipo==="artistas"?'selected':'' ?> value="artistas">Artistas</option>
         <option <?php echo $opcionestipo==="decoracion"?'selected':'' ?> value="decoracion">Decoración</option>
         <option <?php echo $opcionestipo==="personal"?'selected':'' ?> value="personal">Personal</option>
         <option <?php echo $opcionestipo==="varios"?'selected':'' ?> value="varios">Varios</option>
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


 <input type="submit" value="ACTUALIZAR PRODUCTO" class="boton boton-verder"  >

    </form>

</main>

<?php
incluirTemplate('footer');
?>