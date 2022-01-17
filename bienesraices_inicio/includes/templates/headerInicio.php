<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HM EVENTOS</title>
    <link href="../../build/css/app.css" rel="stylesheet" />
  </head>
  <body>
    <header class="header <?php echo $inicio ?'inicio transicion fadeIn':''; ?> ">
      <!--Este header es el principal de la navegacion, aqui va la imagen de fondo-->
    

      <div class="contenedor contenido-header">
        <!--Este div es para centrar dentro del header y contenido ya esta creada
            en los globales, y tiene otra contenido-header para darle estilos individuales-->

       

        
       




     
        
      </div>
    </header>




    <div class="barra-total">
      <!--Este header es el principal de la navegacion, aqui va la imagen de fondo-->
    

      <div class="contenedor contenido-header">
        <!--Este div es para centrar dentro del header y contenido ya esta creada
            en los globales, y tiene otra contenido-header para darle estilos individuales-->

        <div class="barra">
          <!--Este div contiene la barra de navegacion-->
        
          <?php if($inicio):?> 
        <h1>HM EVENTOS</h1>
        <?php else: ?>
          <?php endif;?>

          <div class="mobile-menu">
            <!--Este esera el menu de tipo hamburguesa-->
            <img src="/build/img/barras.svg" alt="iconohamburguesa" />
          </div>

        
     

            <nav class="navegacion">
          

              <a href="productos.php">Productos</a>
             
           
              <a href="#">Contacto</a>
             

              <a href="anuncios.php">
              <img src="/AuxiliarImages/cart.png" id="img-carrito" class="carrito-imagen" />

              </a>
             
            
        
            </nav>
           
            
            

       

  
     
            
            <!--<img class="dark-mode-boton" src="build/img/dark-mode.svg" /> -->
          </div>
       

        
       




        
        
      </div>
        </div>