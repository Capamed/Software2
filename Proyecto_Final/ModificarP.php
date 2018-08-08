<?php

$idEmpresa = $_GET['idEmpresa'];


require 'Conexion.php';
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


$sql = "UPDATE PRODUCTO SET  NOMBREP='$nombreP',CANTIDAD='$cantidad',PORCION='$porcion',
ENERGIA='$energia',GRASA='$grasa',GRASASATURADA='$grasaS',COLESTEROL='$colesterol',
SAL='$sal',SODIO='$sodio',CARBOHIDRATOS='$carbohidratos',FIBRADIETETICA='$fibraD',
AZUCAR='$azucar',PROTEINAS='$proteinas',HIERRO='$hierro',VITAMINAA='$vitamA',
VITAMINAC='$vitamC',VITAMINAD='$vitamD',VITAMINAB1='$vitamB1',VITAMINAB2='$vitamB2',
VITAMINAB12='$vitamB12',VITAMINAB6='$vitamB6',CALCIO='$calcio',FOSFORO='$fosforo',
MAGNESIO='$magnesio',ZINC='$zinc',POTASIO='$potasio' WHERE IDPRODUCTO='$idProducto'";

$resultado = $mysqli->query($sql);



//*********************************************************MODIFICAR SEMAFORO NUTRICIONAL*********************************************************

$SalTotal= floatval($sal)*0.4*1000+floatval($sodio)*0.1*1000;
$grasaTotal=floatval($grasa)+floatval($grasaS);

$valorSalTotal;
$valorAzucar;
$valorGrasaTotal;

if($azucar>=15){
    $valorAzucar="ALTO";
}else if($azucar>5 && $azucar<15){
    $valorAzucar="MEDIO";
}else{

    $valorAzucar="BAJO";
}


if($SalTotal>=600){
    $valorSalTotal="ALTO";
}else if($SalTotal>120 && $SalTotal<600){
    $valorSalTotal="MEDIO";
}else{
    $valorSalTotal="BAJO";
}


if($grasaTotal>=20){
    $valorGrasaTotal="ALTO";
}else if($grasaTotal>3 && $grasaTotal<20){
    $valorGrasaTotal="MEDIO";
}else{
    $valorGrasaTotal="BAJO";
}

$sql1="Select * FROM SEMAFORONUTRIICONAL where IDPRODUCTO=$idProducto";
$resultado1=$mysqli->query($sql1);

$row1 = mysqli_fetch_array($resultado1,MYSQLI_ASSOC);

$idSemaforo = $row1['IDSEMAFORO'];



$sql2= "UPDATE SEMAFORONUTRIICONAL SET IDPRODUCTO='$idProducto',GRASAS='$valorGrasaTotal',AZUCARS='$valorAzucar',SODIOS='$valorSalTotal' WHERE IDSEMAFORO='$idSemaforo'";
$resultado2 = $mysqli->query($sql2);





//***************************************************CALCULOS PARA MODIFICAR LA ETIQUETA NUTRICIONAL**************************************************

$sql4="Select * FROM  ETIQUETANUTRICIONAL where IDPRODUCTO=$idProducto";
$resultado4=$mysqli->query($sql4);

$row2 = mysqli_fetch_array($resultado4,MYSQLI_ASSOC);
$idEtiqueta = $row2['IDETIQUETA'];


$sql5= "UPDATE ETIQUETANUTRICIONAL SET IDPRODUCTO='$idProducto',ENERGIAT='$energia',GRASAT='$grasaTotal', COLESTEROLT='$colesterol',SODIOT='$SalTotal',CARBOHIDRATOT='$carbohidratos',PROTEINAT='$proteinas' WHERE IDETIQUETA='$idEtiqueta'";


$resultado3 = $mysqli->query($sql5);





?>




<html lang="es">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="Css/bootstrap.min.css" rel="stylesheet">
    <link href="Css/bootstrap-theme.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>

<body background="Imagenes/ImagenFondo2.jpg">
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <img src="Imagenes/IconoEmpresa.ico" width="50"/>
        <a class="navbar-brand" href="#">LABOWL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#REGISTRO Y ETIQUETAS MODIFICADAS">REGISTRO Y ETIQUETAS MODIFICADAS<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""></a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <a href="Index.html" class="btn btn-outline-success my-2 my-sm-0">Cerrar Sesión</a>
            </form>
        </div>
    </nav>
</header>

<br/>
<br/>
<br/>
<br/>


<div class="container">
    <div class="row">
        <div class="row" style="text-align:center">
            <?php if($resultado && $resultado2 && $resultado3) { ?>
                <h3>REGISTRO Y ETIQUETAS MODIFICADAS</h3>
            <?php } else { ?>
                <h3>ERROR AL MODIFICAR</h3>
            <?php } ?>

            <a href="MostrarP.php?idEmpresa=<?php echo $idEmpresa?>" class="btn btn-primary">Regresar</a>


        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="../../assets/js/vendor/holder.min.js"></script>

</body>
</html>