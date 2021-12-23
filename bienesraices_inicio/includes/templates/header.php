<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HM EVENTOS</title>
    <link href="/build/css/app.css" rel="stylesheet" />
  </head>
  <body>
    <header class="header <?php echo $inicio ?'inicio transicion fadeIn':''; ?> ">
      <!--Este header es el principal de la navegacion, aqui va la imagen de fondo-->
    

      <div class="contenedor contenido-header">
        <!--Este div es para centrar dentro del header y contenido ya esta creada
            en los globales, y tiene otra contenido-header para darle estilos individuales-->

        <div class="barra">
          <!--Este div contiene la barra de navegacion-->
          <a href="index.php">
            <!--Se considera un estandar que al dar click a la imagen lleve a la  pagina principal, entonces si damos click va a ir a la pagina principal-->
            <p>HM EVENTOS</p>
            <!--Imagen de fondo y svg es buena opcion-->
          </a>

          <div class="mobile-menu">
            <!--Este esera el menu de tipo hamburguesa-->
            <img src="/build/img/barras.svg" alt="iconohamburguesa" />
          </div>

        
          <div class="derecha">

            <nav class="navegacion">
          

              <a href="nosotros.php">Nosotros</a>
              <a href="anuncios.php">Anuncions</a>
              <a href="blog.php">Blog</a>
              <a href="contacto.php">Contacto</a>
            
        
            </nav>
            
            
   
          </div>
          <div class="rowC">
       
       
     </div>

  
     
            
            <!--<img class="dark-mode-boton" src="build/img/dark-mode.svg" /> -->
          </div>
       

        
       




        <?php if($inicio):?> 
        <h1>Bienvenido a HM EVENTOS</h1>
        <?php else: ?>
          <?php endif;?>
        
      </div>
    </header>