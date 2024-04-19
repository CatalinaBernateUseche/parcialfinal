<?php
include "config/conexion.php";
$sql = "SELECT id , rol , id_rol FROM rol WHERE 1";


foreach($conexion->query($sql) as $fila)
{


      $id = $fila[0];
      $rol = $fila[1];
      $id_rol = $fila[2];
    

    print " <option value= '".$id."'>".$rol." </option>";
}    
   
   
   
    


?>