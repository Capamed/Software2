<?php
require 'Conexion.php';
$idProducto = $_GET['idProducto'];
/*Script para eliminar*/

$sql1 = "SELECT * FROM PRODUCTO WHERE IDPRODUCTO = '$idProducto'";
$resultado1 = $mysqli->query($sql1);
$row = mysqli_fetch_array($resultado,MYSQLI_ASSOC);



$sql = "DELETE FROM PRODUCTO WHERE IDPRODUCTO='$idProducto'";
$resultado = $mysqli->query($sql);

?>

<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../Css/bootstrap.min.css" rel="stylesheet">
    <link href="../Css/bootstrap-theme.css" rel="stylesheet">
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

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
                <li class="nav-item">
                    <a class="nav-link" href="#EMPRESAS ASOCIADAS A LABOWL">EMPRESAS ASOCIADAS A LABOWL<span class="sr-only">(current)</span></a>
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

<div class="container">
    <div class="row">
        <div class="row" style="text-align:center">
            <?php if($resultado) { ?>
                <h3>REGISTRO ELIMINADO</h3>
            <?php } else { ?>
                <h3>ERROR AL ELIMINAR</h3>
            <?php } ?>
            <a href="MostrarP.php?idEmpresa=<?php echo $row['IDEMPRESA']?>" class="btn btn-primary">Regresar</a>

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