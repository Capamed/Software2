<?php

$idEmpresa = $_GET['idEmpresa'];


require '../Conexion.php';
$idProducto = $_POST['idProducto'];
$nombreP = $_POST['nombreP'];
$cantidad = $_POST['cantidad'];
$porcion = $_POST['porcion'];
$energia = $_POST['energia'];
$grasa = $_POST['grasa'];
$grasaS = $_POST['grasaS'];
$colesterol = $_POST['colesterol'];
$sal = $_POST['sal'];
$sodio = $_POST['sodio'];
$carbohidratos = $_POST['carbohidratos'];
$fibraD = $_POST['fibraD'];
$azucar = $_POST['azucar'];
$proteinas = $_POST['proteinas'];
$hierro = $_POST['hierro'];
$vitamA = $_POST['vitamA'];
$vitamC = $_POST['vitamC'];
$vitamD = $_POST['vitamD'];
$vitamB1 = $_POST['vitamB1'];
$vitamB2 = $_POST['vitamB2'];
$vitamB12 = $_POST['vitamB12'];
$vitamB6 = $_POST['vitamB6'];
$calcio = $_POST['calcio'];
$fosforo = $_POST['fosforo'];
$magnesio = $_POST['magnesio'];
$zinc = $_POST['zinc'];
$potasio = $_POST['potasio'];


$sql = "UPDATE producto SET  NOMBREP='$nombreP',CANTIDAD='$cantidad',PORCION='$porcion',
ENERGIA='$energia',GRASA='$grasa',GRASASATURADA='$grasaS',COLESTEROL='$colesterol',
SAL='$sal',SODIO='$sodio',CARBOHIDRATOS='$carbohidratos',FIBRADIETETICA='$fibraD',
AZUCAR='$azucar',PROTEINAS='$proteinas',HIERRO='$hierro',VITAMINAA='$vitamA',
VITAMINAC='$vitamC',VITAMINAD='$vitamD',VITAMINAB1='$vitamB1',VITAMINAB2='$vitamB2',
VITAMINAB12='$vitamB12',VITAMINAB6='$vitamB6',CALCIO='$calcio',FOSFORO='$fosforo',
MAGNESIO='$magnesio',ZINC='$zinc',POTASIO='$potasio' WHERE IDEMPRESA='$idEmpresa'";

$resultado = $mysqli->query($sql);

?>




<html lang="es">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../Css/bootstrap.min.css" rel="stylesheet">
    <link href="../Css/bootstrap-theme.css" rel="stylesheet">
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>

<body>


<?php


?>
<div class="container">
    <div class="row">
        <div class="row" style="text-align:center">
            <?php if($resultado) { ?>
                <h3>REGISTRO MODIFICADO</h3>
            <?php } else { ?>
                <h3>ERROR AL MODIFICAR</h3>
            <?php } ?>

            <a href="MostrarP.php?idEmpresa=<?php echo $idEmpresa?>" class="btn btn-primary">Regresar</a>


        </div>
    </div>
</div>
</body>
</html>