<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <h2>Iniciar Sesion</h2>
    <form id="login" action="login.php" method="POST">

      <?php
        if (isset($_GET['error'])) {?>
          <p class="error"><?php echo $_GET['error']; ?></p>
        <?php }  ?>
      <label><b>Correo Electronico
      </b>
    </label>
      <br>
      <input type="text" name="Uname" id="Uname" placeholder="Ingrese su Correo">
      <br><br>
      <label><b>Contraseña
      </b>
    </label>
      <input type="password" name="Pass" id="Pass" placeholder="Ingrese su Contraseña">
      <br><br>
      <button type="submit" name="button" id="log">Iniciar Sesion</button>
    </form>
  </body>
</html>
