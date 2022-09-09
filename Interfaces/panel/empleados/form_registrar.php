<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Brasas & Leñas</title>

    <!--  CSS -->
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
          <li class = "active">
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

    <div class="container" id="main" >
      <div class="row">
        <div class="col-md-12">
          <fieldset>
            <legend>Datos del Empleado</legend>
            <form method="POST" action="../accionesE.php" enctype="multipart/form-data" >
            <div class = "column">
                  <div class="col-md-3">
                      <div class="form-group">
                          <label>Nombres</label>
                          <input type="text" class="form-control" name="Nombres" required>
                      </div>
                  </div>
              </div>
              <div class = "column">
                  <div class="col-md-3">
                      <div class="form-group">
                          <label>Apellidos</label>
                          <input type="text" class="form-control" name="Apellidos" required>
                      </div>
                  </div>
              </div>
              <div class = "Column">
                  <div class="col-md-3">
                      <div class="form-group">
                          <label>Telefono</label>
                          <input type="txt" class="form-control" name="Telefono"  maxlength="9" required>
                      </div>
                  </div>
              </div>
              <div class = "Column">
                  <div class="col-md-3">
                      <div class="form-group">
                          <label>DNI</label>
                          <input type="txt" class="form-control" name="DNI" maxlength="8" required>
                      </div>
                  </div>
              </div>
              <div class = "Column">
                  <div class="col-md-2">
                      <div class="form-group">
                          <label>CARGO</label>
                          <select class="form-control" name="Cargo_id" required>
                            <option value="">--SELECCIONE--</option>
                            <?php
                             require '../../vendor/autoload.php';
                              $categoria = new Kawschool\Cargos;
                              $info_categoria = $categoria->mostrar();
                              $cantidad = count($info_categoria);
                                for($x =0; $x< $cantidad;$x++){
                                  $item = $info_categoria[$x];
                              ?>
                                <option value="<?php print $item['ID'] ?>"><?php print $item['CARGO'] ?></option>
                              <?php

                                }
                              ?>
                            
                          </select>
                      </div>
                  </div>
              </div>

              <div class = "Column">
                  <div class="col-md-3">
                      <div class="form-group">
                          <label>Usuario</label>
                          <input type="txt" class="form-control" name="Usuario" required>
                      </div>
                  </div>
              </div>
              <div class = "Colum">
                  <div class="col-md-3">
                      <div class="form-group">
                          <label>Contraseña</label>
                          <input type="password" class="form-control" name="Contrasena" required>
                      </div>
                  </div>
              </div>

              <div class = row>
                  <div class="col-md-2">
                      <div class="form-group">
                          <label>ROL</label>
                          <select class="form-control" name="Rol" required>
                            <option value="">--SELECCIONE--</option>
                            <?php
                             require '../../vendor/autoload.php';
                              $categoria = new Kawschool\Roles;
                              $info_categoria = $categoria->mostrar();
                              $cantidad = count($info_categoria);
                                for($x =0; $x< $cantidad;$x++){
                                  $item = $info_categoria[$x];
                              ?>
                                <option value="<?php print $item['ID'] ?>"><?php print $item['ROL'] ?></option>
                              <?php

                                }
                              ?>
                            
                          </select>
                      </div>
                  </div>
              </div>
              <div class = row>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label>Foto</label>
                          <input type="file" class="form-control" name="foto" required>
                      </div>
                  </div>
             </div>
             <input type="submit" name="acciones" class="btn btn-primary" value="Registrar">
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
