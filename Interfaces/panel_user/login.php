<?php

if($_SERVER['REQUEST_METHOD'] ==='POST'){
$nombre_usuario=$_POST['nombre_usuario'];
$clave=$_POST['clave'];
//$clave=hash('sha512',$clave)
require '../vendor/autoload.php';
$usuario = new Kawschool\Usuario;

if(preg_match("/@farma.com/",$nombre_usuario) == 1){

$resultado = $usuario->login($nombre_usuario,$clave);

if($resultado ){
    
  header('Location: dashboard.php');

}else{

    header('Location: dashboard.php');
}
}else{

  Swal.fire("sss");

  }
}