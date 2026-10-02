<?php 
  require "seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Reserva</title>
  <link rel="stylesheet" href="../estilos.css">
</head>
<body>
  <?php 
  include("estructuraPanel.php")?>
    <div class="contenedorSecundario">
      <h2>AGREGAR RESERVAS</h2>
      <div class="botones">
      <a href="mostrarReservas.php" class="btnVer">Ver Reservas</a>
      <a href="AgregarReserva.php" class="btnAgregar">Agregar Reservas</a>
      </div>
      <div class="agregar">
      <form action="registrarReservas.php" method="POST" enctype="multipart/form-data">
      <label for="nombre">Nombre completo</label><br>
      <input type="text" name="nombre" id="nombre" placeholder="Ej. Juan Pérez García" class="inputsReserva"><br>
      <div class="separacion1">
      <label for="telefono">Teléfono/Celular</label><br>
      <input type="tel" name="telefono" id="telefono" placeholder="999 123 4567" class="inputsReserva2">
      </div>
      <div class="separacion2">
      <label for="correo">Correo eléctronico</label><br>
      <input type="email" name="correo" id="correo" placeholder="nombre@ejemplo.com" class="inputsReserva2">
      </div><br>
      <label for="domicilio">Domicilio completo</label><br>
      <textarea name="domicilio" id="domicilio" placeholder="Calle, número, colonia, ciudad, C.P"></textarea><br>
      <div class="separacion1">
      <label for="ine">Número de INE</label><br>
      <input type="tel" name="ine" id="ine" placeholder="123456789" class="inputsReserva2">
      </div>
      <div class="separacion2"> 
      <label for="nacimiento">Fecha de nacimiento</label><br>
      <input type="date" name="nacimiento" id="nacimiento" placeholder="nombre@ejemplo.com" class="inputsReserva2">
      </div>
      <label for="habitacion">Tipo de habitación</label><br>
      <select name="habitacion" id="habitacion" class="inputsReserva">
        <option value="">Seleccione su habitacion</option>
        <option value="Sencilla">Sencilla</option>
        <option value="Doble">Doble</option>
        <option value="Cuadruple">Cuadruple</option>
        <option value="King">King</option>
        <option value="Deluxe">Deluxe</option>
      </select>
      <label for="huespedes">Número de húespedes</label><br>
      <input type="number" name="huespedes" id="huespedes" class="inputsReserva"><br>
      <label for="comprobante">Subir comprobante de pago (PDF)</label><br>
      <input type="file" name="comprobante" id="comprobante" class="inputsReserva">
      <div class="centrar">
      <button type="submit" class="btnEnviar">Enviar</button>
      </div>
    </form>
      </div>
    </div>
  </div>
</body>
</html>