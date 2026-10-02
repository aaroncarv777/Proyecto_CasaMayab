<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../estilos.css">
</head>
<body>
  <div class="volver">
    <a href="../index.php"><img src="../imagenes/volver.png" alt="" width="50px"></a>
  </div>
  <div class="icono ancho">
  <img src="../imagenes/logoCasaMayab.png" alt="" width="300px">
  </div>
  <div class="contenedorLogin ancho">
  <form action="autentificar.php" method="POST">
    <input type="text" name="user" id="user" class="inputsLog" placeholder="Correo electrónico o nombre de usuario">
    <input type="password" name="pass" id="pass" class="inputsLog" placeholder="Contraseña"><br>
    <button type="submit" id="btn_Login" class="btn_Login">Iniciar sesión</button>
  </form>
  </div>
</body>
</html>