<html lang="es">
<head>
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="Css/estiloMostrarEtiquetaProducto.css" rel="stylesheet">
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
</head>

<body>
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
                    <a class="nav-link" href="#Semáforo Nutricional">Semáforo Nutricional<span class="sr-only">(current)</span></a>
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

<h2>SEMAFORO</h2>
<div class="SemaforoGRASA" >
    <?php
    if($variableGRASA == 'ALTO'){
        echo "<img src='Imagenes/caritaROJO.png'  width='150'>";
    }else if($variableGRASA == 'MEDIO'){
        echo "<img src='Imagenes/caritaAMARILLA.png'  width='160'>";
    }else{
        echo "<img src='Imagenes/caritaVERDE.png' width='150'>";
    }
    ?>
</div>
<div id="semaforo">
<div class="SemaforoAZUCAR" >
    <?php
    if($variableAZUCAR == 'ALTO'){
        echo "<li<img src='Imagenes/caritaROJO.png'  width='150' ></li>";
    }else if($variableAZUCAR == 'MEDIO'){
        echo "<li<img src='Imagenes/caritaAMARILLA.png'  width='160' ></li>";
    }else{
        echo "<li<img src='Imagenes/caritaVERDE.png' width='150'></li>";
    }
    ?>
</div>

<div class="SemaforoSODIO" >
    <?php
    if($variableSODIO == 'ALTO'){
        echo "<li<img src='Imagenes/caritaROJO.png'  width='150' ></li>";
    }else if($variableSODIO == 'MEDIO'){
        echo "<li<img src='Imagenes/caritaAMARILLA.png'  width='160' ></li>";
    }else{
        echo "<li<img src='Imagenes/caritaVERDE.png' width='150'></li>";
    }
    ?>
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
<!--Música-->
<embed src="Música/Musica%20espacial.%20Galaxias.%20Relaxing%20music.%20Musica%20relajante-%5BAudioTrimmer.com%5D%20(1).mp3" width="1" height="1"  autostar="false" loop="true">
</body>
</html>
