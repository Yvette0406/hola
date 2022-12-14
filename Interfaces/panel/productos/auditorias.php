<DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title> DRONVELS S.A.C</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/estilos.css">
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../dashboard.php">Dronvels S.A.C</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li>
              <a href="../pedidos/index.php" class="btn">Pedidos</a>
            </li> 
            <li class="active">
              <a href="index.php" class="btn">Productos</a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">admin <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Salir</a></li>
                </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" id="main">
  

    <div class="row">
      <div class="col-md-12">
        <fieldset>
          <legend>Auditorias</legend>
          <table id="table" name="table" class="table table-bordered display nowrap ">
            <thead>
              <tr>
                <th>#</th>
                <th>Acci??n</th>
                <th>Fecha de registo</th>
              </tr>
            </thead>
            <tbody>
            <?php
              require '../../vendor/autoload.php';
              $producto = new Kawschool\auditoria;
              $info_producto = $producto->mostrar();


              $cantidad = count($info_producto);
              if ($cantidad > 0) {
                $c = 0;
                for ($x = 0; $x < $cantidad; $x++) {
                  $c++;
                  $item = $info_producto[$x];
              ?>


                  <tr>
                    <td><?php print $c ?></td>
                    <td><p><?php print $item['accion'] ?></p></td>
                    <td><?php print $item['fecha_hora'] ?></td>
                  </tr>

                <?php
                }
              } else {

                ?>
                <tr>
                  <td colspan="6">NO HAY REGISTROS</td>
                </tr>

              <?php } ?>




            </tbody>
                
            <tfoot>
              <tr>
                <th>#</th>
                <th>Acci??n</th>
                <th>Fecha de registro</th>
              </tr>
            </tfoot>
          </table>
        </fieldset>
      </div>
    </div>
                
  </div> <!-- /container -->
                








    
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>

  </body>
</html>
