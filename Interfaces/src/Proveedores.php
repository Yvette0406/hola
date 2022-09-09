<?php

namespace Kawschool;

class Proveedores{

    private $config;
    private $cn = null;

    public function __construct(){

        $this->config = parse_ini_file(__DIR__.'/../config.ini') ;

        $this->cn = new \PDO( $this->config['dns'], $this->config['usuario'],$this->config['clave'],array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ));
        
    }

    public function registrar($_params){
        $sql = "INSERT INTO PROVEDORES(NOMBRE,CALLE, ENCARGADO,TELEFONO) 
        VALUES (:NOMBRE,:CALLE,:ENCARGADO,:TELEFONO)";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":NOMBRE" => $_params['NOMBRE'],
            ":CALLE" => $_params['CALLE'],
            ":ENCARGADO" => $_params['ENCARGADO'],
            ":TELEFONO" => $_params['TELEFONO']
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }

    public function actualizar($_params){
        $sql = "UPDATE PROVEDORES SET NOMBRE=:NOMBRE,CALLE=:CALLE,ENCARGADO=:ENCARGADO,TELEFONO=:TELEFONO WHERE id=:ID";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":NOMBRE" => $_params['NOMBRE'],
            ":CALLE" => $_params['CALLE'],
            ":ENCARGADO" => $_params['ENCARGADO'],
            ":TELEFONO" => $_params['TELEFONO'],
            ":ID" =>  $_params['ID']
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }

    public function eliminar($id){
        $sql = "DELETE FROM PROVEDORES WHERE id=:id";

        $resultado = $this->cn->prepare($sql);
        
        $_array = array(
            ":id" =>  $id
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }

    public function mostrar(){
        $sql = "SELECT  * FROM PROVEDORES";
        
        $resultado = $this->cn->prepare($sql);

        if($resultado->execute())
            return $resultado->fetchAll();

        return false;
    }

    public function mostrarPorId($id){
        
        $sql = "SELECT * FROM PROVEDORES WHERE id=:id ";
        
        $resultado = $this->cn->prepare($sql);
        $_array = array(
            ":id" =>  $id
        );

        if($resultado->execute($_array))
            return $resultado->fetch();

        return false;
    }





    
}



