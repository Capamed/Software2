<?php
require 'Conexion.php';
$idPRODUCTO = $_GET['idProducto'];

$sql = "SELECT * FROM SEMAFORONUTRIICONAL WHERE IDPRODUCTO ='$idPRODUCTO'";
$resultado = $mysqli->query($sql);

while($row1 = mysqli_fetch_array($resultado,MYSQLI_ASSOC)) {
    $variableGRASA = $row1['GRASAS'];
    $variableAZUCAR = $row1['AZUCARS'];
    $variableSODIO = $row1['SODIOS'];
}




$sql1 = "SELECT * FROM ETIQUETANUTRICIONAL WHERE IDPRODUCTO ='$idPRODUCTO'";
$resultado1 = $mysqli->query($sql1);



while($row = mysqli_fetch_array($resultado,MYSQLI_ASSOC)) {
    echo $row['IDPRODUCTO'];
    echo $row['ENERGIAT'];
    echo $row['GRASAT'];
    echo $row['COLESTEROLT'];
    echo $row['SODIOT'];
    echo $row['CARBOHIDRATOT'];
    echo $row['PROTEINAT'];
}


?>

<h2>SEMAFORO</h2>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ul class="SemaforoORDEN">
  <li
        <?php
        if($variableGRASA == 'ALTO'){
            echo "<li<img src='Imagenes/caritaROJO.png'  width='150'></li>";
        }else if($variableGRASA == 'MEDIO'){
            echo "<li<img src='Imagenes/caritaAMARILLA.png'  width='160'></li>";
        }else{
            echo "<li<img src='Imagenes/caritaVERDE.png' width='150'></li>";
        }
        ?>
        </li>

    </ul>

</div>

