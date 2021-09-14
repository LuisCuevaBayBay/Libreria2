<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/estiloLeyes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  </head>
  <body>

        <header>
          <nav class="navbar navbar-expand-md  navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img class="logo1" src="../Img/secre.png"></a>
              <img class="logo2" src="../Img/logo.jpg">

            </div>
          </nav>
        </header>

        <span class="nav-bar" id="btnMenu"><i class="fas fa-bars"></i> Menu</span>
        <nav class="main-nav">
          <ul class="menu" id="menu">
            <li class="menu_item container-submenu">
              <a href="#" class="menu_link" id="subMenuBtn">Idioma <i class="fas fa-angle-down"></i></a>
              <ul class="submenu">
                <li class="menu_item"><a href="index.php" class="menu_link">Español</a>
                </li>
                <li class="menu_item"><a href="../en/php/LeyesVigentes.php" class="menu_link">Ingles</a>
                </li>
                <li class="menu_item"><a href="../fr/php/LeyesVigentes.php" class="menu_link">Frances</a>
                </li>
              </ul>
            </li>

            <li class="menu_item"><a href="buscar.php" class="menu_link">Buscar <i class="fas fa-search"></i> </a></li>
            <li class="menu_item"><a href="#" class="menu_link">Backend</a></li>

        </nav>
        <script src="js/menu.js"></script>


        <!-- Lista Leyes Vigentes -->

        <div class="Listar">
          <h2 class="tituloLey">Leyes Vigentes en Honduras</h2>
          <ul class="listaLeyes">
            <li class="inciso"><a href="https://www.tsc.gob.hn/web/leyes/Decreto-7-2021.pdf" class="link">Ley de la Agencia de Regulacion Sanitaria (ARSA)</a></li>
          </ul>
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
