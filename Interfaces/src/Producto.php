<?php

namespace Kawschool;

class Producto{

    private $config;
    private $cn = null;

    public function __construct(){

        $this->config = parse_ini_file(__DIR__.'/../config.ini') ;

        $this->cn = new \PDO( $this->config['dns'], $this->config['usuario'],$this->config['clave'],array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ));
        
    }

    public function registrar($_params){
        $sql = "INSERT INTO PRODUCTOS(PRODUCTO,DESCRIPCION, PRICE,CATEGORIA_ID,FOTO,Stock) 
        VALUES (:PRODUCTO,:DESCRIPCION,:PRICE,:CATEGORIA_ID,:FOTO,:Stock)";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":PRODUCTO" => $_params['PRODUCTO'],
            ":DESCRIPCION" => $_params['DESCRIPCION'],
            ":FOTO" => $_params['FOTO'],
            ":PRICE" => $_params['PRICE'],
            ":Stock" => $_params['Stock'],
            ":CATEGORIA_ID" => $_params['CATEGORIA_ID']
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }

    public function actualizar($_params){
        $sql = "UPDATE PRODUCTOS SET PRODUCTO=:PRODUCTO,DESCRIPCION=:DESCRIPCION,FOTO=:FOTO,PRICE=:PRICE,CATEGORIA_ID=:CATEGORIA_ID,Stock=:Stock WHERE id=:ID";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":PRODUCTO" => $_params['PRODUCTO'],
            ":DESCRIPCION" => $_params['DESCRIPCION'],
            ":FOTO" => $_params['FOTO'],
            ":PRICE" => $_params['PRECIO'],
            ":Stock" => $_params['Stock'],
            ":CATEGORIA_ID" => $_params['CATEGORIA_ID'],
            ":ID" =>  $_params['ID']
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }
    public function actualizarE($_params){
        $sql = "UPDATE PRODUCTOS SET Stock=:Stock WHERE ID=:ID";
        

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":Stock" => $_params['Stock'],
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
        $sql = "SELECT P.ID,P.PRODUCTO,C.TIPO,P.PRICE,P.CATEGORIA_ID,P.FOTO FROM productos P INNER JOIN categorias C ON P.CATEGORIA_ID = C.ID";
        
        $resultado = $this->cn->prepare($sql);

        if($resultado->execute())
            return $resultado->fetchAll();

        return false;
    }



    public function mostraruser(){
        $sql = "SELECT P.ID,P.PRODUCTO,C.TIPO,P.PRICE,P.Stock,P.CATEGORIA_ID,P.FOTO,P.cod_active FROM productos P INNER JOIN categorias C ON P.CATEGORIA_ID = C.ID";
        
        $resultado = $this->cn->prepare($sql);

        if($resultado->execute())
            return $resultado->fetchAll();

        return false;
    }



    public function productsindex(){
        $sql = "SELECT P.ID,P.PRODUCTO,C.TIPO,P.PRICE,P.CATEGORIA_ID,P.FOTO FROM productos P INNER JOIN categorias C ON P.CATEGORIA_ID = C.ID where cod_active = 1";
        
        $resultado = $this->cn->prepare($sql);

        if($resultado->execute())
            return $resultado->fetchAll();

        return false;
    }







    public function inactive($id){
        $sql = "SELECT cod_active FROM PRODUCTOS WHERE ID =".$id;
        
        $resultado = $this->cn->prepare($sql);

        if($resultado->execute())
        
            return $resultado->fetchAll();


        return false;
    }



    public function mostrarPorId($id){
        
        $sql = "SELECT * FROM PRODUCTOS WHERE id=:id ";
        
        $resultado = $this->cn->prepare($sql);
        $_array = array(
            ":id" =>  $id
        );

        if($resultado->execute($_array))
            return $resultado->fetch();

        return false;
    }

    public function activar($_params){
        $sql = "UPDATE PRODUCTOS SET cod_active=:cod_active WHERE id=:ID";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":cod_active" => $_params['cod_active'],
            ":ID" =>  $_params['ID']
        );

        if($resultado->execute($_array))
           return true;

        return false;



    }

    
}



