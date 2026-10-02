<?php 

  require 'conexion.php';
  

  $user = $_POST["user"];
  $pass = $_POST["pass"];

  $comparar = "SELECT * FROM usuarios WHERE (nombre = '$user' OR correo = '$user') AND pass = '$pass'";
  $resultado = mysqli_query($conectar, $comparar);

    if (mysqli_num_rows($resultado) > 0) {
      session_start();
      $_SESSION["autentificado"] = "SI";
      header("Location: inicioPanel.php");
      exit();
    } else {
      echo '
      <script> 
          alert("ERROR EN LA AUTENTIFICACIÓN");
          location.href="Login.php"
        </script>
      ';
    }
?>

