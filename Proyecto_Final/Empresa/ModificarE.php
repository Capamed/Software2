<?php

require '../Conexion.php';
$idEmpresa = $_POST['idEmpresa'];
$nombreE = $_POST['nombreE'];
$nicknameE = $_POST['nicknameE'];
$passwordE = $_POST['passwordE'];
$direccionE = $_POST['direccionE'];
$telefonoE = $_POST['telefonoE'];
$emailE = $_POST['emailE'];

$sql = "UPDATE empresa SET nombreE = '$nombreE', nicknameE='$nicknameE',
 direccion='$direccionE', passwordE='$passwordE', telefono='$telefonoE', 
 email='$emailE' WHERE idEmpresa='$idEmpresa'";
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
                <h3>REGISTRO MODIFICADO</h3>
            <?php } else { ?>
                <h3>ERROR AL MODIFICAR</h3>
            <?php } ?>

            <a href="../Mostrar.php" class="btn btn-primary">Regresar</a>

        </div>
    </div>
</div>
</body>
</html>