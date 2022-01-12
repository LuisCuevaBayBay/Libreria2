<?php
include 'config.php';
if($_POST['select1']){
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="..\css\estiloResultados.css">
<body>
    <h1>Resultados Comparacion</h1>
    <table class="resultados">
        <tr>
            <th width="200px" text-align="center" colspan="3"><strong>Nombre de la Ley</strong></th>
            <th width="200px" text-align="center" colspan="1"><strong>Ente</strong></th>
            <th width="200px" text-align="center" colspan="1"><strong>Fecha de Vigencia</strong></th>
            <th width="200px" text-align="center" colspan="1"><strong>Tipo de la Ley</strong></th>
            <th width="200px" text-align="center" colspan="1"><strong>Materia de Ley</strong></th>
            <th width="200px" text-align="center" colspan="1"><strong>Numero de Publicacion en La Gaceta</strong></th>
            <th width="200px" text-align="center" colspan="4"><strong>Resumen del Contenido de la Ley </th>
            <th width="100px" text-align="center" colspan="1"><strong>Link de Descarga</strong></th>
        </tr>
        <?php
        $buscar = $_POST['select1'];
        $sql ="SELECT datos_gaceta.num_gaceta, ente.descripcion_ente, materia_ley.descripcion_materia, tipo_ley.descripcion_tipo, datos_generales_leyes.id, nombre, id_ente, fecha_vigencia, id_tipo_ley, id_materia, id_gaceta, link,resumen 
        FROM datos_generales_leyes 
        INNER JOIN datos_gaceta ON datos_generales_leyes.id_gaceta = datos_gaceta.id 
        INNER JOIN ente ON datos_generales_leyes.id_ente = ente.id 
        INNER JOIN tipo_ley ON datos_generales_leyes.id_tipo_ley = tipo_ley.id 
        INNER JOIN materia_ley ON datos_generales_leyes.id_materia = materia_ley.id 
        WHERE datos_generales_leyes.id = '$buscar'";

        $sql2 = mysqli_query($conn,$sql);
            while ($registro = mysqli_fetch_assoc($sql2)){
            ?>
            <tr>
                <td class="estilo-tabla" width="200px" style="text-align:left" colspan="3"><?=$registro['nombre']?></td>
                <td class="estilo-tabla" width="200px" style="text-align:justify" colspan="1"><?=$registro['descripcion_ente']?></td>
                <td class="estilo-tabla" width="200px" style="text-align:justify" colspan="1"><?=$registro['fecha_vigencia']?></td>
                <td class="estilo-tabla" width="200px" style="text-align:justify" colspan="1"><?=$registro['descripcion_tipo']?></td>
                <td class="estilo-tabla" width="200px" style="text-align:justify" colspan="1"><?=$registro['descripcion_materia']?></td>
                <td class="estilo-tabla" width="200px" style="text-align:justify" colspan="1"><?=$registro['num_gaceta']?></td>
                <td class="estilo-tabla" width="300px" style="text-align:justify" colspan="4"><?=$registro['resumen']?></td>
                <td class="estilo-tabla" width="100px"colspan="1"><a href="<?=$registro['link']?>"target="_blank"><i class="fa fa-download"></i> </a></td>
            </tr>
           <?php
            }
            ?>
<?php
}
?>
</table>
<br><br><br><br>
 <table class="resultados">
     <tr>
     <th width="200px" text-align="center" colspan="3"><strong>Nombre de la Ley</strong></th>
            <th width="200px" text-align="center" colspan="1"><strong>Ente</strong></th>
            <th width="200px" text-align="center" colspan="1"><strong>Fecha de Vigencia</strong></th>
            <th width="200px" text-align="center" colspan="1"><strong>Tipo de la Ley</strong></th>
            <th width="200px" text-align="center" colspan="1"><strong>Materia de Ley</strong></th>
            <th width="200px" text-align="center" colspan="1"><strong>Numero de Publicacion en La Gaceta</strong></th>
            <th width="200px" text-align="center" colspan="4"><strong>Resumen del Contenido de la Ley </th>
            <th width="100px" text-align="center" colspan="1"><strong>Link de Descarga</strong></th>
            
     </tr>

<?php
$buscar2 = $_POST['select2'];
$sql3 ="SELECT datos_gaceta.num_gaceta, ente.descripcion_ente, materia_ley.descripcion_materia, tipo_ley.descripcion_tipo, datos_generales_leyes.id, nombre, id_ente, fecha_vigencia, id_tipo_ley, id_materia, id_gaceta, link, resumen FROM datos_generales_leyes INNER JOIN datos_gaceta ON datos_generales_leyes.id_gaceta = datos_gaceta.id INNER JOIN ente ON datos_generales_leyes.id_ente = ente.id INNER JOIN tipo_ley ON datos_generales_leyes.id_tipo_ley = tipo_ley.id INNER JOIN materia_ley ON datos_generales_leyes.id_materia = materia_ley.id WHERE datos_generales_leyes.id = '$buscar2'";
$sql4 = mysqli_query($conn,$sql3);
while ($registro = mysqli_fetch_assoc($sql4)){
?>
<tr>
    <td class="estilo-tabla" width="200px" style="text-align:left" colspan="3"><?=$registro['nombre']?></td>
    <td class="estilo-tabla" width="200px" style="text-align:justify" colspan="1"><?=$registro['descripcion_ente']?></td>
    <td class="estilo-tabla" width="200px" style="text-align:justify" colspan="1"><?=$registro['fecha_vigencia']?></td>
    <td class="estilo-tabla" width="200px" style="text-align:justify" colspan="1"><?=$registro['descripcion_tipo']?></td>
    <td class="estilo-tabla" width="200px" style="text-align:justify" colspan="1"><?=$registro['descripcion_materia']?></td>
    <td class="estilo-tabla" width="200px" style="text-align:justify" colspan="1"><?=$registro['num_gaceta']?></td>
    <td class="estilo-tabla" width="300px" style="text-align:justify" colspan="4"><?=$registro['resumen']?></td>
    <td class="estilo-tabla" width="100px"colspan="1"><a href="<?=$registro['link']?>"target="_blank"><i class="fa fa-download"></i> </a></td>
</tr>
<?php
}   
?>
</table>
<br><br>
<a href="cotejoInfo.php">Volver al menu principal</a>
</body>
</html>
<?php
