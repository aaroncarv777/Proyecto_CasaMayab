<?php

    require 'conexion.php';

    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $domicilio = $_POST["domicilio"];
    $ine = $_POST["ine"];
    $nacimiento = $_POST["nacimiento"];
    $habitacion = $_POST["habitacion"];
    $huespedes = $_POST["huespedes"];
    $nombre_pdf = $_FILES["comprobante"]["name"];
    $temporal_pdf = $_FILES["comprobante"]["tmp_name"];
    $peso_pdf = $_FILES["comprobante"]["size"];
    $tipo_pdf = $_FILES["comprobante"]["type"];
    $ruta_archivos = "comprobantes"; 

    date_default_timezone_set('UTC');
    $nombre_unico = date('Y-m-d-h-i-s')."-".$nombre_pdf;

    $ruta_final = $ruta_archivos . "/" . $nombre_unico;

    if ($peso_pdf > 5000000) {
      echo '
      <script>
        alert("El archivo PDF es demasiado pesado (máximo 5MB)");
        window.history.go(-1);
      </script>
    ';
      exit();
    }

    if($tipo_pdf == "application/pdf") { 
      move_uploaded_file($temporal_pdf, $ruta_final);
    }
    else {
      echo '
      <script>
        alert("El formato que intentas subir no es PDF");
        window.history.go(-1);
      </script>
    ';
      exit();
    }
  
    $insertar = "INSERT INTO datos_reservas (nombre, telefono, correo, domicilio, ine, nacimiento, habitacion, huespedes, comprobante) VALUES ('$nombre', '$telefono', '$correo', '$domicilio', '$ine', '$nacimiento', '$habitacion', '$huespedes', '$ruta_final')";

    $query = mysqli_query($conectar, $insertar);
  
    if ($query) {
      echo '
      <script>
        alert("RESPUESTAS GUARDADAS CORRECTAMENTE:)");
        window.history.go(-1);
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