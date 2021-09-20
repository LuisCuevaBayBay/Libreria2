<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Libreria Juridica Nacional</title>
    <link rel="stylesheet" href="css/estiloHome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="js/menu.js"></script>
  </head>
  <body>

    <!-- Barra superior con logos -->

    <header>
      <nav class="navbar navbar-expand-md  navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img class="logo1" src="Img/secre.png"></a>
          <img class="logo2" src="Img/logo.jpg">
        </div>
      </nav>
    </header>

<!-- Menu vertical con opciones-->

      <span class="nav-bar" id="btnMenu"><i class="fas fa-bars"></i> Menu</span>
      <nav class="main-nav">
        <ul class="menu" id="menu">
          <li class="menu_item container-submenu">
            <a href="#" class="menu_link" id="subMenuBtn">Idioma <i class="fas fa-angle-down"></i></a>
            <ul class="submenu">
              <li class="menu_item"><a href="index.php" class="menu_link">Español</a>
              </li>
              <li class="menu_item"><a href="en/index.php" class="menu_link">Ingles</a>
              </li>
              <li class="menu_item"><a href="fr/index.php" class="menu_link">Frances</a>
              </li>
            </ul>
          </li>

          <li class="menu_item"><a href="php/buscar.php" class="menu_link">Buscar <i class="fas fa-search"></i> </a></li>
          <li class="menu_item"><a href="php/Backend/login.php" class="menu_link">Backend</a></li>

      </nav>






      <!-- Columnas Librerias -->


      <h1 class="titulo-middle">Informacion Juridica</h1>


      <div id="contenedor" class="clearfix">

        <div id="caja>
            <img id="img1" src="Img/Ley.jpg">
            <a href=php/LeyesVigentes.php class="div-h3"><h3>Leyes Vigentes</h3></a>
            <ul>
              <a href="php/LeyesVigentes.php" class="div-a"><li>Constitucion de la Republica de Honduras(1982)</li></a><br>
              <a href="php/LeyesVigentes.php" class="div-a"><li>Ley de Municipalidades(2020)</li></a><br>
              <a href="php/LeyesVigentes.php" class="div-a"><li>Ley del seguro social(2021)</li></a><br>
            </ul>
          </div>
        </div>


        <div class="caja">

            <img id="img" src="Img/leyes-honduras.jpg">


            <h3><a href="#" class="div-h3">Leyes Antiguas</a></h3>


            <ul>
              <li><a href="#" class="div-a">Constitucion de la Republica de Honduras(1894)</a></li><br>
              <li><a href="#" class="div-a">Codigo del Trabajo(1959)</a></li><br>
              <li><a href="#" class="div-a">Acuerdos de educacion publica(1960)</a></li><br>
            </ul>

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
