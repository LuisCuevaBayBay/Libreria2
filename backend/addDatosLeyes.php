<?php

include 'config.php';

$name = $_POST['nombreLey'];

$ente = $_POST['selectEnte'];

$date = $_POST['fechaVigencia'];

$date2 = date('Y-m-d' , strtotime($date));

$materia = $_POST['selectMateria'];

$gaceta = $_POST['selectNumeroGaceta'];

$link = $_POST['link'];

$tipo_ley = $_POST['selectTipoLey'];

$resumen = $_POST['resumen'];

$sql = "INSERT INTO datos_generales_leyes (id, nombre, id_ente, fecha_vigencia, id_tipo_ley, id_materia, id_gaceta, link, resumen)
                                   VALUES (NULL,'$name','$ente', '$date2', '$tipo_ley', '$materia', '$gaceta', '$link', '$resumen')";
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
        window.location.href="mainMenu.html";
        </script>';
  }
  else{
    echo '<script type="text/javascript">
    alert("Error al guardar los datos!");
    window.location.href="addDatosGaceta.html";
    </script>';
  }
