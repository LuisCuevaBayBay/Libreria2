<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Libreria Juridica Nacional</title>
    <link rel="stylesheet" href="css/estiloHome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  </head>
  <body>

    <!-- Barra superior con logos -->

    <header>
      <nav class="navbar navbar-expand-md  navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img class="logo1" src="../Img/secre.png"></a>
          <img class="logo2" src="Img/logo.jpg">
        </div>
      </nav>
    </header>

<!-- Menu vertical con opciones-->

      <span class="nav-bar" id=""btnMenu><i class="fas fa-bars"></i> Menu</span>
      <nav class="main-nav">
        <ul class="menu" id="menu">
          <li class="menu_item container-submenu">
            <a href="#" class="menu_link submenu-btn">Language <i class="fas fa-angle-down"></i></a>
            <ul class="submenu">
              <li class="menu_item"><a href="index.php" class="menu_link">Spanish</a></li>
              <li class="menu_item"><a href="en/index.php" class="menu_link">English</a></li>
              <li class="menu_item"><a href="fr/index.php" class="menu_link">French</a> </li>
            </ul>
          </li>

          <li class="menu_item"><a href="php/buscar.php" class="menu_link">Search <i class="fas fa-search"></i> </a></li>
          <li class="menu_item"><a href="#" class="menu_link">Backend</a></li>
        </ul>
      </nav>
      <script type="text/javascript">

      </script>


      <!-- Columnas Librerias -->


      <h1 class="titulo-middle">Informacion Legal</h1>


      <div id="contenedor" class="clearfix">

        <div id="left">
          <div id="portada">
            <img id="img1" src="Img/Ley.jpg">
          </div>
          <div id="titulo">
            <a href="#" class="div-h3"><h3>Leyes Vigentes</h3></a>
          </div>
          <div id="contenido">
            <ul>
              <a href="#" class="div-a"><li>Constitution of the Republic of Honduras(1982)</li></a><br>
              <a href="#" class="div-a"><li>Municipalaties Law(2020)</li></a><br>
              <a href="#" class="div-a"><li>Social Security Law(2021)</li></a><br>
            </ul>
          </div>
        </div>


        <div id="right">
          <div id="portada">
            <img id="img" src="../Img/leyes-honduras.jpg">
          </div>
          <div id="titulo">
            <h3><a href="#" class="div-h3">Ancient Laws</a></h3>
          </div>
          <div id="contenido">
            <ul>
              <li><a href="#" class="div-a">Constitution of the Republic of Honduras(1894)</a></li><br>
              <li><a href="#" class="div-a">Work code(1959)</a></li><br>
              <li><a href="#" class="div-a">Public Education Agreements(1960)</a></li><br>
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
