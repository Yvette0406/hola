<?php

namespace Kawschool;

class Empleado{

    private $config;
    private $cn = null;

    public function __construct(){

        $this->config = parse_ini_file(__DIR__.'/../config.ini') ;

        $this->cn = new \PDO( $this->config['dns'], $this->config['usuario'],$this->config['clave'],array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ));
        
    }

    public function registrar($_params){
        $sql = "INSERT INTO USUARIOS(ROL_ID,EMAIL,CLAVE) 
        VALUES (:ROL_ID,:EMAIL,:CLAVE);
        
        INSERT INTO EMPLEADOS(FIRST_NAME,LAST_NAME,TELEFONO,DNI,CARGO,USER_ID,FOTO) VALUES(:FIRST_NAME,:LAST_NAME,:TELEFONO,:DNI,:CARGO,:USER_ID,:FOTO)";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":FIRST_NAME" => $_params['NOMBRES'],
            ":LAST_NAME" => $_params['APELLIDOS'],
            ":TELEFONO" => $_params['TELEFONO'],
            ":DNI" => $_params['CARGO'],
            ":CARGO" => $_params['USUARIO'],
            ":USER_ID" => $_params['CONTRASENA'],
            "ROL_ID" => $_params['ROL'],
            ":FOTO" => $_params['']
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }

    public function actualizar($_params){
        $sql = "UPDATE PRODUCTOS SET PRODUCTO=:PRODUCTO,DESCRIPCION=:DESCRIPCION,FOTO=:FOTO,PRICE=:PRICE,CATEGORIA_ID=:CATEGORIA_ID WHERE id=:ID";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":PRODUCTO" => $_params['PRODUCTO'],
            ":DESCRIPCION" => $_params['DESCRIPCION'],
            ":FOTO" => $_params['FOTO'],
            ":PRICE" => $_params['PRECIO'],
            ":CATEGORIA_ID" => $_params['CATEGORIA_ID'],
            ":ID" =>  $_params['ID']
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }

    public function eliminar($id){
        $sql = "DELETE FROM PRODUCTOS WHERE id=:id";

        $resultado = $this->cn->prepare($sql);
        
        $_array = array(
            ":id" =>  $id
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }

    public function mostrar(){
        $sql = "SELECT E.ID,E.FIRST_NAME,E.LAST_NAME,E.TELEFONO,E.DNI,EC.CARGO,R.ROL,E.FOTO FROM EMPLEADOS E INNER JOIN EMPLEADO_CARGO EC ON E.CARGO_ID = EC.ID INNER JOIN USUARIOS U ON E.USER_ID = U.ID INNER JOIN ROLES R ON U.ROL_ID = R.ID";
        
        $resultado = $this->cn->prepare($sql);

        if($resultado->execute())
            return $resultado->fetchAll();

        return false;
    }

    public function mostrarPorId($id){
        
        $sql = "SELECT * FROM EMPLEADOS WHERE id=:id ";
        
        $resultado = $this->cn->prepare($sql);
        $_array = array(
            ":id" =>  $id
        );

        if($resultado->execute($_array))
            return $resultado->fetch();

        return false;
    }





    
}