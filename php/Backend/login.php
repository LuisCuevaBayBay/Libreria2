<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/login.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>Login Form</title>
  </head>
  <body>
    <div class="login">
      <div class="login_content">

        <div class="login__forms">
          <form class="login_registre" id="login-in" action="index.html" method="post">
            <h1 class="login__title">Iniciar Sesion</h1>

            <div class="login__box">
              <i class="bx bx-user login__icon"></i>
              <input type="text" placeholder="Usuario" class="login__input">
            </div>

            <div class="login__box">
              <i class="bx bx-lock-alt login__icon"></i>
              <input type="password" placeholder="Contraseña" class="login__input">
            </div>

            <a href="#" class="login__forgot">Olvidaste la Contraseña?</a>

            <a href="#" class="login__button">Iniciar Sesion</a>

          </form>

          <form class="login__create none" id="login-up" action="index.html" method="post">
            <h1 class="login__title">Solicitar Usuario</h1>

            <div class="login__box">
              <i class="bx bx-user login__icon"></i>
              <input type="text" placeholder="Nombre" class="login__input">
            </div>

            <div class="login__box">
              <i class="bx bx-user login__icon"></i>
              <input type="text" placeholder="Apellido" class="login__input">
            </div>

            <div class="login__box">
              <i class="bx bx-user login__icon"></i>
              <input type="email" placeholder="Correo" class="login__input">
            </div>

            <div class="login__box">
              <i class="bx bx-lock-alt login__icon"></i>
              <input type="password" placeholder="Contraseña" class="login__input">
            </div>

            <div class="login__box">
              <i class="bx bx-lock-alt login__icon"></i>
              <input type="password" placeholder="Repetir Contraseña" class="login__input">
            </div>

            <a href="#" class="login__button">Solicite su registro</a>

            <div >
              <span class="login__account">Ya tiene cuenta?</span>
              <span class="login__signup">Inicie Sesion</span>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="js2/main.js"></script>
  </body>
</html>
