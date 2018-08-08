<?php

require 'Conexion.php';


$idEmpresa = $_POST['idEmpresa'];
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


$sql = "INSERT INTO PRODUCTO (IDEMPRESA,NOMBREP,CANTIDAD,PORCION,ENERGIA, 
GRASA,GRASASATURADA,COLESTEROL,SAL,SODIO,CARBOHIDRATOS,FIBRADIETETICA,AZUCAR,
PROTEINAS,HIERRO,VITAMINAA,VITAMINAC,VITAMINAD,VITAMINAB1,VITAMINAB2,
VITAMINAB12,VITAMINAB6,CALCIO,FOSFORO,MAGNESIO,ZINC,POTASIO) 
VALUES ('$idEmpresa','$nombreP','$cantidad', '$porcion','$energia','$grasa',
'$grasaS','$colesterol','$sal','$sodio','$carbohidratos','$fibraD','$azucar',
'$proteinas','$hierro','$vitamA','$vitamC','$vitamD','$vitamB1','$vitamB2',
'$vitamB12','$vitamB6','$calcio','$fosforo','$magnesio','$zinc','$potasio')";


$resultado = $mysqli->query($sql);


//***************************************************CALCULOS PARA EL SEMAFORO NUTRICIONAL**************************************************


$id_Producto= $mysqli->insert_id;
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

$sql2= "INSERT INTO SEMAFORONUTRIICONAL (IDPRODUCTO,GRASAS,AZUCARS,SODIOS)
VALUES('$id_Producto','$valorGrasaTotal','$valorAzucar','$valorSalTotal')";

$resultado2=$mysqli->query($sql2);


//***************************************************CALCULOS PARA LA ETIQUETA NUTRICIONAL**************************************************





$sql1 = "INSERT INTO ETIQUETANUTRICIONAL (IDPRODUCTO,ENERGIAT,GRASAT,COLESTEROLT,SODIOT, 
CARBOHIDRATOT,PROTEINAT) 
VALUES ('$id_Producto','$energia','$grasaTotal', '$colesterol','$SalTotal','$carbohidratos',
'$proteinas')";

$resultado1 = $mysqli->query($sql1);

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

<body background="Imagenes/imagen%20fondo%201.jpg">
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <img src="Imagenes/IconoEmpresa.ico" width="50"/>
        <a class="navbar-brand" href="#">LABOWL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href=""><span class="sr-only">(current)</span></a>
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
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container">
    <div class="row">
        <div class="row" style="text-align:center">
            <?php if($resultado && $resultado2 && $resultado1) { ?>
                <h3>REGISTRO GUARDADO Y ETIQUETAS GENERADAS </h3>
            <?php } else { ?>
                <h3>ERROR AL GUARDAR O AL GENERAR ETIQUETAS</h3>
            <?php } ?>
            <br>
            <br>
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