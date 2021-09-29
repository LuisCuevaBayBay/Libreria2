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
          <a class="navbar-brand" href="https://www.sgjd.gob.hn/" target="_blank"><img class="logo1" src="Img/secre.png"></a>
          <a href="index.php"><img class="logo2" src="Img/logo.jpg"></a>
        </div>
      </nav>
    </header>

<!-- Menu vertical con opciones-->

      <span class="nav-bar" id=""btnMenu><i class="fas fa-bars"></i> Menu</span>
      <nav class="main-nav">
        <ul class="menu" id="menu">
          <li class="menu_item container-submenu">
            <a href="#" class="menu_link submenu-btn">Lenguaje <i class="fas fa-angle-down"></i></a>
            <ul class="submenu">
              <li class="menu_item"><a href="index.php" class="menu_link">Español</a></li>
              <li class="menu_item"><a href="en/index.php" class="menu_link">Ingles</a></li>
              <li class="menu_item"><a href="fr/index.php" class="menu_link">Frances</a> </li>
            </ul>
          </li>

          <li class="menu_item"><a href="php/buscarScreen.php" class="menu_link">Buscar <i class="fas fa-search"></i> </a></li>
          <li class="menu_item"><a href="Backend/login.php" class="menu_link">Backend</a></li>
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
            <a href="php/leyesVigentes.php" class="div-h3"><h3>Leyes Vigentes</h3></a>
          </div>
          <div id="contenido">
            <ul>
              <a href="php/leyesVigentes.php" class="div-a"><li>Constitucion de la Republica de Honduras(1982)</li></a><br>
              <a href="php/leyesVigentes.php" class="div-a"><li>Ley de Municipalidades(2020)</li></a><br>
              <a href="php/leyesVigentes.php" class="div-a"><li>Ley del Seguro Social(2021)</li></a><br>
            </ul>
          </div>
        </div>


        <div id="right">
          <div id="portada">
            <img id="img" src="Img/leyes-honduras.jpg">
          </div>
          <div id="titulo">
            <h3><a href="php/leyesAntiguas.php" class="div-h3">Leyes Antiguas</a></h3>
          </div>
          <div id="contenido">
            <ul>
              <li><a href="php/leyesAntiguas.php" class="div-a">Constitucion de la Republica de Honduras(1894)</a></li><br>
              <li><a href="php/leyesAntiguas.php" class="div-a">Codigo del Trabajo(1959)</a></li><br>
              <li><a href="php/leyesAntiguas.php" class="div-a">Acuerdos de Educacion Publica(1960)</a></li><br>
            </ul>
          </div>
        </div>
      </div>


<!-- Columna Redes Sociales -->


    <div class="redes">
      <div class="social">
        <a href="https://es-la.facebook.com/sgjdHonduras/" target="_blank"><i class="fab fa-facebook fa-3x blueicon"></i></a>
        <a href="https://twitter.com/sgjd_honduras" target="_blank"><i class="fab fa-twitter fa-3x twit"></i></a>
        <a href="https://www.youtube.com/sgjdHonduras" target="_blank"><i class="fab fa-youtube fa-3x yt"></i></a>
        <a href="https://www.instagram.com/explore/locations/1018126491/honduras/tegucigalpa-honduras/secretaria-de-gobernacion-justicia-y-descentralizacion/?hl=es" target="_blank"><i class="fab fa-instagram fa-3x ig"></i></a>
      </div>

    </div>


    <!-- Footer -->

    <div class="footer">
      <h4 class=tituloFoot>Secretaria de Gobernacion y Justicia</h4>
      <p class="dir">Centro Civico Gubernamental Jose Cecilio del Valle <br>Bulevar Juan Pablo Segundo </p>
    </div>
  </body>
</html>
