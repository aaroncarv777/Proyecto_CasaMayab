<?php 
require 'conexion.php';
$id = $_GET['id'];

$eliminar = "DELETE FROM mensajes WHERE id='$id'";
$resultado = mysqli_query($conectar, $eliminar);

if($resultado){
  echo '
      <script> 
          alert("ELIMINADO CORRECTAMENTE");
          location.href="Contactos.php"
        </script>
      ';
}
else {
  echo '
      <script> 
          alert("NO SE PUDO ELIMINAR");
          location.href="Contactos.php"
        </script>
      ';
}
?>