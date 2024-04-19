<?php
include "config/conexion.php";
$sql = "SELECT id, nombre, celular,carrera,rol, fecha_sys FROM registros WHERE 1";


foreach($conexion->query($sql) as $fila){
    $id =$fila['id'];
    $nombre = $fila['nombre'];
    $celular = $fila['celular'];
    $carrera = $fila['carrera'];
    $id_rol =$fila ['rol'];
    $fecha_sys = $fila ['fecha_sys'];

    print "<tr>
    <td> ".$id." </td>
    <td> ".$nombre." </td>
    <td> ".$celular." </td>
    <td> '".$carrera."' </td>
    <td> ".$id_rol."</td>
    <td>".$fecha_sys." </td>
    </tr>";
    }


?>