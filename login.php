<?php
/*session_start();
if(isset($_SESSION['usuario']))
{
header("location: bienvenido.php");


}*/
?>

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
    <title>DRONVELS S.A.Cx</title>
</head>
<body>
    <header>
        
        <?php
            require_once('header.php');
        ?>
                 
    </header>         
    <main>
        <div class="contenedor">
            <section class="section-login">
                <div class="img-logo">
                    <img src="img/cruz.png" alt="">
                </div>                
                <form action="php/login_user.php" method="POST"class="login"> 
                    <div class="text-div">
                        <h2>Bienvenido</h2>
                        <h3>Iniciar sesión</h3>
                    </div>
                    <div class="input-div">
                        <div class="i">                            
                            <i class="fas fa-at"></i>
                        </div>
                        <div>
                            <input class="input-user" type="email" placeholder="Email*" name="correo">
                        </div>
                    </div>
                    <div class="input-div">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div>                            
                            <input class="input-user" type="password" placeholder="Password*" name="clave">
                        </div>
                    </div>
                    <div class="log-div">
                        <p>¿No tienes Cuenta? <a class="referencia" href="registro.php">Registrate</a> </p>
                        <input type="submit" value="Login">
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
            <p>&copy;2021 DRONVELS S.A.C All Rights | Desarrollado por Boris Flores</p> 
        </div>       
    </footer>
    <script src="https://widget.sirena.app/get?token=ef8a14b8922f452da4f07e96909fdb01"></script><!-- El de RT --> 
    <script src="scripts/scroll/scrollHeader.js"></script>    
</body>
</html>