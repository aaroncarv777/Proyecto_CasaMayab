<?php 
  require "seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ver Reservas</title>
  <link rel="stylesheet" href="../estilos.css">
</head>
<body>
  <?php 
  include("estructuraPanel.php")?>
    <div class="contenedorSecundario">
    <h2>VER USUARIOS</h2>
    <div class="botones">
    <a href="mostrarUsuarios.php" class="btnVer">Ver Usuarios</a>
    <a href="agregarUsuarios.php" class="btnAgregar">Agregar Usuarios</a>
    </div>
      <div class="contenedorTabla">
      <table>
      <tr>
      <th>Id</th>
      <th>Username</th>
      <th>Correo</th>
      <th>Contraseña</th>
      <th>Eliminar</th>
      </tr>

      <?php
      require 'conexion.php';

      $datos = "SELECT * FROM usuarios ORDER BY id ASC";
      $resultado = mysqli_query($conectar, $datos);

      while ($fila = mysqli_fetch_assoc($resultado)) {
      ?>

      <tr>
      <td><?php echo $fila["id"]?></td>
      <td><?php echo $fila["nombre"]?></td>
      <td><?php echo $fila["correo"]?></td>
      <td><?php echo $fila["pass"]?></td>
      <td><a href="#" onClick="validar('eliminarUsuarios.php?id=<?php echo $fila["id"] ; ?>')">Eliminar</a></td>
      
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