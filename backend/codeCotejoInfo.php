<?php
include 'config.php';
if($_POST['compare']){
    ?>
    <h1>Resultados de Comparacion</h1>
    <?php
    $comparar =$_POST['compare'];
    $sql = "SELECT * FROM datos_generales_leyes WHERE nombre = '$comparar'";
    $sql2 = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($sql2)){
        ?>
        <div class="resultados">
        <div class="nombreLey">
            <label>Nombre de la Ley</label>
        </div>
        <div class="Ente">
            <label>Ente que aprobo la ley</label>
        </div>
        <div class="FechaDeVigencia">
            <label>Fecha de Vigencia</label>
        </div>
        <div class="TipoLey">
            <label>Tipo de Ley</label>
        </div>
        <div class="materia">
            <label>Materia</label>
        </div>
    </div>
    <?php
    }
    
}
?>
