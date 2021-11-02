<?php

include 'config.php';

$name = $_POST['nombreLey'];

$type = $_POST['selectEnte'];

$date = $_POST['fechaVigencia'];

$date2 = date('Y-m-d' , strtotime($date));

$version = $_POST['version'];

$link = $_POST['link'];

$link = $_POST['link'];
$sql = "INSERT INTO datos_generales_leyes (id, nombre_ley, id_ente_emisor, fecha_de_vigencia, version_ley, link) VALUES (NULL,'$name', '$type', '$date2', '$version', '$link')";
$result = mysqli_query($conn, $sql);

 /* if($result){
    echo "Datos guardados correctamente";
  }
  else{
    echo "Error al guardar los datos";
    
  }
  */

  if($result){
    echo '<script type="text/javascript">
        alert("Registro exitoso!");
        window.location.href="addDatosGaceta.html";
        </script>';
  }
  else{
    echo '<script type="text/javascript">
    alert("Error al guardar los datos!");
    window.location.href="addDatosLey.php";
    </script>';
  }