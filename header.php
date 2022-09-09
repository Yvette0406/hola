
        <nav>
            <section class="cont_header">
                <div class="header">
                    <div class="cont_header-info">                    
                        <span><i class="far fa-envelope"></i> ventas@farma.com</span>
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
         
        <div class="wave" style="height: 120px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C206.26,182.07 286.40,187.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>        
