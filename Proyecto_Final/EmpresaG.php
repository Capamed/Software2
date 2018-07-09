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
        <h3 style="text-align:center">NUEVO REGISTRO DE EMPRESA</h3>
    </div>

    <form class="form-horizontal" method="POST" action="GuardarE.php" autocomplete="off">


        <div class="form-group">
            <label for="nombreE" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombreE" name="nombreE" placeholder="Ingresa tu nombre de empresa" required>
            </div>
        </div>


        <div class="form-group">
            <label for="nicknameE" class="col-sm-2 control-label">Nickname</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nicknameE" name="nicknameE" placeholder="Ingresa tu nickname" required>
            </div>
        </div>


        <div class="form-group">
            <label for="passwordE" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="passwordE" name="passwordE" placeholder="Ingresa una contraseña" required>
            </div>
        </div>



        <div class="form-group">
            <label for="direccionE" class="col-sm-2 control-label">Dirección</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="direccionE" name="direccionE" placeholder="Ingresa la dirección de la Empresa" required>
            </div>
        </div>


        <div class="form-group">
            <label for="telefonoE" class="col-sm-2 control-label">Telefono</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" id="telefonoE" name="telefonoE" placeholder="Ingresa un número de teléfono" required>
            </div>
        </div>


        <div class="form-group">
            <label for="emailE" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="emailE" name="emailE" placeholder="Ingresa un email" required>
            </div>
        </div>




        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="Mostrar.php" class="btn btn-default">Regresar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>