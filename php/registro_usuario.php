<?php

include 'conexion.php';

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];
$clave=hash('sha512',$clave);

//verificar que no se repita correo

$verificar_correo=mysqli_query($conexion,"SELECT ID FROM USUARIOS WHERE EMAIL='$correo'");

if(mysqli_num_rows($verificar_correo)==1)
{
echo '<script>
alert("este correo ya esta registrado, intenta con otro diferente");

window.location="../registro.php";
</script>';
exit();
}
$busqueda="SELECT ID FROM ROLES WHERE ROL ='Cliente'";
$IDrol=mysqli_fetch_array(mysqli_query($conexion,$busqueda));

$result = "INSERT INTO USUARIOS(ROL_ID,EMAIL,CLAVE) 
VALUES($IDrol[0],'$correo','$clave')";
$ejecutar=mysqli_query($conexion,$result);

if($ejecutar)
{

// si se ejecuta el registro de la primera tabla vá a la segunda.    
$verificar_correo2=mysqli_query($conexion,"SELECT ID FROM USUARIOS WHERE EMAIL='$correo'");    
$fila  = mysqli_fetch_array($verificar_correo2);
$result2 = "INSERT INTO CLIENTES(FIRST_NAME,LAST_NAME,USER_ID) VALUES('$nombre','$apellido',$fila[0])";
$ejecutar2=mysqli_query($conexion,$result2);

}

if($ejecutar2){


    echo '<script>
    alert("usuario almacenado");
    window.location="../registro.php";
    </script>';
    

}else{

    echo '<script>
    alert("Intente de nuevo, usuario no almacenado");
    window.location="../registro.php";
    </script>';
}
mysqli_close($conexion);
?>





