<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bibliotheque Juridique Nationale</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  </head>
  <body>

    <!-- Barra superior con logos -->

    <header>
      <nav class="navbar navbar-expand-md  navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img class="logo1" src="../Img/secre.png"></a>
          <img class="logo2" src="../Img/logo.jpg">
        </div>
      </nav>
    </header>

<!-- Menu vertical con opciones-->

<div class="pastel">
  <nav class="menu" id="menu">
    <ul class="lista">
      <li><a href="index.php" class="adb"><i class="fas fa-home"></i>   Page Principal</a></li>
      <li><a href="#" class="adb"><i class="fas fa-globe-americas"></i>  Langage</a>
        <ul class="slide">
          <li><a href="Index.php" class="adb">Espagnol</a></li>
          <li><a href="en/index.php" class="adb">Anglais</a></li>
          <li><a href="fr/index.php" class="adb">Francais</a></li>
        </ul>
      </li>
      <li><a href="php/buscarScreen.php" class="adb"><i class="fas fa-search"></i>  Chercher</a></li>
      <li><a href="http://www.lagaceta.hn/index.php?option=com_flippingbook&view=book&id=1001&page=1&Itemid=109" class="adb" target="_blank"><i class="fas fa-newspaper"></i>  Diario Oficial La Gaceta</a></li>
      <li><a href="https://www.sgjd.gob.hn/quienes-somos/informacion-institucional/marco-estrategico-mision-vision-y-objetivos" class="adb" target="_blank"><i  class="fas fa-info"></i>   À propos</a></li>
    </ul>


  </nav>


  <script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</div>

      <!-- Columnas Librerias -->


      <h1 class="titulo-middle">Information Legale</h1>


      <div id="contenedor" class="clearfix">
        <div id="left">
          <div id="portada">
            <img id="img1" src="../Img/Ley.jpg">
          </div>
          <div id="titulo">
            <a href="php/LeyesVigentes.php" class="div-h3"><h3>Lois en Vigueur</h3></a>
          </div>
          <div id="contenido">
            <ul>
              <a href="php/LeyesVigentes.php" class="div-a"><li>Constitution de la Republique de Honduras(1982)</li></a><br>
              <a href="php/LeyesVigentes.php" class="div-a"><li>Loi sur les Municipalites(2020)</li></a><br>
              <a href="php/LeyesVigentes.php" class="div-a"><li>Droit de assurances socialite(2021)</li></a><br>
            </ul>
          </div>
        </div>


        <div id="right">
          <div id="portada">
            <img id="img" src="../Img/leyes-honduras.jpg">
          </div>
          <div id="titulo">
            <h3><a href="php/LeyesAntiguas.php" class="div-h3">Lois anciennes</a></h3>
          </div>
          <div id="contenido">
            <ul>
              <li><a href="php/LeyesAntiguas.php" class="div-a">Constitution de la Republique de Honduras(1894)</a></li><br>
              <li><a href="php/LeyesAntiguas.php" class="div-a">Code de travail(1959)</a></li><br>
              <li><a href="php/LeyesAntiguas.php" class="div-a">Ententes d'educaiton publique(1960)</a></li><br>
            </ul>
          </div>
        </div>
      </div>


<!-- Columna Redes Sociales -->


    <div class="redes">
      <div class="social">
        <a href="#"><i class="fab fa-facebook fa-3x blueicon"></i></a>
        <a href="#"><i class="fab fa-twitter fa-3x twit"></i></a>
        <a href="#"><i class="fab fa-youtube fa-3x yt"></i></a>
        <a href="#"><i class="fab fa-instagram fa-3x ig"></i></a>
      </div>

    </div>


    <!-- Footer -->

    <div class="footer">
      <h4 class=tituloFoot>Secretaria de Gobernacion y Justicia</h4>
      <p class="dir">Centro Civico Gubernamental Jose Cecilio del Valle <br>Bulevar Juan Pablo Segundo </p>
    </div>
  </body>
</html>
