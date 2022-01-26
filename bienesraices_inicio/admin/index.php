<?php

$tipoProductoSeleccionado = $_GET['id']??'licores';


require '../includes/config/database.php';
$db = conectarBD();

$query = "Select * from $tipoProductoSeleccionado";

$resultado = mysqli_query($db, $query);
$aux = substr($tipoProductoSeleccionado,0 ,3);

if($_SERVER['REQUEST_METHOD']==='POST'){
    $id_eliminar = $_POST['id_eliminar'];
    $id_eliminar = filter_var($id_eliminar,FILTER_VALIDATE_INT);
   if($id_eliminar){
       $query = "Delete from $tipoProductoSeleccionado where id_$aux= $id_eliminar";
        $delete = mysqli_query($db, $query);
        if($delete){
            header("location: /admin/index.php?id=$tipoProductoSeleccionado");
        }
   }
}


$mensaje = $_GET['registrado']??null;

require '../includes/funciones.php';
incluirTemplate('header');


?>
 <?php 
    $nombre_bd = 'hm_eventos';
    $query_tablas = "SHOW TABLES FROM $nombre_bd";
    $resultado_tablas = mysqli_query($db,$query_tablas);
?>
<main class="contenedor seccion">
    <h1>Administrador</h1>

    <a href="/admin/propiedades/crear_tabla.php" style="margin-left: 1rem;" class="boton boton-verder">Agregar Sección</a>
    <a href="/admin/propiedades/crear.php"  class="boton boton-verder">Agregar Producto</a>

    <br>
    <br>
    <h4 style="margin-left: 2rem; font-weight: bold; font-size: 1.8rem;">Opciones:</h4>
    <?php if(intval( $mensaje)===1): ?>
        <p class="alerta exito">Producto Insertado Correctamente</p>
      
        <?php elseif (intval($mensaje)===2):?>
            <p class="alerta exito">Producto Actualizado Correctamente</p>
     <?php endif;?>
<?//php echo $resultado_tablas ?>
      
        <div class="menuProductos " >
            
            <?php while ($fila = mysqli_fetch_row($resultado_tablas)):?> 
                <?php $producto = "{$fila[0]}" ?>

                <form method="GET" class="items-listas" name= <?php echo $producto?> action="/admin/index.php">
                        <input type="hidden" name="id" value= <?php echo $producto?> >
                        <input type="submit" class="item"  value=<?php echo strtoupper($producto)?> >
                </form>
                        
            <?php endwhile ?>
        </div>
    
<div>

        <table class="contenedor">
            <thead>
                <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Unidad de Medida</th>
                <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    <?php while($propiedad = mysqli_fetch_assoc($resultado)): ?>
                    <tr>
                        <td><?php echo$propiedad['id_'.$aux]; ?></td>
                        <td><?php echo $propiedad['desc_'.$aux];?></td>
                        <td>$<?php echo $propiedad['precio_'.$aux];?></td>
                        <td><?php echo $propiedad['unidad_medida_'.$aux]; ?></td>
                        <td>
                            <div>
                                  <form method="POST"  class="formulario-eliminar" name="formu" action="#">
                                     <input type="hidden" name="id_eliminar" value="<?php echo $propiedad['id_'.$aux];?>">
                                     <input type="submit" class="eliminar boton-rojo-block" value="Elim">
                            </form>
                            <a href="propiedades/actualizar.php?id=<?php echo $propiedad['id_'.$aux];?>&tabla=<?php echo $tipoProductoSeleccionado?>" class="boton-amarillo">Act</a>
                      </div>
                          
                           
                       
                        </td>
                       
                      
                    </tr>
                    <?php endwhile;?>
                </tbody>
           
            

        </table>
        </div>
        
</main>

<?php
mysqli_close($db);
incluirTemplate('footer');
?>