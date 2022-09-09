<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/layout/nav.css">
    <link rel="stylesheet" href="css/layout/footer.css">
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="stylesheet" href="css/custom/root.css">
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
                </div>
                <div class="menu">
                    <i class="fas fa-bars"></i>
                </div>
            </section>
        </nav>           
    </header>         
    <main>
        <div class="contenedor">
            <section class="section-title">
                <h2>CHECKOUT</h2>
            </section>
            <section class="section_checkout">
                <div class="div-details">
                    <div class="section_checkout-detalles">
                        <div class="detalle-lugar">
                            <h3>Delivery Place</h3>
                            <div class="div-place">
                                <p>Distrito <i class="fas fa-location-arrow"></i></p>
                                <select name="" id="">                                
                                    <option value="">Los Olivos</option>
                                    <option value="">Comas</option>
                                    <option value="">Jesus Maria</option>
                                </select>
                            </div>
                            <label for="">Home Address</label><br>
                            <input type="text">
                        </div>                    
                    </div>
                    <div class="section_checkout-detalles">
                        <div class="detalle-email">
                            <h3>Email Address</h3>
                            <p>Lorem.@gmail.com</p>
                        </div>
                    </div>
                    <div class="section_checkout-detalles billing">
                        <h3>Billing Address</h3>
                        <label for="">First Name</label>
                        <input type="text">
                        <label for="">Last Name</label>
                        <input type="text">
                        <label for="">Telephone</label>
                        <input type="number"> 
                    </div>
                </div>
                <div class="div-review">
                    <div class="review-cant">
                        <span>1 item</span>
                        <a href="carrito.html">Editar</a>
                    </div>
                    <div class="review-products">
                        <div class="review-products-img">
                            <img src="img/productos/baby-angus-porcion-completa-280x230.jpg" alt="">
                        </div>
                        <div class="review-products-info">                            
                            <span>Lorem ipsum dolor sit.</span><br>
                            <span>SubTotal: S/. 72.00</span><br>
                            <span>Cant.: 1</span>
                        </div>                            
                    </div>
                    <div class="review-pay">
                        <div class="review-products-pay">                            
                            <p>SubTotal: S/. 72.00</p>
                            <p>IGV: S/. 12.00</p>
                            <p>Total: S/. 85.00</p>
                        </div> 
                        <input type="submit" value="Pay Order">
                    </div>
                    <div id="smart-button-container">
                        <div style="text-align: center;">
                          <div id="paypal-button-container"></div>
                        </div>
                      </div>
                    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
                    <script>
                      function initPayPalButton() {
                        paypal.Buttons({
                          style: {
                            shape: 'rect',
                            color: 'gold',
                            layout: 'vertical',
                            label: 'paypal',
                            
                          },
                  
                          createOrder: function(data, actions) {
                            return actions.order.create({
                              purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
                            });
                          },
                  
                          onApprove: function(data, actions) {
                            return actions.order.capture().then(function(details) {
                              alert('Transaction completed by ' + details.payer.name.given_name + '!');
                            });
                          },
                  
                          onError: function(err) {
                            console.log(err);
                          }
                        }).render('#paypal-button-container');
                      }
                      initPayPalButton();
                    </script>
                </div>             
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