
<?php
require("../Conexion.php");

$idEmpresa = $_GET['idEmpresa'];

$sql = "SELECT * FROM empresa WHERE IDEMPRESA = '$idEmpresa'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
?>

<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>


<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <img src="../Imagenes/IconoEmpresa.ico" width="50"/>
        <a class="navbar-brand" href="#">LABOWL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#MODIFICAR REGISTRO DE LA EMPRESA">MODIFICAR REGISTRO DE LA EMPRESA<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<br/>
<br/>
<br/>

<div class="container">

    <form class="form-horizontal" method="POST" action="ModificarE.php" autocomplete="off">


        <div class="form-group">
            <label for="nombreE" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombreE" name="nombreE" placeholder="Ingresa tu nombre de empresa"
                       value="<?php echo $row['NOMBREE']; ?>" required>
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
                <input type="password" class="form-control" id="passwordE" name="passwordE" placeholder="Ingresa una contraseña"
                       value="<?php echo $row['PASSWORDE']; ?>" required>
            </div>
        </div>



        <div class="form-group">
            <label for="direccionE" class="col-sm-2 control-label">Dirección</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="direccionE" name="direccionE" placeholder="Ingresa la dirección de la Empresa"
                       value="<?php echo $row['DIRECCION']; ?>" required>
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
                <a href="../Mostrar.php" class="btn btn-default">Regresar</a>
                <button type="submit" class="btn btn-primary">Modificar</button>
            </div>
        </div>
    </form>
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

</body>
</html>