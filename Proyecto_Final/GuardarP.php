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
</head>

<body>
<div class="container">
    <div class="row">
        <div class="row" style="text-align:center">
            <?php if($resultado && $resultado2 && $resultado1) { ?>
                <h3>REGISTRO GUARDADO Y ETIQUETAS GENERADAS </h3>
            <?php } else { ?>
                <h3>ERROR AL GUARDAR O AL GENERAR ETIQUETAS</h3>
            <?php } ?>

            <a href="MostrarP.php?idEmpresa=<?php echo $idEmpresa?>" class="btn btn-primary">Regresar</a>

        </div>
    </div>
</div>
</body>
</html>