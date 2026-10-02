<?php 
  require "seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuarios</title>
  <link rel="stylesheet" href="../estilos.css">
</head>
<body>
  <?php 
  include("estructuraPanel.php")?>
    <div class="contenedorSecundario">
    <h2>AGREGAR USUARIOS</h2>
    <div class="botones">
    <a href="mostrarUsuarios.php" class="btnVer">Ver Usuarios</a>
    <a href="agregarUsuarios.php" class="btnAgregar">Agregar Usuarios</a>
    </div>
    <div class="agregar">
      <form action="registrarUsuarios.php" method="POST">
        <label for="NombreUsuario">Nombre de usuario:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre de usuario" class="inputsReserva"><br>
        <label for="correo">Correo electrónico:</label>
        <input type="email" name="correo" id="correo" placeholder="Correo electrónico" class="inputsReserva"><br>
        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" id="pass" placeholder="Contraseña" class="inputsReserva"><br>
        <div class="centrar">
      <button type="submit" class="btnEnviar">Enviar</button>
      </div>
      </form>
    </div>
    </div>
  </div>
</body>
</html>