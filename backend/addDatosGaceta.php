<?php

include 'config.php';

if (isset($_POST['button'])){
    $numGaceta = $_POST['numeroGaceta'];
    $fechaGaceta = $_POST['fechaGaceta'];
    $fechaGaceta2 = date("Y-m-d", strtotime($fechaGaceta));
    $numeroDecreto = $_POST['numeroDecreto'];
    

    $sql = "INSERT INTO datos_gaceta (id,num_gaceta, fecha_publi, num_decreto) VALUES (NULL,'$numGaceta', '$fechaGaceta', '$numeroDecreto')";

    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<script type="text/javascript">
        alert("Datos guardados exitosamente!");
        window.location.href="mainMenu.html";
        </script>';
    }else{
        echo '<script type="text/javascript">
        alert("Error al guardar los datos!");
        window.location.href="addDatosGaceta.html";
        </script>';
    }
}