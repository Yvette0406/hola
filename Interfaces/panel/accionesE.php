<?php
require '../vendor/autoload.php';

$pelicula = new Kawschool\Empleado;

if($_SERVER['REQUEST_METHOD'] ==='POST'){

    if ($_POST['acciones']==='Registrar'){

       /* if(empty($_POST['Nombres']))
            exit('Completar Nombres');
        
        if(empty($_POST['Apellidos']))
            exit('Completar Apellidos');

        if(empty($_POST['Telefono']))
            exit('Completar TelefonoS');


        if(empty($_POST['Apellidos']))
            exit('Completar Apellidos'); 
        
        if(empty($_POST['Apellidos']))
            exit('Completar Apellidos');
            
        if(empty($_POST['Cargo']))
            exit('Seleccionar un Cargo');

        if(!is_numeric($_POST['Cargo']))
            exit('Seleccionar un Cargo válido');
        
        if(empty($_POST['Rol']))
            exit('Seleccionar un Rol');

        if(!is_numeric($_POST['Rol']))
            exit('Seleccionar un Rol válido');
*/
        
        $_params = array(
            'NOMBRES'=>$_POST['Nombres'],
            'APELLIDOS'=>$_POST['Apellidos'],
            'TELEFONO'=>$_POST['Telefono'],
            'CARGO'=>$_POST['Cargo'],
            'USUARIO'=>$_POST['Usuario'],
            'CONTRASENA'=>$_POST['Contrasena'],
            'ROL'=>$_POST['Rol'],
            'FOTO'=> subirFoto(),
        );

        $rpt = $pelicula->registrar($_params);

        if($rpt)
            header('Location: Empleados/index.php');
        else
            print 'Error al registrar empleado';
        

    }

    if ($_POST['accion']==='Actualizar'){

        if(empty($_POST['titulo']))
        exit('Completar titulo');
    
    if(empty($_POST['descripcion']))
        exit('Completar titulo');

    if(empty($_POST['categoria_id']))
        exit('Seleccionar una Categoria');

    if(!is_numeric($_POST['categoria_id']))
        exit('Seleccionar una Categoria válida');

    
    $_params = array(
        'PRODUCTO'=>$_POST['titulo'],
        'DESCRIPCION'=>$_POST['descripcion'],
        'PRECIO'=>$_POST['precio'],
        'CATEGORIA_ID'=>$_POST['categoria_id'],
        'ID'=>$_POST['id'],
    );

    if(!empty($_POST['foto_temp']))
        $_params['FOTO'] = $_POST['foto_temp'];
    
    if(!empty($_FILES['foto']['name']))
        $_params['FOTO'] = subirFoto();

    $rpt = $pelicula->actualizar($_params);
    if($rpt)
   
     header('Location: productos/index.php');
    else
        print 'Error al actualizar ';

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
