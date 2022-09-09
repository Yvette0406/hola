<?php
session_start();
include 'conexion.php';

$correo=$_POST['correo'];
$clave=$_POST['clave'];
$clave=hash('sha512',$clave);


$validar_login=mysqli_query($conexion, "SELECT * FROM USUARIOS WHERE 
EMAIL='$correo' and CLAVE='$clave'");

if(mysqli_num_rows($validar_login) == 1)
{
    
    //Si el dominio es '@parrillas.com' redirecciona al panel de admin o empleado.
    if(preg_match("/@parrillas.com/",$correo) == 1 ){

        echo '<script>
        alert("Usuario no existe");
        
        window.location="../login.php";
        </script>';
        exit;
        
    }else{

        $_SESSION['usuario']=$correo;
        header("location: ../bienvenido.php");
        exit;
    }

}else{
    echo '<script>
    alert("Usuario no existe");
    
    window.location="../login.php";
    </script>';
    exit;

}

?>