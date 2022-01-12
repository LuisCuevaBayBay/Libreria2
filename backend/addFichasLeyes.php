<?php

    include 'config.php';
    $nombreLey = $_POST['nombreLey'];
    $numArticulo = $_POST['numArticulo'];
    $descripcionLey = $_POST['descripcionLey'];

    $sql = "INSERT INTO ficha_ley
    (id, id_datos_generales, num_articulo, descripcion_art) VALUES
     (NULL,'$nombreLey', '$numArticulo', '$descripcionLey')";

    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">
        alert("Datos guardados exitosamente!");
        window.location.href="mainMenu.html";
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
