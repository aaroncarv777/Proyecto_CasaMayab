<?php

    require 'conexion.php';

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];
  
    $insertar = "INSERT INTO mensajes (nombre, correo, telefono, mensaje) VALUES ('$nombre', '$correo', '$telefono', '$mensaje')";

    $query = mysqli_query($conectar, $insertar);
  
    if ($query) {
      echo '
      <script>
        alert("RESPUESTAS GUARDADAS CORRECTAMENTE:)");
        location.href="../contacto.php"
      </script>
    ';
    } else {
      echo '
      <script>
        alert("Ha ocurrido un error al guardar los datos");
        window.history.go(-1);
      </script>
    ';
    }
?>