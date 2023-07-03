<?php 
class conexion{
    private $conexion;
    public function __construct(){
        $servidor="localhost";
        $bd="servimatch";
        $charset="utf8";
        $usuario="root";
        $contraseña="";
        try{
            $this->conexion = new PDO("mysql:host=$servidor; dbname=$bd; charset=$charset", "$usuario", "$contraseña");
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            $this->conexion = die("error de conexion :". $e->getMessage());
        }
    }
    public function getconexion(){
        return $this->conexion;
    }
}

