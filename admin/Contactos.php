<?php 
  require "seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contactos</title>
  <link rel="stylesheet" href="../estilos.css">
</head>
<body>
  <?php 
  include("estructuraPanel.php")?>
    <div class="contenedorSecundario">
    <h2>CONTACTOS</h2>
      <div class="contenedorTabla">
      <table>
      <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Telefono</th>
      <th>Mensaje</th>
      <th>Eliminar</th>
      </tr>

      <?php
      require 'conexion.php';

      $datos = "SELECT * FROM mensajes ORDER BY id ASC";
      $resultado = mysqli_query($conectar, $datos);

      while ($fila = mysqli_fetch_assoc($resultado)) {
      ?>

      <tr>
      <td><?php echo $fila["id"]?></td>
      <td><?php echo $fila["nombre"]?></td>
      <td><?php echo $fila["correo"]?></td>
      <td><?php echo $fila["telefono"]?></td>
      <td><?php echo $fila["mensaje"]?></td>
      <td><a href="#" onClick="validar('eliminarMensajes.php?id=<?php echo $fila["id"] ; ?>')">Eliminar</a></td>
      </tr>

      <?php
      }
      ?>
    </table>
    </div>
    </div>
  </div>

  <script>
      function validar(url) {
      var eliminar = confirm("¿Realmente deseas eliminar el registro?")
      if (eliminar == true) {
        window.location=url;
      }
    }
    </script>
    
</body>
</html>