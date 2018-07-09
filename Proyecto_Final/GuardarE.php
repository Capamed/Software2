<?php

require 'Conexion.php';

$nombreE = $_POST['nombreE'];
$nicknameE = $_POST['nicknameE'];
$passwordE = $_POST['passwordE'];
//$repassword = $_POST['repassword'];
$direccionE = $_POST['direccionE'];
$telefonoE = $_POST['telefonoE'];
$emailE = $_POST['emailE'];



$sql = "INSERT INTO empresa (nombreE, nicknameE, passwordE, direccion, telefono, email) VALUES ('$nombreE', '$nicknameE', '$passwordE', '$direccionE', '$telefonoE', '$emailE')";
$resultado = $mysqli->query($sql);

?>

<html lang="es">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="row" style="text-align:center">
            <?php if($resultado) { ?>
                <h3>REGISTRO GUARDADO</h3>
            <?php } else { ?>
                <h3>ERROR AL GUARDAR</h3>
            <?php } ?>

            <a href="Mostrar.php" class="btn btn-primary">Regresar</a>

        </div>
    </div>
</div>
</body>
</html>