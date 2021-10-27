<?php

include 'config.php';

if (isset($_POST['button'])){
    $numGaceta = $_POST['numeroGaceta'];
    $fechaGaceta = $_POST['fechaGaceta'];
    $fechaGaceta2 = date("Y-m-d", strtotime($fechaGaceta));
    $numeroDecreto = $_POST['numeroDecreto'];

    $sql = "INSERT INTO datos_publicacion (id,num_Gaceta, fecha_publicacion, decreto) VALUES (NULL,'$numGaceta', '$fechaGaceta', '$numeroDecreto')";

    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Datos guardados correctamente";
        header("Location: addFichaLey.php");
    }
}