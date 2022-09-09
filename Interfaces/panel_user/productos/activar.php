<?php


require '../../vendor/autoload.php';

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
     
$pelicula = new Kawschool\Producto;
$info_producto = $pelicula->inactive($id);

$cantidad = count($info_producto);

if ($cantidad > 0) {
  $c = 0;
  for ($x = 0; $x < $cantidad; $x++) {
    $c++;
    $item = $info_producto[$x];
   

  }
  print $item['cod_active'];
    if($item['cod_active'] == 1){

        $_params = array(
            'cod_active' =>0 ,
             'ID' =>  $id
        );    
        
        $rpt = $pelicula->activar($_params);
    
    }else{


        $_params = array(
            'cod_active' =>1 ,
             'ID' =>  $id
        );    
        
        $rpt = $pelicula->activar($_params);



    }
  }
	

if($rpt)
//print $info_producto[cod_active];
header('Location: index.php');
//echo info_producto;
else
print 'Error al activar producto';


}

?>