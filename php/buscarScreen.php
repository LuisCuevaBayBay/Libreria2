<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/master.css">
  </head>
  <body>
    <head>
      <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    </head>

    <body>
      <form action="buscarSettings.php" method="post">
      <div class="search-container">
     <input type="text" name="search" id="search" placeholder="Busca la ley que necesites..." class="search-input">

     <select class="selectTipo" name="selectTipo">
          <option value="">Seleccion un Tipo de Ley</option>
          <?php
          
            $sql = "SELECT * from tipo_ley";
            $result = $conn->query($sql);
            if ($result->num_rows>0) {
              while ($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['descripcion_tipo']."</option>";
              }
            }
          
           ?>
        </select>
        <br>
        <select class="selectMateria" name="selectMateria">
          <option>Seleccione la materia de la ley</option>
          <?php
          
            $sql = "SELECT * from materia_ley";
            $result = $conn->query($sql);
            if ($result->num_rows>0) {
              while ($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['descripcion_materia']."</option>";
              }
            }
            
           ?>
        </select>
        <br>
        <select class="selectEnte" name="selectEnte">
          <option>Seleccione el ente que aprobo la ley</option>
          <?php
            $sql = "SELECT * from ente";
            $result = $conn->query($sql);
            if ($result->num_rows>0) {
              while ($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['descripcion_ente']."</option>";
              }
            }
            
           ?>
        </select>
        
        <a href="#" class="search-btn">
          <i class="fas fa-search"></i>
        </a>
      </div>

      <div class="boton-volver">
        <a href="../index.html" class="back-btn">     Volver <i class="fas fa-arrow-left"></i> </a>
      </div>
      </form>



  </body>
</html>
