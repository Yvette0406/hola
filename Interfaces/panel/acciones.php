<?php
require '../vendor/autoload.php';

$pelicula = new Kawschool\Producto;

if($_SERVER['REQUEST_METHOD'] ==='POST'){

    
    if ($_POST['accion']==='Registrar'){

        $_params = array(
            'PRODUCTO'=>$_POST['titulo'],
            'DESCRIPCION'=>$_POST['descripcion'],
            'FOTO'=> subirFoto(),
            'PRICE'=>$_POST['precio'],
            'Stock'=>$_POST['Stock'],
            'CATEGORIA_ID'=>$_POST['categoria_id'],
        );

        $rpt = $pelicula->registrar($_params);

        if($rpt){
       /*     header('Location: productos/index.php');*/
            print 'Producto registrado';
        }else{
            /*print 'Error al registrar un producto';*/
            print 'Error al registrar un producto';
        }
    }else if ($_POST['accion']==='Actualizar'){

        
    
    $_params = array(
        'PRODUCTO'=>$_POST['titulo'],
        'DESCRIPCION'=>$_POST['descripcion'],
        'PRECIO'=>$_POST['precio'],
        'Stock'=>$_POST['Stock'],
        'CATEGORIA_ID'=>$_POST['categoria_id'],
        'FOTO'=>$_POST['foto_temp'],
        'ID'=>$_POST['id'],
    );

    if(!empty($_POST['foto_temp']))
        $_params['FOTO'] = $_POST['foto_temp'];
    
    if(!empty($_FILES['foto']['name']))
        $_params['FOTO'] = subirFoto();

    $rpt = $pelicula->actualizar($_params);
        if($rpt){
        /*header('Location: productos/index.php');*/
            /*print 'Producto Actualizado';*/
            $var='Actualizado';
            $_POST['var']=$var;
            echo $_POST['var'];
        }else{
            print 'Error al actualizar ';
        }
    }else if ($_POST['accion']==='ActualizarEmp'){

        $_params = array(
            'Stock'=>$_POST['Stock'],
            'ID'=>$_POST['id'],
        );


        $rpt = $pelicula->actualizarE($_params);
        if($rpt){
       
         /*header('Location: productos/index.php');*/
            $var='ActualizadoE';
            $_POST['var']=$var;
            echo $_POST['var'];
            //exit();
            //print 'Producto Actualizado';
        }else{
            print 'Error al actualizar ';
        }

    }


}

if($_SERVER['REQUEST_METHOD'] ==='GET'){

    $id = $_GET['id'];

    $rpt = $pelicula->eliminar($id);
    
    if($rpt)
        header('Location: productos/index.php');
    else
        print 'Error al eliminar un producto';


}


function subirFoto() {

    $carpeta = __DIR__.'/../upload/';

    $archivo = $carpeta.$_FILES['foto']['name'];

    move_uploaded_file($_FILES['foto']['tmp_name'],$archivo);

    return $_FILES['foto']['name'];


}




