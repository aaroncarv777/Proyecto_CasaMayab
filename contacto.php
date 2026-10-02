<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  <link rel="stylesheet" href="estilos.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>
<?php 
include("encabezado.php")?>
<div class="imgEncabezado">
    <div class="titulos">
      <h1>Estamos aquí para ti</h1>
    </div>
  </div>
  <div class="frmContacto ancho">
    <h2>CONTÁCTANOS</h2> <br>
      <p>Estamos aquí para ayudarte a planear tu estancia perfecta en Mérida. Si tienes preguntas sobre disponibilidad, servicios, tarifas o necesitas asistencia especial, no dudes en contactarnos. Nuestro equipo responderá a la brevedad para hacer de tu experiencia en Casa Mayab algo inolvidable.</p><br>
    <h4>Envíanos un mensaje a través de nuestro formulario:</h4><br>
    <div class="frm">
      <form action="admin/registrarMensajes.php" method="POST" id="frm_Mensajes">
          <input type="text" name="nombre" id="nombre" class="inputs" placeholder="Nombre*">
          <input type="email" name="correo" id="correo" class="inputs" placeholder="Correo electrónico*">
          <input type="tel" name="telefono" id="telefono" class="inputs" placeholder="Teléfono">
          <textarea name="mensaje" id="mensaje" placeholder="Déjanos un mensaje*"></textarea>
          <button id="btn_validar" type="button" class="btnEnviarMsg">Enviar Mensaje</button>
      </form>
    </div>
  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d201132.57827380308!2d-87.34864221913111!3d20.493223986237687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e433e55e37007%3A0x36e3d124f535acc!2sCasa%20Mayab!5e0!3m2!1ses-419!2smx!4v1765267173721!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  <?php 
include("footer.php")?>

<script type="text/javascript">
    $("#btn_validar").click(function () {

      if ($("#nombre").val().trim() == "") {
        alert("Escribe tu nombre completo");
        $("#nombre").focus();
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

      if ($("#mensaje").val().trim() == "") {
        alert("Escribe tu mensaje");
        $("#mensaje").focus();
        return 0;
      }


      document.getElementById("frm_Mensajes").submit();
    });
  </script>
</body>
</html>