<?php
 
 class Conexion
 {
     public function conectar()
     {
         $enlace = mysqli_connect('localhost','root','','peliculas');
         if($enlace){
             echo "Conexion correcta a la base de datos, si pude mamá";
         }
         return $enlace;
     }
 }
?>
