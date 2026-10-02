<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <?php 
include("encabezado.php")?>
  <div class="contenedorImagen">
    <div class="textoPrincipal">
      <h2>BIENVENIDO A</h2> <hr>
      <h1>CASA MAYAB</h1>
      <p>Tu escape perfecto en el corazón de Yucatán</p>
    </div>
  </div>
  <div class="seccionTriple">
    <div class="seccionTriple1">
      <div class="imagen1"></div>
      <h3>PERFECTO PARA RELAJARTE</h3> <hr> <br>
      <p>Desconecta del mundo en nuestras áreas comunes diseñadas para tu tranquilidad. Disfruta de nuestra alberca, terraza con vistas panorámicas y espacios que invitan al descanso. En Casa Mayab, cada momento es una oportunidad para renovarte.</p>
    </div>
    <div class="seccionTriple2">
      <div class="imagen2"></div>
      <h3>HABITACIONES DE LUJO</h3> <hr> <br>
      <p>Nuestras habitaciones combinan elegancia y confort con toques auténticos yucatecos. Camas premium, aire acondicionado, amenidades de calidad y espacios luminosos te esperan para garantizar tu descanso perfecto en el corazón de Mérida.</p>
    </div>
    <div class="seccionTriple3">
      <div class="imagen3"></div>
      <h3>IDEAL PARA DISFRUTAR</h3> <hr> <br>
      <p>Déjate seducir por los sabores de Yucatán. Ya sea disfrutando de un desayuno tradicional, explorando la rica gastronomía local en restaurantes cercanos, o degustando bebidas en nuestras áreas sociales, cada experiencia culinaria será memorable.</p>
    </div>
  </div>
  <div class="habitaciones">
      <h1>Nuestras Habitaciones</h2> <br>
      <a href="habitaciones.php">Ver todas las habitaciones</a><br><br><hr>
      <div class="tabla">
        <table>
          <tr>
            <th>Habitación</th>
            <th>Descripción</th>
            <th>Húespedes</th>
            <th>Precio</th>
          </tr>
          <tr>
            <td>Sencilla</td>
            <td>Acogedora y funcional para viajeros solitarios</td>
            <td>1 persona</td>
            <td>$800 MXN</td>
          </tr>
          <tr>
            <td>Doble</td>
            <td>Confortable para parejas o amigos</td>
            <td>2 personas</td>
            <td>$1200 MXN</td>
          </tr>
          <tr>
            <td>Cuadrúple</td>
            <td>	Espaciosa para grupos o familias</td>
            <td>4 personas</td>
            <td>$2000 MXN</td>
          </tr>
          <tr>
            <td>King</td>
            <td>Lujo y confort con cama king size</td>
            <td>2 personas</td>
            <td>$1800 MXN</td>
          </tr>
          <tr>
            <td>Deluxe</td>
            <td>Suite premium con amenidades exclusivas</td>
            <td>2 personas</td>
            <td>$3200 MXN</td>
          </tr>
        </table>
    </div>
  </div>
  <div class="seccionVideo">
    <div class="TextoVideo">
      <h2>VIVE LA EXPERIENCIA CASA MAYAB</h2> <br>
      <p>Recorre nuestros espacios y descubre por qué Casa Mayab es el refugio perfecto para tu estancia en Yucatán.</p>
    </div>
  <div class="contenedor_youtube">
  <iframe 
    class="videoyoutube" src="https://www.youtube.com/embed/cdKx1Zv3YKs?si=PfDbgv8UnR5BTcYr&amp;start=5&autoplay=1&mute=1&controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
  </iframe>
</div>
</div>
  <div class="imgNosotros">
    <div class="textoNosotros">
      <p>En Casa Mayab fusionamos la rica herencia maya con el confort contemporáneo. Nuestro hotel boutique es un refugio donde la calidez yucateca se entrelaza con comodidades modernas. Cada rincón cuenta una historia, cada detalle refleja nuestra pasión por la autenticidad. Aquí encontrarás arquitectura colonial, sabores auténticos y una conexión genuina que hace de cada estancia una experiencia memorable.</p>
    </div>
    <div class="tituloNosotros">
      <h2>UN POCO SOBRE NOSOTROS</h2> <hr><br>
      <h4>Donde la tradición maya se encuentra con la hospitalidad moderna</h4>
    </div>
  </div>
<?php 
include("footer.php")?>
</body>
</html>