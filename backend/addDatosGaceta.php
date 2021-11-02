<?php

include 'config.php';

if (isset($_POST['button'])){
    $numGaceta = $_POST['numeroGaceta'];
    $fechaGaceta = $_POST['fechaGaceta'];
    $fechaGaceta2 = date("Y-m-d", strtotime($fechaGaceta));
    $numeroDecreto = $_POST['numeroDecreto'];
    $link = $_POST['link'];

    $sql = "INSERT INTO datos_publicacion (id,num_Gaceta, fecha_publicacion, decreto) VALUES (NULL,'$numGaceta', '$fechaGaceta', '$numeroDecreto')";

    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<script type="text/javascript">
        alert("Datos guardados exitosamente!");
        window.location.href="addFichaLey.php";
        </script>';
    }else{
        echo '<script type="text/javascript">
        alert("Error al guardar los datos!");
        window.location.href="addDatosGaceta.html";
        </script>';
    }
}