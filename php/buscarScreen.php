<?php
    $host = "localhost";
    $usuario = "root";
    $contra = "loquendo1";
    $base = "laws_db";

     $conexion = new mysqli($host,$usuario,$contra,$base);

     if($conexion -> connect_errno){
       die("Fallo la conexion:(".$conexion ->mysqli_connecterrno().")".$conexion-> mysqli_connecterror());
     }

     $ley = "SELECT * from ficha_ley";
     $resLeyes = $conexion -> query($ley);


 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/script.js"></script>
</head>
  <body>
  <form class="" action="index.html" method="post">
    <input type="text" name="xnombre" placeholder="Ingrese palabras clave de la ley...">
    <select class="" name="xtipoley">
    <option value="" selected="selected">Seleccione el tipo de Ley</option>
    </select>

    <select class="" name="xCategoria">
      <option value="" selected="selected">Seleccione si desea ver Reformas o Edicion Original</option>
    </select>
  </form>
  </body>
</html>
