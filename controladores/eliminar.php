<script src="../js/sweetalert2@10.js"></script>
.
<?php
require "../config/conexion.php";
$id = $_POST["id"];
$sql = "DELETE FROM registros WHERE id=".$id."";
if ($conexion->query($sql))
{
    echo "<script>
            Swal.fire({
              title: 'ELIMINADO CORRECTAMENTE',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = '../eliminar.html';
              }
            });
          </script>";

}
   else
{
    echo "<script>
    Swal.fire({
      title: 'Error eliminando',
      icon: 'error',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = '../eliminar.html';
      }
    });
  </script>";
}
?>