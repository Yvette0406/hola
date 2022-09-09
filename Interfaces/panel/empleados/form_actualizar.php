<?php
  require '../../vendor/autoload.php';

  if(isset($_GET['id']) && is_numeric($_GET['id'])){
      $id = $_GET['id'];
    
      $producto = new Kawschool\Empleado;
      $resultado = $producto->mostrarPorId($id);

      if(!$resultado)
          header('Location: index.php');

  }else{
    header('Location: index.php');
  }

  

  
 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Brasas & Leñas</title>

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
          <a class="navbar-brand" href="../dashboard.php">Brasas & Leñas</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
          <li Class = "active">
              <a href="index.php" class="btn">Empleados</a>
            </li>   
        <li>
              <a href="../pedidos/index.php" class="btn">Pedidos</a>
            </li> 
            <li>
              <a href="../productos/index.php" class="btn">Productos</a>
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
            <legend>Datos del Producto</legend>
            <form method="POST" action="../accionesE.php" enctype="multipart/form-data" >
              <input type="hidden" name="id" value="<?php print $resultado['ID'] ?>">
              <div class="column">
                  <div class="col-md-4">
                      <div class="form-group">
                          <label>Nombres</label>
                          <input value="<?php print $resultado['FIRST_NAME'] ?>" type="text" class="form-control" name="Nombre" required>
                      </div>
                  </div>
              </div>
              <div class="column">
                  <div class="col-md-4">
                      <div class="form-group">
                          <label>Apellidos</label>
                          <input value="<?php print $resultado['LAST_NAME'] ?>" type="text" class="form-control" name="Apellidos" required>
                      </div>
                  </div>
              </div>
              <div class="column">
                  <div class="col-md-4">
                      <div class="form-group">
                          <label>Telefono</label>
                          <input value="<?php print $resultado['TELEFONO'] ?>" type="text" class="form-control" name="Telefono" required>
                      </div>
                  </div>
              </div>
              <div class="column">
                  <div class="col-md-4">
                      <div class="form-group">
                          <label>DNI</label>
                          <input value="<?php print $resultado['DNI'] ?>" type="text" class="form-control" name="DNI" required>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-2">
                      <div class="form-group">
                          <label>ROLES</label>
                          <select class="form-control" name="categoria_id" required>
                            <option value="">--SELECCIONE--</option>
                            <?php
                             require '../../vendor/autoload.php';
                              $categoria = new Kawschool\Roles;
                              $info_categoria = $categoria->mostrar();
                              $cantidad = count($info_categoria);
                                for($x =0; $x< $cantidad;$x++){
                                  $item = $info_categoria[$x];
                              ?>
                                <option value="<?php print $item['ID'] ?>"
                                 <?php print $resultado['ROL_ID']== $item['ID'] ?'selected':'' ?>
                                ><?php print $item['ROL'] ?></option>
                              <?php

                                }
                              ?>
                          </select>
                      </div>
                  </div>
              </div>
              <div class = "row">
                  <div class="col-md-2">
                      <div class="form-group">
                          <label>Cargo</label>
                          <select class="form-control" name="categoria_id" required>
                            <option value="">--SELECCIONE--</option>
                            <?php
                             require '../../vendor/autoload.php';
                              $categoria = new Kawschool\Cargos;
                              $info_categoria = $categoria->mostrar();
                              $cantidad = count($info_categoria);
                                for($x =0; $x< $cantidad;$x++){
                                  $item = $info_categoria[$x];
                              ?>
                                <option value="<?php print $item['ID'] ?>"
                                 <?php print $resultado['CARGO_ID']== $item['ID'] ?'selected':'' ?>
                                ><?php print $item['CARGO'] ?></option>
                              <?php

                                }
                              ?>
                          </select>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label>Foto</label>
                          <input type="file" class="form-control" name="foto">
                          <input type="hidden" name="foto_temp" value="<?php print $resultado['FOTO']?>">
                      </div>
                  </div>
              </div>
   
              <input type="submit" class="btn btn-primary" name="acciones" value="Actualizar">
              <a href="index.php" class="btn btn-default">Cancelar</a>
                          
            </form>
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
