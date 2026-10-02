<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reserva</title>
  <link rel="stylesheet" href="estilos.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>
  <?php 
include("encabezado.php")?>
<div class="imgEncabezado">
    <div class="titulos2">
    <h1>COMIENZA TU EXPERIENCIA</h1>
    <h4>Estás a un paso de vivir la magia de Tulum. Completa tus datos y permítenos preparar todo para tu llegada a Casa Mayab.</h4> <br>
    </div>
  </div>
  <div class="frmReserva">
    <div class="contenedorFrmReserva">
    <form action="admin/registrarReservas.php" method="POST" enctype="multipart/form-data" id="formulario_reservas">
      <label for="nombre">Nombre completo <span class="rojo">*</span></label><br>
      <input type="text" name="nombre" id="nombre" placeholder="Ej. Juan Pérez García" class="inputs2" maxlength="100" required><br>
      
      <div class="separacion1">
      <label for="telefono">Teléfono/Celular<span class="rojo">*</span></label><br>
      <input type="tel" name="telefono" id="telefono" placeholder="999 123 4567" class="inputs3" pattern="[0-9]{10}" maxlength="20" required>
      </div>
      
      <div class="separacion2">
      <label for="correo">Correo electrónico<span class="rojo">*</span></label><br>
      <input type="email" name="correo" id="correo" placeholder="nombre@ejemplo.com" class="inputs3" maxlength="100" required>
      </div><br>
      
      <label for="domicilio">Domicilio completo<span class="rojo">*</span></label><br>
      <textarea name="domicilio" id="domicilio" placeholder="Calle, número, colonia, ciudad, C.P" maxlength="100" required></textarea><br>
      
      <div class="separacion1">
      <label for="ine">Número de INE<span class="rojo">*</span></label><br>
      <input type="text" name="ine" id="ine" placeholder="123456789" class="inputs3" pattern="[0-9]" maxlength="20" required>
      </div>
      
      <div class="separacion2">
      <label for="nacimiento">Fecha de nacimiento<span class="rojo">*</span></label><br>
      <input type="date" name="nacimiento" id="nacimiento" class="inputs3" required>
      </div>
      
      <label for="habitacion">Tipo de habitación<span class="rojo">*</span></label><br>
      <select name="habitacion" id="habitacion" class="inputs2" required>
        <option value="">Seleccione su habitación</option>
        <option value="Sencilla">Sencilla</option>
        <option value="Doble">Doble</option>
        <option value="Cuadruple">Cuádruple</option>
        <option value="King">King</option>
        <option value="Deluxe">Deluxe</option>
      </select>
      
      <label for="huespedes">Número de huéspedes<span class="rojo">*</span></label><br>
      <input type="number" name="huespedes" id="huespedes" class="inputs2" required>
      
      <label for="comprobante">Subir comprobante de pago (PDF)<span class="rojo">*</span></label><br>
      <input type="file" name="comprobante" id="comprobante" class="inputs2" required>
      
      <button type="button" id="btn_validar" class="btnEnviar">Enviar</button>
</form>
    </form>
    </div>
  </div>
  <?php 
include("footer.php")?>

<script type="text/javascript">
    $("#btn_validar").click(function () {

      if ($("#nombre").val().trim() == "") {
        alert("Escribe tu nombre completo");
        $("#nombre").focus();
        return 0;
      }


      if ($("#telefono").val().trim() == "") {
        alert("Escribe tu teléfono/celular");
        $("#telefono").focus();
        return 0;
      }

      if (!$("#telefono")[0].checkValidity()) {
        alert("El teléfono debe tener 10 dígitos");
        $("#telefono").focus();
        return 0;  
      }

      if ($("#correo").val().trim() == "" || !$("#correo")[0].checkValidity()) {
        alert("Escribe o verifica tu correo electrónico");
        $("#correo").focus();
        return 0;  
      }


      if ($("#domicilio").val().trim() == "") {
        alert("Escribe tu domicilio completo");
        $("#domicilio").focus();
        return 0;
      }


      if ($("#ine").val().trim() == "") {
        alert("Escribe tu número de INE");
        $("#ine").focus();
        return 0;
      }


      if ($("#nacimiento").val().trim() == "") {
        alert("Selecciona tu fecha de nacimiento");
        $("#nacimiento").focus();
        return 0;
      }


      if ($("#habitacion").val() == "") {
        alert("Selecciona un tipo de habitación");
        $("#habitacion").focus();
        return 0;
      }

      if ($("#huespedes").val().trim() == "") {
        alert("Especifica el número de huéspedes (mínimo 1)");
        $("#huespedes").focus();
        return 0;
      }


      if ($("#comprobante").val() == "") {
        alert("Debes subir el comprobante de pago");
        $("#comprobante").focus();
        return 0;
      }

      document.getElementById("formulario_reservas").submit();
    });
</script>
</body>
</html>