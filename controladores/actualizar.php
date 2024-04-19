
<script src="../js/sweetalert2@10.js"></script>
.
<?php
require "../config/conexion.php";
$id= $_POST["id"];
$carrera = $_POST["carrera"];


$sql = "UPDATE registros SET carrera='".$carrera."' WHERE id=".$id."";
if ($conexion->query($sql))
{
    echo  "<script>
    Swal.fire({
      title: 'actualizado CORRECTAMENTE',
      icon: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = '../actualizar.html';
      }
    });
  </script>";
}
   else
{
    echo "<script>
    Swal.fire({
      title: 'Error actualizando',
      icon: 'error',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = '../actualizar.html';
      }
    });
  </script>";
}
?>