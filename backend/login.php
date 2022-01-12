<?php

include "config.php";

if(isset($_POST['Uname']) && isset($_POST['Pass'])){


  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $uname = validate($_POST['Uname']);
  $pass = validate($_POST['Pass']);

  $pass2 = md5($pass);


  if(empty($uname)){
    header("Location: index.php?error=No Ingreso su Correo");
    exit();
  }else if (empty($pass2)) {
    header("Location: index.php?error=No ingreso la Contraseña");
    exit();
  }else{
    $sql = "SELECT * FROM usuarios WHERE correo = '$uname' AND pass='$pass2'";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
      if($row['correo'] === $uname && $row['pass'] === $pass2){
        echo '<script type="text/javascript">
        alert("Inicio de sesion exitoso, bienvenido!");
        window.location.href="mainMenu.html";
        </script>';
          $_SESSION['correo'] = $row['correo'];
          $_SESSION['nombre'] = $row['nombre'];
          $_SESSION['apellido'] = $row['apellido'];
          $_SESSION['id'] = $row['id'];

      }else{
        echo '<script type="text/javascript">
              alert("Error al iniciar sesion. Usuario o contraseña incorrectos");
              window.location.href="index.php";
              </script>';
        
      }


    }else{
      
      echo '<script type="text/javascript">
      alert("Error al iniciar sesion. Usuario o contraseña incorrectos");
      window.location.href="index.php";
      </script>';
     
    }
  }
}else{
        echo '<script type="text/javascript">
              alert("Error al iniciar sesion. Usuario o contraseña incorrectos");
              window.location.href="index.php";
              </script>';
}
 ?>
