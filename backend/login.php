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
        header("Location: addLey.php");
      }else{
        header("Location: index.php?error= Usuario o Contraseña Incorrecta");
        exit();
      }


    }else{
      header("Location: index.php?error= Usuario o Contraseña Incorrecta");
      exit();
    }
  }
}else{
  header("Location: index.php");
  exit();
}
 ?>
