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
    <h2>VER RESERVAS</h2>
    <div class="botones">
    <a href="mostrarReservas.php" class="btnVer">Ver Reservas</a>
    <a href="AgregarReserva.php" class="btnAgregar">Agregar Reservas</a>
    </div>
      <div class="contenedorTabla">
      <table>
      <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Telefono</th>
      <th>Correo</th>
      <th>Domicilio</th>
      <th>Número INE</th>
      <th>Fecha Nacimiento</th>
      <th>Habitación</th>
      <th>Húespedes</th>
      <th>Comprobante</th>
      <th>Eliminar</th>
      </tr>

      <?php
      require 'conexion.php';

      $datos = "SELECT * FROM datos_reservas ORDER BY id ASC";
      $resultado = mysqli_query($conectar, $datos);

      while ($fila = mysqli_fetch_assoc($resultado)) {
      ?>

      <tr>
      <td><?php echo $fila["id"]?></td>
      <td><?php echo $fila["nombre"]?></td>
      <td><?php echo $fila["telefono"]?></td>
      <td><?php echo $fila["correo"]?></td>
      <td><?php echo $fila["domicilio"]?></td>
      <td><?php echo $fila["ine"]?></td>
      <td><?php echo $fila["nacimiento"]?></td>
      <td><?php echo $fila["habitacion"]?></td>
      <td><?php echo $fila["huespedes"]?></td>
      <td><a href="<?php echo $fila["comprobante"]?>" target="_blank">Descargar Pdf</a></td>
      <td><a href="#" onClick="validar('eliminarReserva.php?id=<?php echo $fila["id"] ; ?>')">Eliminar</a></td>
      
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