<?php

    include 'config.php';


    $nombreLey = $_POST['nombreLey'];
    $gaceta = $_POST['gaceta'];
    $numArticulo = $_POST['numArticulo'];
    $descripcionLey = $_POST['descripcionLey'];
    $descripcion = $_POST['descripcion'];
    $tipoLey = $_POST['tipoLey'];
    $categoriaLey= $_POST['categoriaLey'];

    $sql = "INSERT INTO ficha_ley 
    (id, id_datos_generales, id_datos_publicacion, num_articulo, descripcion_articulo, id_tipo_ley, id_categoria_ley ) VALUES
     (NULL,'$nombreLey', '$gaceta', '$numArticulo', '$descripcionLey', '$tipoLey', '$categoriaLey')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: addDatosLey.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>