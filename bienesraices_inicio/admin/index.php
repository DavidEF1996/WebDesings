<?php

$tipoProductoSeleccionado = $_GET['id']??'licores';
$id_eliminar = $_POST['id_eliminar'];
var_dump($id_eliminar);

require '../includes/config/database.php';
$db = conectarBD();

$query = "Select * from $tipoProductoSeleccionado";

$resultado = mysqli_query($db, $query);
$aux = substr($tipoProductoSeleccionado,0 ,3);

if($_SERVER['REQUEST_METHOD']==='POST'){
   
}


$mensaje = $_GET['registrado']??null;

require '../includes/funciones.php';
incluirTemplate('header');

?>
<main class="contenedor seccion">
    <h1>Administrador</h1>

    <a href="/admin/propiedades/crear.php"  class="boton boton-verder">Agregar</a>

    <?php if(intval( $mensaje)===1): ?>
        <p class="alerta exito">Producto Insertado Correctamente</p>
        <?php endif;?>

        <div class="menuProductos">
  
  <form method="GET" name="pasteleria" action="/admin/index.php">
          <input type="hidden" name="id" value="pasteleria">
          <input type="submit"  value="Pasteleria" >
      </form>
        <form method="GET" name="licores" action="/admin/index.php">
          <input type="hidden" name="id" value="licores">
          <input type="submit"  value="Licores" >
      </form>
      <form method="POST">
                                    <input type="hidden" name="id_eliminar" value="hola">
                                     <input type="submit" class="boton-rojo-block" value="Eliminar">
                            </form>
                      
</div>


        <table class="productos">
            <thead>
                <tr>

                <th>ID</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Unidad de Medida</th>
                <th>Acciones</th>
                </tr>

                <tbody>
                    <?php while($propiedad = mysqli_fetch_assoc($resultado)): ?>
                    <tr>
                        <td><?php echo($propiedad['id_'.$aux])?></td>
                        <td><?php echo ($propiedad['desc_'.$aux])?></td>
                        <td>$<?php echo ($propiedad['precio_'.$aux])?></td>
                        <td><?php echo ($propiedad['unidad_medida_'.$aux]) ?></td>
                        <td>
                            <form method="POST">
                                    <input type="hidden" name="id_eliminar" value="hola">
                                     <input type="submit" class="boton-rojo-block" value="Eliminar">
                            </form>
                      
                       
                        </td>
                        <td>
                        <a href="#" class="boton-amarillo-block">Actualizar</a>
                        </td>
                    </tr>
                    <?php endwhile;?>
                </tbody>
            </thead>
            
        </table>
</main>

<?php
mysqli_close($db);
incluirTemplate('footer');
?>