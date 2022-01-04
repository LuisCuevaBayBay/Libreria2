<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/add.css">
  </head>
  <body>
    <h2 style="font-size:28px;">Registrar Leyes</h2>

    <form class="" action="addDatosLeyes.php" method="post">
      
      <label>Nombre Ley</label>
      <input type="text" name="nombreLey" value="" placeholder="Nombre de la Ley">
      <br>

      <label>Ente Emisor</label>
      <select name="selectEnte" id="selectEnte">
        <option value="">Seleccione una opción</option>
        <?php
        $sql = "SELECT * FROM ente";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<option value='".$row['id']."'>".$row['descripcion']."</option>";
          }
        }
        ?>  
      </select>
        <br>
      <label>Fecha de Vigencia</label>
      <input type="date" name="fechaVigencia" value="">
        <br>

        <label>Seleccione el Tipo de Ley</label>
        <select name="selectTipoLey" id="selectTipoLey">
          <option value="">Seleccione una opción</option>
          <?php
          $sql = "SELECT * FROM tipo_ley";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<option value='".$row['id']."'>".$row['descripcion']."</option>";
            }
          }
          ?>
        </select>
        <br>
        <label>Seleccione la materia de la ley</label>
        <select name="selectMateria" id="selectMateria">
          <option value="">Seleccione una opción</option>
          <?php
          $sql = "SELECT * FROM materia_ley";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<option value='".$row['id']."'>".$row['descripcion']."</option>";
            }
          }
          ?>
        </select>
        <br>
        <label>Seleccione el numero de publicacion en el Diario Oficial La Gaceta</label>
        <select name="selectNumeroGaceta" id="selectNumeroGaceta">
          <option value="">Seleccione una opción</option>
          <?php
          $sql = "SELECT * FROM datos_gaceta";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<option value='".$row['id']."'>".$row['num_gaceta']."</option>";
            }
          }
          ?>
        </select>
        <br>
          
      <label>Link de Descarga</label>
      <input type="text" name="link"> 

      <br>
      <button type="submit" name="button" id="log">Guardar</button>
        <br>
        
      <a href="mainMenu.html" id="regresar">Regresar al Menu Principal</a>
    </form>
  </body>
</html>
