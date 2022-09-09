<?php
if($_SERVER['REQUEST_METHOD'] ==='POST'){
$nombre_usuario=$_POST['nombre_usuario'];
$clave=$_POST['clave'];
$clave=hash('sha512',$clave);
session_start();
$_SESSION['nombre_usuario']=$nombre_usuario;
$conexion=mysqli_connect("localhost","root","","storep&b_sql");

$validar_login=mysqli_query($conexion, "SELECT * FROM USUARIOS WHERE 
EMAIL='$nombre_usuario' and CLAVE='$clave'");
$filas=mysqli_fetch_array($validar_login);
if($filas['ROL_ID']== 1){//administrador
header("Location: dashboard.php");
}else
if($filas['ROL_ID']==2){ //empleado
  header('Location: dashboardEmp.php');
}
else{
    ?>
    <?php
    include("index.php");
    ?>
    <div class="container" id="main">
    <div class="main-login"> <div class="panel-body">
    <div class="alert alert-danger" role="alert">
      Usuario y/o contraseña incorrecto
    </div></div></div>
    </div>
    <?php
}
mysqli_free_result($validar_login);
mysqli_close($conexion);
/*
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

  }*/
}