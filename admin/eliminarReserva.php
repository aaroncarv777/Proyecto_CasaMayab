<?php 
require 'conexion.php';
$id = $_GET['id'];

$eliminar = "DELETE FROM datos_reservas WHERE id='$id'";
$resultado = mysqli_query($conectar, $eliminar);

if($resultado){
  echo '
      <script> 
          alert("ELIMINADO CORRECTAMENTE");
          location.href="mostrarReservas.php"
        </script>
      ';
}
else {
  echo '
      <script> 
          alert("NO SE PUDO ELIMINAR");
          location.href="mostrarReservas.php"
        </script>
      ';
}
?>