<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/layout/nav.css">
    <link rel="stylesheet" href="css/layout/footer.css">
    <link rel="stylesheet" href="css/login.css">
    <!-- Iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/cruz.png" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <title>DRONVELS S.A.C</title>
</head>
<body>
    <header>
        <nav>
            <section class="cont_header">
                <div class="header">
                    <div class="cont_header-info">                    
                        <span><i class="far fa-envelope"></i> ventas@farma.com</span>
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
                    
                    <a class="enlaces" href="productos.php">Productos</a>           
                              
                </div>
                <div class="menu">
                    <i class="fas fa-bars"></i>
                </div>
            </section>
        </nav>           
    </header>         
    <main>
        <div class="contenedor">
            <section class="section-login">
                <div class="img-logo">
                    <img src="img/cruz.png" alt="">
                </div>                
                <form action="php/registro_usuario.php" method="POST" class="login"> 
                    <div class="text-div">
                        <h2>Bienvenido</h2>
                        <h3>Crear cuenta</h3>
                    </div>
                    <div class="input-div">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <input class="input-user" type="text" placeholder="Nombres*" name="nombre" required="required">
                        </div>
                    </div>
                    <div class="input-div">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <input class="input-user" type="text" placeholder="Apellidos*" name="apellido" required="required">
                        </div>
                    </div>
                    <div class="input-div">
                        <div class="i">
                            <i class="fas fa-at"></i>
                        </div>
                        <div>
                            <input class="input-user" type="email" placeholder="Email*" name="correo" required="required">
                        </div>
                    </div>
                    <div class="input-div">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div>                            
                            <input class="input-user" type="password" placeholder="Password*" name= "clave" required="required">
                        </div>
                    </div>
                    <div class="log-div">
                        <p>¿Ya tienes Cuenta? <a class="referencia" href="login.php">Login</a></p>
                        <input type="submit" value="Register">
                    </div>


                    
                </form>
                
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
            <p>&copy;2021 Brasas y Leñas All Rights | Desarrollado por Boris Flores</p> 
        </div>       
    </footer>
    <script src="https://widget.sirena.app/get?token=ef8a14b8922f452da4f07e96909fdb01"></script><!-- El de RT --> 
    <script src="scripts/scroll/scrollHeader.js"></script>    
    
</body>
</html>