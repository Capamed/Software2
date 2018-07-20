<?php
require 'Conexion.php';

$idEmpresa = $_GET['idEmpresa'];

$sql = "SELECT * FROM empresa WHERE IDEMPRESA = '$idEmpresa'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
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
        <h3 style="text-align:center">MODIFICAR REGISTRO DE LA EMPRESA</h3>
    </div>

    <form class="form-horizontal" method="POST" action="ModificarE.php" autocomplete="off">


        <div class="form-group">
            <label for="nombreE" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombreE" name="nombreE" placeholder="Ingresa tu nombre de empresa" value="<?php echo $row['NOMBREE']; ?>" required>
            </div>
        </div>


        <div class="form-group">
            <label for="nicknameE" class="col-sm-2 control-label">Nickname</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nicknameE" name="nicknameE" placeholder="Ingresa tu nickname" value="<?php echo $row['NICKNAMEE']; ?>" required>
            </div>
        </div>


        <div class="form-group">
            <label for="passwordE" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="passwordE" name="passwordE" placeholder="Ingresa una contraseña" value="<?php echo $row['PASSWORDE']; ?>" required>
            </div>
        </div>



        <div class="form-group">
            <label for="direccionE" class="col-sm-2 control-label">Dirección</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="direccionE" name="direccionE" placeholder="Ingresa la dirección de la Empresa" value="<?php echo $row['DIRECCION']; ?>" required>
            </div>
        </div>


        <div class="form-group">
            <label for="telefonoE" class="col-sm-2 control-label">Telefono</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" id="telefonoE" name="telefonoE" placeholder="Ingresa un número de teléfono" value="<?php echo $row['TELEFONO']; ?>" required>
            </div>
        </div>


        <div class="form-group">
            <label for="emailE" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="emailE" name="emailE" placeholder="Ingresa un email" value="<?php echo $row['EMAIL']; ?>" required>
            </div>
        </div>


        <input type="hidden" id="idEmpresa" name="idEmpresa" value="<?php echo $row['IDEMPRESA']; ?>" />

        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="Mostrar.php" class="btn btn-default">Regresar</a>
                <button type="submit" class="btn btn-primary">Modificar</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>