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
      <select name="selectEnte" id="selectEnter">
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

      <label>Version</label>
      <input type="text" name="version"> 
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
