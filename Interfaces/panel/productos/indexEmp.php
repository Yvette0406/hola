<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DRONVELS S.A.C</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/estilos.css">
  

  <!--datatable-->

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
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
            <a href="../pedidos/indexEmp.php" class="btn">Pedidos</a>
          </li>
          <li class="active">
            <a href="indexEmp.php" class="btn">Productos</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Empleado <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../../../php/cerrar_sesion.php">Salir</a></li>
            </ul>
          </li>
        </ul>




      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>

  <div class="container" id="main">
    <div class="row">
      <div class="col-md-12">
        <div class="pull-right">
        
          <a href="form_registrar.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Nuevo</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <fieldset>
          <legend>Listado de Productos</legend>
          <table id="table" name="table" class="table table-bordered display nowrap ">
            <thead>
              <tr>
                <th>#</th>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Precio</th>
                <th>Stock</th>
                <th class="text-center">Foto</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
              require '../../vendor/autoload.php';
              $producto = new Kawschool\Producto;
              $info_producto = $producto->mostraruser();


              $cantidad = count($info_producto);
              if ($cantidad > 0) {
                $c = 0;
                for ($x = 0; $x < $cantidad; $x++) {
                  $c++;
                  $item = $info_producto[$x];
              ?>


                  <tr>
                    <td><?php print $c ?></td>
                    <td><?php print $item['PRODUCTO'] ?></td>
                    <td><?php print $item['TIPO'] ?></td>
                    <td><?php print $item['PRICE'] ?></td>
                    <td><?php print $item['Stock'] ?></td>
                    <td class="text-center">
                      <?php
                      $foto = '../../upload/' . $item['FOTO'];
                      if (file_exists($foto)) {
                      ?>
                        <img src="<?php print $foto; ?>" width="50">
                      <?php } else { ?>
                        SIN FOTO
                      <?php } ?>
                    </td>
                    <td class="text-center">

                      <!--a href="../acciones.php?id=<?php print $item['ID'] ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a-->
                      <a href="form_actualizarEmp.php?id=<?php print $item['ID']  ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                      <!--button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_activar_producto"><span class="glyphicon glyphicon-ok"></span></button-->
                    </td>

                  </tr>

                <?php
                }
              } else {

                ?>
                <tr>
                  <td colspan="6">NO HAY REGISTROS</td>
                </tr>

              <?php } ?>
                <!-- Modal -->
                  <div class="modal fade" id="modal_eliminar_producto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="exampleModalLabel">DRONVELS S.A.C</h4> Eliminar Producto
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                      <div class="modal-body">
                        ¿Deseas eliminar el producto?
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary  btn-sm" data-dismiss="modal">Cerrar</button>
                          <a href="../acciones.php?id=<?php print $item['ID'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                      </div>
                    </div>
                  </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="modal_activar_producto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="exampleModalLabel">DRONVELS S.A.C</h4> Producto Activo/Inactivo
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                      <div class="modal-body">
                        ¿Deseas ......?
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary  btn-sm" data-dismiss="modal">Cerrar</button>
                          <a href="activar.php?id=<?php print $item['ID'] ?>" class="btn btn-danger btn-sm">Activar</a>
                      </div>
                    </div>
                  </div>
                </div>
                

            </tbody>
                
            <tfoot>
              <tr>
                <th>#</th>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Precio</th>
                <th>Foto</th>
                <th>Acciones</th>
              </tr>
            </tfoot>
          </table>
        </fieldset>
      </div>
    </div>
                
  </div> <!-- /container -->
                

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!--Placed at the end of the document so the pages load faster -->
  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
  <script src="js/datatable-conf.js"></script>
  

  
</body>

</html>