<?php

session_start();
if(!isset($_SESSION['usuario']))
{

  echo  '<script>
    alert("Por favor debes iniciar sesion");
    window.location="login.php";

    </script>';
    header("location: index.php"); 
    session_destroy();
    die();
}
?>

<!--!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido............</h1>
    <a href="php/cerrar_sesion.php">cerrar sesion</a>
</body>
</html-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/layout/nav.css">
    <link rel="stylesheet" href="css/layout/footer.css">
    <link rel="stylesheet" href="scripts/Preloader/carga.css">
    <link rel="stylesheet" href="css/custom/root.css">
    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="interfaces/assets/css/bootstrap.min.css">
    <!-- Iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/cruz.png" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> 
    <title>Bienvenido</title>
</head>
<body> 
    <div id="contenedor-preloader">
        <div class="cont-logo"><img src="img/logoFooter.png" alt=""></div>
        <div id="preloader"></div>
    </div>  
    <header>
        <?php
   require_once('headerL.php')
         ?>
        <div class="wave" style="height: 120px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C206.26,182.07 286.40,187.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>        

        <section class="texto-header">            
            <h1>Distribución y comercialización de productos farmacéuticos</h1>
            <h2>Contamos con ofertas y promociones exclusivas</h2>
        </section>   
        <div class="wave" style="height: 120px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C206.26,182.07 286.40,187.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>        
    </header> 
   
    <main>
        <section class="contenedor">
            <div class="contenido-intro">
                <div class="textos-intro">
                    <h2 class="textos_intro-title">CONÓCENOS</h2>
                    <p>Llevamos más de 10 años ofreciéndote medicamentos y equipos que velen por tu salud, además de todo tipo de productos para el cuidado personal y de belleza, siempre con la misma calidad y garantía.                        
                        <br><br>Somos un establecimiento que provee de atención farmacéutica especializada para la cobertura de las prestaciones, con seguridad, oportunidad y calidad. Atiende los requerimientos de medicamentos y dispositivos delas cinco especialidades.</p>
                    <a href="productos.php">Productos | <i class="fas fa-bars"></i></a>
                </div>
                <video autoplay loop muted>
                    <source src="video/video.mp4" type="video/mp4">
                </video>
            </div>            
        </section>
        <section class="about-chef">
             <div class="contenedor">
                <h2 class="titulo">NUESTROS PROVEEDORES</h2> 
                <div class="cont-chef">
                    <div class="contenido-chefs">
                        <img src="img/index/prov1.png" alt="">
                        <h3>BAYER</h3>
                        <p>Bayer AG es una de las multinacionales farmacéuticas con mayor volumen de ventas a nivel mundial. Pharmaceuticals, está dedicada a la distribución y comercialización de medicamentos, especialmente de cardiología, oncología, hematología y oftalmología.​</p>
                    </div>
                    <div class="contenido-chefs">
                        <img src="img/index/prov2.png" alt="">
                        <h3>Unilever</h3>
                        <p>Unilever cuenta con 400 o más marcas; sin embargo, la compañía se centra en las llamadas «marcas de mil millones de dólares»: trece marcas, cada una de las cuales factura anualmente más de mil millones de euros.</p>
                    </div>
                    <div class="contenido-chefs">
                        <img src="img/index/prov3.png" alt="">
                        <h3>InduQuimica</h3>
                        <p>	Laboratorios Induquímica está comprometido al desarrollo de productos nuevos y mejoramiento de los mismos, es por ello que nos adelantamos a encontrar soluciones utilizando excipientes de última generación, lo que nos permite tener productos de calidad con desarrollos eficaces y seguros.</p>
                    </div>
                </div>
            </div>
        </section>
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
                <a href="https://wa.me/984574250"><i class="fab fa-tiktok"></i></a>
                <a href="https://www.instagram.com/brasas_lena/?hl=es"><i class="fab fa-instagram"></i></a>                
            </div>
        </div>           
        <div class="copy">                        
            <p>&copy;2021 Dronvels S.A.C All Rights | Desarrollado por Grupo 3</p> 
        </div>       
    </footer>
    <script src="scripts/scroll/scrollHeader.js"></script>
    <script src="scripts/Preloader/carga.js"></script>       

    <script src="interfaces/assets/js/jquery.min.js"></script>
    <script src="interfaces/assets/js/bootstrap.min.js"></script>
    

</body>
</html>