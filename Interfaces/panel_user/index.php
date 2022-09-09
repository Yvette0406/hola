
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dronvels S.A.C</title>
    <link rel="stylesheet" href="../../css/layout/nav.css">
    <link rel="stylesheet" href="../../css/layout/footer.css">
    <link rel="stylesheet" href="../../css/custom/root.css">
    <link rel="stylesheet" href="../../css/index.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilos.css">
  </head>
    
  <body>

    <nav>
               
            <section class="contenedor nav">
                <div class="logo">
                    <!--a href="../../index.html"><img src="../../img/logo.png" alt=""></a-->
                </div>                    
            
                <div class="menu">
                    <i class="fas fa-bars"></i>
                </div>
            </section>
        </nav>  

    <div class="container" id="main">
        <div class="main-login">
            <form action="login.php" method="post">
                <div class="panel panel-default">

                    <div class="panel-heading logo">
                    <div class="logo">
                    <a href="../../index.php"><img src="../../img/logo.png" alt=""></a>
                </div> 
                        <!--h3 class="text-center">INTRANET</h3-->
                    </div>
                    <div class="panel-body">
                        <p class="text-center">
                          
                        </p>
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" class="form-control" name="nombre_usuario" placeholder="Usuario" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="clave" placeholder="Password" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
                    </div>
                </div>
            </form>

        </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
  </body>
</html>