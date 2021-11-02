<?php include 'config.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/add.css">
</head>
<body>
    <h2 style="font-size:28px">Datos de la Ley</h2>
    <form action="addFichasLeyes.php" method="post">
        <label>Seleccione el Nombre de la Ley</label>
        <select name="nombreLey" id="nombreLey">
            <option value="">Seleccione</option>
                <?php
                     $sql = "SELECT * FROM datos_generales_leyes";
                     $result = $conn->query($sql);
                     if ($result->num_rows > 0) {
                         while($row = $result->fetch_assoc()) {
                            echo "<option value='".$row['id']."'>".$row['nombre_ley']."</option>";
                        }
            }
        ?></select>
        <br>
        <label>Seleccione el numero de publicacion de la gaceta</label>
        <select name="gaceta" id="gaceta">
            <option value="">Seleccione</option>
                <?php
                     $sql = "SELECT * FROM datos_publicacion";
                     $result = $conn->query($sql);
                     if ($result->num_rows > 0) {
                         while($row = $result->fetch_assoc()) {
                            echo "<option value='".$row['id']."'>".$row['num_gaceta']."</option>";
                        }
            }?>
        </select>
            <br>
        <label>Escriba el Numero de Articulo de la Ley</label>
        <input type="text" name="numArticulo" id="numArticulo">
            <br>
        <label>Escriba la Descripcion de la Ley</label>
        <textarea name="descripcionLey" id="descripcionLey" cols="30" rows="8"></textarea>
            <br>
        <label>Seleccione el tipo de Ley</label>
        <select name="tipoLey" id="tipoLey">
            <option value="">Seleccione</option>
                <?php
                     $sql = "SELECT * FROM tipo_ley";
                     $result = $conn->query($sql);
                     if ($result->num_rows > 0) {
                         while($row = $result->fetch_assoc()) {
                            echo "<option value='".$row['id']."'>".$row['descripcion']."</option>";
                        }
            }?>
        </select>
            <br>
        <label>Seleccione la Categoria de la Ley</label>
        <select name="categoriaLey" id="categoriaLey">
            <option value="">Seleccione</option>
                <?php
                     $sql = "SELECT * FROM categoria_ley";
                     $result = $conn->query($sql);
                     if ($result->num_rows > 0) {
                         while($row = $result->fetch_assoc()) {
                            echo "<option value='".$row['id']."'>".$row['descripcion']."</option>";
                        }
            }?>
        </select>
            <br>
   

        <button type="submit" name="button" id="log">Guardar</button>
        <br>
        <a href="mainMenu.html" id="regresar">Volver al Menu Principal</a>
    </form>
    
</body>
</html>