<nav>
            <section class="cont_header">
                <div class="header">
                    <div class="cont_header-info">                    
                        <span><i class="far fa-envelope"></i> ventas@farma.com</span>
                        <span><i class="fab fa-whatsapp"></i> 999 999 999</span>
                    </div>
                    <div class="cont_header-user">
                        <li class="dropdown" style="list-style:none">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-solid fa-user"></i>  Bienvenido <?php echo $_SESSION['usuario']?>! <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="php/cerrar_sesionL.php">Salir</a></li>
                            </ul>
                        </li>
                    </div>
                </div>
            </section>    
            <section class="contenedor nav">
                <div class="logo">
                    <a href="index.html"><img src="img/logo.png" alt=""></a>
                </div> 
                <div class="enlaces-header">  
                <a class="enlaces" href="bienvenido.php">Home</a>      
        
                <!--a class="enlaces" href="productos.php">Productos</a-->

                <?php
                             require 'interfaces/vendor/autoload.php';
                              $categoria = new Kawschool\Categoria;
                              $info_categoria = $categoria->mostrar();
                              $cantidad = count($info_categoria);
                                for($x =0; $x< $cantidad;$x++){
                                  $item = $info_categoria[$x];
                              ?>
                              <a class="enlaces" href="<?php print "productosL.php?id=".$item['ID']?>"><?php print $item['TIPO'] ?></a> 
                              <?php

                                }
                                
                              ?>
                       
    
                </div>
                <div class="menu">
                    <i class="fas fa-bars"></i>
                </div>
            </section>
            
        </nav>  