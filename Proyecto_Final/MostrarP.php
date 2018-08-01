
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--detecta un dispositivo para adaptar la pantalla-->
    <link href="Css/bootstrap.min.css" rel="stylesheet"> <!--//direccion de hojas de estilo de bootstrap-->
    <link href="Css/bootstrap-theme.css" rel="stylesheet"> <!--//direccion de hojas de estilo de bootstrap-->
    <link href="Css/estiloScrollTable.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script> <!--javascript-->
    <script src="js/bootstrap.min.js"></script>


    <?php  //Implementacion para el comando Buscar

    $idEmpresa = $_GET['idEmpresa'];



    require 'Conexion.php';
    $where = "WHERE IDEMPRESA = '$idEmpresa'";
    if(!empty($_POST)) //cuando la variable Post este vacia
    {
        $valor = $_POST['campo'];
        if(!empty($valor)){
            $where = "WHERE NOMBREP LIKE '%$valor%' OR IDPRODUCTO LIKE '%$valor%'";
        }
    }
    $sql = "SELECT * FROM PRODUCTO $where";
    $resultado = $mysqli->query($sql);
    ?>
</head>





<body>
<div class="container"> <!--agregar un contenedor-->

    <div class="row"> <!--nueva fila-->
        <h2 style="text-align:center">PRODUCTOS REGISTRADOS</h2> <!--encabezado-->
    </div>



    <div class="row">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"> <!--Accion al mismo script-->
            <br><br>
            <input type="text" id="campo" name="campo" placeholder="Nombre o ID del Producto"/>
            <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
        </form>
    </div>
    <br>


    <div class="row table-wrapper-scroll-y">
        <table class="table table-striped table-bordered text-center">
            <thead> <!-- cabecera -->
            <tr>
                <th>Acciones</th> <!-- columna vacia para agregar los botones de modificar y eliminar-->
                <th>ID</th>
                <th>ID Empresa</th>
                <th>Nombre</th>
                <th>Cantidad g/ml</th>
                <th>Porciones</th>
                <th>Energía kcal</th>
                <th>Grasa g</th>
                <th>Grasa Saturada g</th>
                <th>Colesterol mg</th>
                <th>Sal g</th>
                <th>Sodio g</th>
                <th>Carbohidratos g</th>
                <th>Fibra Dietética g</th>
                <th>Azúcar g</th>
                <th>Proteínas g</th>
                <th>Hierro mg</th>
                <th>Vitam A mcg</th>
                <th>Vitam C mcg</th>
                <th>Vitam D mcg</th>
                <th>Vitam B1 mcg</th>
                <th>Vitam B2 mcg</th>
                <th>Vitam B12 mcg</th>
                <th>Vitam B6 mcg</th>
                <th>Calcio mg</th>
                <th>Fosforo mg</th>
                <th>Magnesio mg</th>
                <th>Zinc mg</th>
                <th>Potasio mg</th>


            </tr>
            </thead>

            <tbody>

            <?php while($row = mysqli_fetch_array($resultado,MYSQLI_ASSOC)) { ?>
                <tr valign="middle" align="center">
                    <td><a href="ProductoM.php?idProducto=<?php echo $row['IDPRODUCTO']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>      |
                        <a href="EliminarP.php?idProducto=<?php echo $row['IDPRODUCTO']; ?>"><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                    <td><?php echo $row['IDPRODUCTO']; ?></td>
                    <td><?php echo $row['IDEMPRESA']; ?></td>
                    <td><?php echo $row['NOMBREP']; ?></td>
                    <td><?php echo $row['CANTIDAD']; ?></td>
                    <td><?php echo $row['PORCION']; ?></td>
                    <td><?php echo $row['ENERGIA']; ?></td>
                    <td><?php echo $row['GRASA']; ?></td>
                    <td><?php echo $row['GRASASATURADA']; ?></td>
                    <td><?php echo $row['COLESTEROL']; ?></td>
                    <td><?php echo $row['SAL']; ?></td>
                    <td><?php echo $row['SODIO']; ?></td>
                    <td><?php echo $row['CARBOHIDRATOS']; ?></td>
                    <td><?php echo $row['FIBRADIETETICA']; ?></td>
                    <td><?php echo $row['AZUCAR']; ?></td>
                    <td><?php echo $row['PROTEINAS']; ?></td>
                    <td><?php echo $row['HIERRO']; ?></td>
                    <td><?php echo $row['VITAMINAA']; ?></td>
                    <td><?php echo $row['VITAMINAC']; ?></td>
                    <td><?php echo $row['VITAMINAD']; ?></td>
                    <td><?php echo $row['VITAMINAB1']; ?></td>
                    <td><?php echo $row['VITAMINAB2']; ?></td>
                    <td><?php echo $row['VITAMINAB12']; ?></td>
                    <td><?php echo $row['VITAMINAB6']; ?></td>
                    <td><?php echo $row['CALCIO']; ?></td>
                    <td><?php echo $row['FOSFORO']; ?></td>
                    <td><?php echo $row['MAGNESIO']; ?></td>
                    <td><?php echo $row['ZINC']; ?></td>
                    <td><?php echo $row['POTASIO']; ?></td>




                </tr>
            <?php } ?>

            </tbody>

        </table>
</div>

    <br> <br>

    <div style="text-align: right;width:220px">




        <a href="ProductoG.php?idEmpresa=<?php echo $idEmpresa ?>"><span class="btn btn-primary">Nuevo Registro</span></a>
        <a href="../Mostrar.php" class="btn btn-primary" >Retornar</a>
    </div>
</div>




</body>

</html>