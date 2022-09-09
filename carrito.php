<?php
/*if($POST[id]);*/






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/layout/nav.css">
    <link rel="stylesheet" href="css/layout/footer.css">
    <link rel="stylesheet" href="css/carrito.css">    
    <!-- Iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/cruz.png" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> 
    <title>DRONVELS S.A.C</title>
</head>
<body>    
    <header>
        <nav>
            <section class="cont_header">
                <div class="header">
                    <div class="cont_header-info">                    
                        <span><i class="far fa-envelope"></i> ventas@parrillas.com</span>
                        <span><i class="fab fa-whatsapp"></i> 955 373 365</span>
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
                    <a class="enlaces" href="index.html">Home</a>                    
                    <a class="enlaces" href="Nuestrapropuesta.html">Nuestra Propuesta</a>    
                    <a class="enlaces" href="productos.php">Productos</a>           
                    <a class="enlaces" href="reservas.html">Reservas</a>                                                                                       
                    <a class="enlaces" href="Politica.html">Políticas de Reparto</a>                   
                    <a class="enlaces" href="contacto.html">Contacto</a>   
                    <a href=""><i class="fas fa-shopping-cart"></i></a>                  
                </div>
                <div class="menu">
                    <i class="fas fa-bars"></i>
                </div>
            </section>
        </nav>  
        <section class="content-header">   
            <img src="./img/contacto/page-header.jpg" alt="">         
            <div class="text-header">
                <h1>Carrito de Compras</h1>                                  
            </div>          
        </section>                        
    </header>         
    <main>
        <div class="contenedor">
            <section class="section-enlaces">
                <a href="index.html">Inicio / <a>Carrito de Compras</a></a>
            </section>
            <section class="section_tabla">
                <table>
                    <colgroup>
                        <col style="width: 20%;">
                        <col style="width: 30%;">
                        <col style="width: 15%;">
                        <col style="width: 15%;">
                        <col style="width: 15%;">
                        <col style="width: 5%;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Sub-Total</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="img/productos/baby-angus-porcion-completa-280x230.jpg" alt="">
                            </td>
                            <td>
                                <p>Baby beef Angus U.S.A a la parrilla</p>
                            </td>
                            <td>
                                <p>S/ 72.00</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>S/ 72.00</p>
                            </td>
                            <td class="trash">
                                <i class="far fa-trash-alt"></i>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4">Total</td>
                            <td colspan="2">S/ 0.00</td>
                        </tr>                        
                    </tfoot>
                </table>
            </section>
            <section class="section-btn">
                <a href="productos.php">Seguir | <i class="fas fa-cart-plus"></i></a>
                <a href="checkout.php">Procesar Compra</a>
            </section>
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
            <p>&copy;2021 DRONVELS S.A.C All Rights | Desarrollado por Boris Flores</p> 
        </div>       
    </footer>         
    <script src="https://widget.sirena.app/get?token=ef8a14b8922f452da4f07e96909fdb01"></script><!-- El de RT --> 
    <script src="scripts/scroll/scrollHeader.js"></script>    
</body>
</html>