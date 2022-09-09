
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DRONVELS S.A.C</title>

    <!--  CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/estilos.css">

<!--JQuery-->
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          
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

    <div class="container" id="main" >
      <div class="row">
        <div class="col-md-12">
          <fieldset>
            <legend>Datos de la Producto</legend>
            <form action="#" method="POST" id="form_registro_producto"  enctype="multipart/form-data">
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label" for="titulo">Titulo</label>
                        
                          <input type="text" class="form-control" id="titulo" name="titulo">
                          <span class="help-block"></span>
                          
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label class="control-label" for="descripcion">Descripción</label>
                          <textarea class="form-control" name="descripcion" id="descripcion" cols="3" required></textarea>
                          <span class="help-block"></span>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-4">
                      <div class="form-group">
                          <label class="control-label" for="categoria_id">Categorias</label>
                          <select class="form-control" name="categoria_id" id="categoria_id" required>
                            <option value="">--SELECCIONE--</option>
                            <?php
                             require '../../vendor/autoload.php';
                              $categoria = new Kawschool\Categoria;
                              $info_categoria = $categoria->mostrar();
                              $cantidad = count($info_categoria);
                                for($x =0; $x< $cantidad;$x++){
                                  $item = $info_categoria[$x];
                              ?>
                                <option value="<?php print $item['ID'] ?>"><?php print $item['TIPO'] ?></option>
                              <?php

                                }
                              ?>
                              
                            
                          </select>
                          <span class="help-block"></span>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label>Foto</label>
                          <input type="file" class="form-control" name="foto" id="foto" required>
                          <span class="help-block"></span>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-3">
                      <div class="form-group">
                          <label>Precio</label>
                          <input type="text" class="form-control" id="precio"name="precio" placeholder="0.00" required>
                          <span class="help-block"></span>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-3">
                      <div class="form-group">
                          <label>Stock</label>
                          <input type="text" class="form-control" id="Stock"name="Stock" placeholder="0" required>
                          <span class="help-block"></span>
                      </div>
                  </div>
              </div>
              <input type="hidden" name="accion" value="Registrar">
              <input type="submit" name="save" class="btn btn-primary" value="save" id="save">
              <a href="index.php" class="btn btn-default">Regresar</a>
 
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

    <!--alert, javaScript-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/validar_registro_producto.js" type="text/javascript"></script>
    
</body>
</html>
