<?php
include 'config.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloCotejo.css">
    <title>Document</title>
</head>
<body>
    <h1>Cotejo de Informacion</h1>
    <br><br>
    <form action="codeCotejoInfo.php" method="post" enctype="multipart/form" id="app-cover">
    <select name="select1" id="select1" class="select1">
        <option value="">Seleccione una opción</option>
        <?php
        $sql = "SELECT * FROM datos_generales_leyes";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['nombre']."</option>";
            }
        }
        ?>
    </select>
     <br><br>

     <select name="select2" id="select2" class="select2">
        <option value="">Seleccione una opción</option>
        <?php
        $sql = "SELECT * FROM datos_generales_leyes";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['nombre']."</option>";
            }
        }
        ?>
     </select>
        <br><br>
     <button class="compare" id="compare">Comparar</button>
     <br><br>
     <a href="../index.html">Regresar a la Pantalla Principal</a>
    </form>
    
</body>
</html>