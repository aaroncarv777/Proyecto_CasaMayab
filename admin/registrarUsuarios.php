<?php

    require 'conexion.php';

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $pass = $_POST["pass"];
  
  //Validar usuario 
   $comparar = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND correo = '$correo'";
    $verificar_usuario = mysqli_query($conectar, $comparar);

    if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
      <script> 
          alert("ESTE NOMBRE DE USUARIO YA ESTA REGISTRADO");
          location.href="agregarUsuarios.php"
        </script>
      ';

      exit();
    }

    $insertar = "INSERT INTO usuarios (nombre, correo, pass) VALUES ('$nombre', '$correo', '$pass')";

    $query = mysqli_query($conectar, $insertar);
  
    if ($query) {
      echo '
      <script>
        alert("RESPUESTAS GUARDADAS CORRECTAMENTE:)");
        location.href="agregarUsuarios.php"
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