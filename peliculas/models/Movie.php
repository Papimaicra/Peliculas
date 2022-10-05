<?php
require_once './config/dataConnetion.php';

class Movie extends conexion{

    public function __construct()
    {
$this-> conectar();

    }
    public function insertMovie($nombre, $categoria, $duracion){
        $sql = "INSERT INTO peliculasdb (nombre, categoria, duracion) VALUES ('$nombre', '$categoria', '$duracion')";
        $result = mysqli_query($this->conectar(), $sql);
        if($result){
            return true;
        }else{
            return false;
        }
     }

}
?>