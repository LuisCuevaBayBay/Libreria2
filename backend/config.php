<?php
$name = "localhost";
$user = "root";
$password = "loquendo1";

$db = "laws_db";

$conn = mysqli_connect($name, $user, $password, $db);

if(!$conn){
  echo "Fallo en la conexion!";
}
 ?>
