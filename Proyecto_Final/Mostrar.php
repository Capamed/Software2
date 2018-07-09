

<?php
require 'Conexion.php';

$where = "";

if(!empty($_POST)) //cuando la variable Post este vacia
{
    $valor = $_POST['campo'];
    if(!empty($valor)){
        $where = "WHERE IDEMPRESA LIKE '$valor%'";
    }
}

$sql = "SELECT * FROM Empresa $where";
$resultado = $mysqli->query($sql);
?>

<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--detecta un dispositivo para adaptar la pantalla-->
    <link href="css/bootstrap.min.css" rel="stylesheet"> <!--//direccion de hojas de estilo de bootstrap-->
    <link href="css/bootstrap-theme.css" rel="stylesheet"> <!--//direccion de hojas de estilo de bootstrap-->
    <script src="js/jquery-3.1.1.min.js"></script> <!--javascript-->
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container"> <!--agregar un contenedor-->
    <div class="row"> <!--nueva fila-->
        <h2 style="text-align:center">EMPRESAS ASOCIADAS A LABOWL</h2> <!--encabezado-->
    </div>

    <div class="row">
        <a href="EmpresaG.php" class="btn btn-primary">Nuevo Registro
        </a>

        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"> <!--Accion al mismo script-->
            <b>ID: </b><input type="text" id="campo" name="campo" placeholder="Ingresa el ID"/>
            <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
        </form>


    </div>
    <br>


    <div class="row table-responsive">
        <table class="table table-striped">
            <thead> <!-- cabecera -->
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Nickname</th>
                <th>Password</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th></th> <!-- columna vacia para agregar los botones de modificar y eliminar-->
                <th></th>
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
                    <td><a href="EmpresaM.php?idEmpresa=<?php echo $row['IDEMPRESA']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                    <td><a href="EliminarE?idEmpresa=<?php echo $row['IDEMPRESA']; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>

                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="row">
        <a href="Index.html" class="btn btn-primary">Retornar
        </a>
    </div>
</div>




<!--
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
            </div>

            <div class="modal-body">
                ¿Desea eliminar este registro?
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

<script>
    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

        $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
    });
</script>-->


</body>

</html>