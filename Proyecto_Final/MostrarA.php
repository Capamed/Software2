
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--detecta un dispositivo para adaptar la pantalla-->
    <link href="Css/bootstrap.min.css" rel="stylesheet"> <!--//direccion de hojas de estilo de bootstrap-->
    <link href="Css/bootstrap-theme.css" rel="stylesheet"> <!--//direccion de hojas de estilo de bootstrap-->
    <link href="Css/estiloScrollTable.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script> <!--javascript-->
    <script src="js/bootstrap.min.js"></script>


    <?php  //Implementacion para el comando Buscar
    require 'Conexion.php';
    $where = "";

    if(!empty($_POST)) //cuando la variable Post este vacia
    {
        $valor = $_POST['campo'];
        if(!empty($valor)){
            $where = "WHERE NOMBREE LIKE '%$valor%' OR IDEMPRESA LIKE '%$valor%'";
        }
    }
    $sql = "SELECT * FROM Empresa $where";
    $resultado = $mysqli->query($sql);
    ?>
</head>




<body>
<div class="container"> <!--agregar un contenedor-->
    <div class="row"> <!--nueva fila-->
        <h2 style="text-align:center">EMPRESAS ASOCIADAS A LABOWL</h2> <!--encabezado-->
    </div>


    <div class="row">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"> <!--Accion al mismo script-->
            <br><br>
            <input type="text" id="campo" name="campo" placeholder="Nombre o ID de empresa"/>
            <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
        </form>
    </div>
    <br>

    <div class="row table-wrapper-scroll-y">
        <table class="table table-striped table-bordered text-center" >
            <thead> <!-- cabecera -->
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Nickname</th>
                <th>Password</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Acciones</th> <!-- columna vacia para agregar los botones de modificar y eliminar-->

            </tr>
            </thead>

            <tbody>

            <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                <tr>
                    <td><?php echo $row['IDEMPRESA']; ?></td>
                    <td><?php echo $row['NOMBREE']; ?></td>
                    <td><?php echo $row['NICKNAMEE']; ?></td>
                    <td><?php echo $row['PASSWORDE']; ?></td>
                    <td><?php echo $row['DIRECCION']; ?></td>
                    <td><?php echo $row['TELEFONO']; ?></td>
                    <td><?php echo $row['EMAIL']; ?></td>
                    <td ><a href="Empresa/EmpresaM.php?idEmpresa=<?php echo $row['IDEMPRESA']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>      |
                        <a href="Empresa/EliminarE.php?idEmpresa=<?php echo $row['IDEMPRESA']; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>

                </tr>
            <?php } ?>

            </tbody>

        </table>
    </div>

    <br> <br>

    <div style="text-align: center;width:220px">
        <a href="Empresa/EmpresaG.php" class="btn btn-primary" >Nuevo Registro</a>
        <a href="Index.html" class="btn btn-primary" >Retornar</a>
    </div>
</div>




</body>

</html>