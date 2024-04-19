<script src="../js/sweetalert2@10.js"></script>
.
<?php
require "../config/conexion.php";

$nombre = $_POST["nombre"];
$celular = $_POST["celular"];
$carrera = $_POST["carrera"];
$rol = $_POST["rol"];
    $sql = "INSERT INTO registros(nombre,celular ,carrera, rol ,fecha_sys) VALUES('".$nombre."','".$celular."','".$carrera."','".$rol."' ,now() )";
if ($conexion->query($sql))


{
    echo "<script>
    Swal.fire({
      title: 'registro exitoso',
      icon: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = '../carreras.php';
      }
    });
  </script>";
}
else
{
    echo "<script>
    Swal.fire({
      title: 'Error en el registro',
      icon: 'error',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = '../carreras.php';
      }
    });
  </script>";
}

?>