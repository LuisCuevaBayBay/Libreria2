<?php
$name = "localhost";
$user = "root";
$password = "loquendo1";

$db = "bbdd_leyes_honduras";

$conn = mysqli_connect($name, $user, $password, $db);

if(!$conn){
  echo "Fallo en la conexion!";
}
 ?>
