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
</head>

<body>
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
</body>
</html>