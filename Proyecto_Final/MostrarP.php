
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--detecta un dispositivo para adaptar la pantalla-->
    <link href="Css/bootstrap.min.css" rel="stylesheet"> <!--//direccion de hojas de estilo de bootstrap-->
    <link href="Css/bootstrap-theme.css" rel="stylesheet"> <!--//direccion de hojas de estilo de bootstrap-->
    <link href="Css/estiloScrollTable.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script> <!--javascript-->
    <script src="js/bootstrap.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


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

<body background="Imagenes/imagen%20fondo%201.jpg">

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <img src="Imagenes/IconoEmpresa.ico" width="50"/>
        <a class="navbar-brand" href="#">LABOWL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#PRODUCTOS REGISTRADOS">PRODUCTOS REGISTRADOS<span class="sr-only">(current)</span></a>
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
<br/>
<br/>

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
<<<<<<< HEAD
                        <a href="mostrarEtiquetaEmpresa.php?idProducto=<?php echo $row['IDPRODUCTO']; ?>"><span class="btn btn-primary">Mostrar Etiqueta</span></a>
=======
                        <a href="MostrarEtiquetaEmpresa.php?idProducto=<?php echo $row['IDPRODUCTO']; ?>"><span class="btn btn-primary">Mostrar Etiqueta</span></a>
>>>>>>> 96d5986b51ca6cde5698de1f41c4fa6b8a040b12

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

<<<<<<< HEAD
        <a href="MostrarP.php" class="btn btn-primary" >Página Principal</a>
=======
        <a href="Index.html" class="btn btn-primary" >Regresar</a>

>>>>>>> 96d5986b51ca6cde5698de1f41c4fa6b8a040b12

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