<?php 
include 'config.php';
if($_POST['search']){
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="..\css\estiloResultados.css">
<body>
    

<h1>Resultados de la Busqueda</h1>
<table class="resultados">
<tr>
    <th width="200px" text-align="center" colspan="3"><strong>Nombre de la Ley</strong></th>
    <th width="1000px" text-align="center" colspan="3"><strong>Descripcion del Articulo</strong></th>
    <th width="10px" text-align="center"><strong>Link de Descarga</strong></th>
</tr>

<?php
$buscar = $_POST['search'];

$sql = "SELECT * FROM ficha_ley WHERE descripcion_articulo like '%$buscar%'";
$sql2 = mysqli_query($conn,$sql);
    while ($registro = mysqli_fetch_assoc($sql2)){
    ?>
    <tr>
        <td class="estilo-tabla" width="200px" style="text-align:center" colspan="3"><?=$registro['id_datos_generales']?></td>
        <td class="estilo-tabla" width="1000px" style="text-align:left" colspan="3"><?=$registro['descripcion_articulo']?></td>
        <td class="estilo-tabla" width="100px" style="text-align:left" colspan="1"><a href="<?=$registro['id_datos_generales']?>"><i class="fa fa-download"></i> </a></td>
    </tr>
   <?php
    }
    ?>
    
</table>
<a href="buscarScreen.php">Buscar mas <i class="fa fa-search"></i></a>
</body>
<?php
}
?>
<?
}
?>

