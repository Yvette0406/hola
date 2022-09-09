<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/layout/nav.css">
    <link rel="stylesheet" href="css/layout/footer.css">
    <link rel="stylesheet" href="css/productos.css">
    <!-- Iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/cruz.png" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> 
    <title>Dronvels S.A.C</title>
</head>
<body>
    
    <!-- script boostrap para menús desplegables, ventanas emergentes e información sobre herramientas-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <header>
    <nav>
            <section class="cont_header">
                <div class="header">
                    <div class="cont_header-info">                    
                        <span><i class="far fa-envelope"></i> @farma.com</span>
                        <span><i class="fab fa-whatsapp"></i> 999 999 999</span>
                    </div>
                    <div class="cont_header-user">
                        <a href="login.php">Login</a>
                        <span> | </span>
                        <a href="registro.php">Registrar</a>
                        <span> | </span>
                        <a href="Interfaces/panel/">Intranet</a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </section>      
            <section class="contenedor nav">
                <div class="logo">
                    <a href="index.html"><img src="img/logo.png" alt=""></a>
                </div>                    
                <div class="enlaces-header">
                    <a class="enlaces" href="index.php">Home</a> 
                    <!--a class="enlaces" href="productos.php">Productos</a-->
                    
                <?php
                             require 'interfaces/vendor/autoload.php';
                              $categoria = new Kawschool\Categoria;
                              $info_categoria = $categoria->mostrar();
                              $cantidad = count($info_categoria);
                                for($x =0; $x< $cantidad;$x++){
                                  $item = $info_categoria[$x];
                              ?>
                              <a class="enlaces" href="<?php print "productos.php?id=".$item['ID']?>"><?php print $item['TIPO'] ?></a> 
                            

                              <?php

                                }
                                
                              ?>

                </div>
                <div class="menu">
                    <i class="fas fa-bars"></i>
                </div>
            </section>
        </nav>   
        <!-- inicio Carrusel boostrap-->
        <section class="content-header">   
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./img/contacto/carr_1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="./img/contacto/carr_2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="./img/contacto/carr_3.jpg" class="d-block w-100" alt="...">
              </div>
      
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Fin Carrusel boostrap-->

              
</section>                   
</header>         
<main>
    
    <div class="contenedor">
        <div class="contenedor_productos">
            <aside class="aside_productos">
                <div class="aside_productos-title">
                    <h2>Productos</h2>
                </div>
                <div class="aside_productos-content">
                <?php
                             require 'interfaces/vendor/autoload.php';
                              $categoria = new Kawschool\Categoria;
                              $info_categoria = $categoria->mostrar();
                              $cantidad = count($info_categoria);
                                for($x =0; $x< $cantidad;$x++){
                                  $item = $info_categoria[$x];
                                 
                              ?>
                             
                    <ul>
                        <li><a href="<?php print "productos.php?id=".$item['ID'] ?>"><?php print $item['TIPO'] ?></a></li>                            
                                                 
                    </ul>
                        
                              <?php
                                
                                }
                              ?>
                </div>
            </aside>
            <section class="section_productos">
                <h2>Lista de Productos</h2>
                <div class="list_productos">

                <?php
              require 'interfaces/vendor/autoload.php';
              if(isset($_GET['id']) && is_numeric($_GET['id'])){
                $id = $_GET['id'];
              $producto = new Kawschool\Producto;
              $info_producto = $producto->productsindex();


              $cantidad = count($info_producto);
              if ($cantidad > 0) {
                $c = 0;
                for ($x = 0; $x < $cantidad; $x++) {
                  $c++;
                  $item = $info_producto[$x];
                  if($item['CATEGORIA_ID']==$id){
              ?>
              
             <div class="list_productos-plato">
                        
             <?php
                      $foto = 'interfaces/upload/' . $item['FOTO'];
                      if (file_exists($foto)) {
                      ?>
                          <div class="productos-plato-img">
                            
                            <img src="<?php print $foto; ?>" alt="">
                        </div>
                      <?php } else { ?>
                        SIN FOTO
                      <?php } ?>
                      


                        <h5><?php print $item['PRODUCTO'] ?></h5>
                        <div class="list_productos-opt">
                            <span><?php print "S/".$item['PRICE'] ?></span>
                            <a href="login.php">Comprar</a>
                        </div>
                    </div>
                    <?php
                     }
                    }
                }
            }
                         ?>



                <!--a-->
                    
                   
                  
            
            </section>
        </div>
    </div>
</main>
<footer>
    <div class="partFooter">
        <img src="img/logoFooter.png" alt="logo del Footer">
    </div>
    <div class="partFooter">
        <h4>ASIA</h4>
        <a href="#"><i class="fas fa-phone-alt"></i>
        511 530 - 305</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>
           Panamericana Sur<br> Km. 97.50,<br> Boulevard de Asia</a>            
       </div>        
       <div class="partFooter">
        <h4>CHORRILLOS</h4>
        <a href="#"><i class="fas fa-phone-alt"></i> 511 251 - 8109</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i> Malecon Grau 984.<br>Chorrillos</a>            
    </div>                      
    <div class="partFooter sm">
        <h4>SOCIAL MEDIA</h4>
        <div class="social-media">
            <a href="https://www.facebook.com/bra.sasylenas/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://wa.me/984574250"><i class="fab fa-whatsapp"></i></a>                
            <a href="https://www.instagram.com/brasas_lena/?hl=es"><i class="fab fa-instagram"></i></a>                
        </div>
    </div>           
    <div class="copy">                        
        <p>&copy;2022 Dronvels S.A.C All Rights | Desarrollado por Grupo 3</p> 
    </div>       
</footer>
<script src="scripts/scroll/scrollHeader.js"></script>
<script src="https://widget.sirena.app/get?token=ef8a14b8922f452da4f07e96909fdb01"></script><!-- El de RT --> 
</body>
</html>