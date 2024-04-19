

<?php
include "config/conexion.php";
if(isset($_POST["nombre"]))
{
$nombre = $_POST["nombre"];

$sql = "SELECT nombre, celular, carrera ,rol, fecha_sys FROM registros WHERE nombre like '%".$nombre."%'";
$i=1;
foreach ($conexion->query($sql) as $row) {

  $nombre = $row["nombre"];
   $celular  = $row["celular"];
   $carrera  = $row["carrera"];
   $id_rol  = $row["rol"];
    $fecha_sys = $row ["fecha_sys"];
print "
 <tr>
  <td>$i</td> 
  <td>$nombre</td>
  <td>$celular</td>
  <td>$carrera</td>
  <td>$id_rol</td>
  <td>$fecha_sys</td>
    </tr>
     ";


;
$i++;
}
} else 
?>