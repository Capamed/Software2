
<?php
require("../Conexion.php");

$idProducto = $_GET['idProducto'];

$sql = "SELECT * FROM producto WHERE IDPRODUCTO = '$idProducto'";
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
</head>


<body>
<div class="container">
    <div class="row">
        <h3 style="text-align:center">MODIFICAR REGISTRO DEL PRODUCTO</h3>
    </div>

    <form class="form-horizontal" method="POST" action="ModificarP.php?idEmpresa=<?php echo $row['IDEMPRESA']; ?>" autocomplete="off">



        <div class="form-group">
            <label for="nombreP" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombreP" name="nombreP" placeholder="Ingresa el nombre de tu producto"
                       value="<?php echo $row['NOMBREP']; ?>" required>
        </div>
        </div>

        <div class="form-group">
            <label for="cantidad" class="col-sm-2 control-label">Cantidad (g/ml) </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Ingresa la cantidad en g/ml"
                       value="<?php echo $row['CANTIDAD']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="porcion" class="col-sm-2 control-label">Porcion</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="porcion" name="porcion" placeholder="Ingresa la cantidad de porciones"
                       value="<?php echo $row['PORCION']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="energia" class="col-sm-2 control-label">Energia (kcal)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="energia" name="energia" placeholder="Ingresa la cantidad de energia"
                       value="<?php echo $row['ENERGIA']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="grasa" class="col-sm-2 control-label">Grasa (g)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="grasa" name="grasa" placeholder="Ingresa la cantidad de grasa"
                       value="<?php echo $row['GRASA']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="grasaS" class="col-sm-2 control-label">Grasa Saturada (g)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="grasaS" name="grasaS" placeholder="Ingresa la cantidad de grasa saturada"
                       value="<?php echo $row['GRASASATURADA']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="colesterol" class="col-sm-2 control-label">Colesterol (mg)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="colesterol" name="colesterol" placeholder="Ingresa la cantidad de colesterol"
                       value="<?php echo $row['COLESTEROL']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="sal" class="col-sm-2 control-label">Sal (g)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="sal" name="sal" placeholder="Ingresa la cantidad de sal"
                       value="<?php echo $row['SAL']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="sodio" class="col-sm-2 control-label">Sodio (g)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="sodio" name="sodio" placeholder="Ingresa la cantidad de sodio"
                       value="<?php echo $row['SODIO']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="carbohidratos" class="col-sm-2 control-label">Carbohídratos (g)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="carbohidratos" name="carbohidratos" placeholder="Ingresa la cantidad de carbohídratos"
                       value="<?php echo $row['CARBOHIDRATOS']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="fibraD" class="col-sm-2 control-label">Fibra Dietética (g)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="fibraD" name="fibraD" placeholder="Ingresa la cantidad de fibra dietética"
                       value="<?php echo $row['FIBRADIETETICA']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="azucar" class="col-sm-2 control-label">Azúcar (g)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="azucar" name="azucar" placeholder="Ingresa la cantidad de azúcar"
                       value="<?php echo $row['AZUCAR']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="proteinas" class="col-sm-2 control-label">Proteínas (g)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="proteinas" name="proteinas" placeholder="Ingresa la cantidad de proteínas"
                       value="<?php echo $row['PROTEINAS']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="hierro" class="col-sm-2 control-label">Hierro (mg)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="hierro" name="hierro" placeholder="Ingresa la cantidad de hierro"
                       value="<?php echo $row['HIERRO']; ?>" required>
            </div>
        </div>



        <div class="form-group">
            <label for="vitamA" class="col-sm-2 control-label">Vitamina A (mcg)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="vitamA" name="vitamA" placeholder="Ingresa la cantidad de vitamina A"
                       value="<?php echo $row['VITAMINAA']; ?>" equired>
            </div>
        </div>

        <div class="form-group">
            <label for="vitamC" class="col-sm-2 control-label">Vitamina C (mcg)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="vitamC" name="vitamC" placeholder="Ingresa la cantidad de vitamina C"
                       value="<?php echo $row['VITAMINAC']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="vitamD" class="col-sm-2 control-label">Vitamina D (mcg)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="vitamD" name="vitamD" placeholder="Ingresa la cantidad de vitamina D"
                       value="<?php echo $row['VITAMINAD']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="vitamB1" class="col-sm-2 control-label">Vitamina B1 (mcg)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="vitamB1" name="vitamB1" placeholder="Ingresa la cantida vitamína B1"
                       value="<?php echo $row['VITAMINAB1']; ?>" required>
            </div>
        </div>


        <div class="form-group">
            <label for="vitamB2" class="col-sm-2 control-label">Vitamina B2 (mcg)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="vitamB2" name="vitamB2" placeholder="Ingresa la cantidad de vitamina B2"
                       value="<?php echo $row['VITAMINAB2']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="vitamB12" class="col-sm-2 control-label">Vitamina B12 (mcg)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="vitamB12" name="vitamB12" placeholder="Ingresa la cantidad de vitamina B12"
                       value="<?php echo $row['VITAMINAB12']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="vitamB6" class="col-sm-2 control-label">Vitamina B6 (mcg)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="vitamB6" name="vitamB6" placeholder="Ingresa la cantidad de vitamina B6"
                       value="<?php echo $row['VITAMINAB6']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="calcio" class="col-sm-2 control-label">Calcio (mg)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="calcio" name="calcio" placeholder="Ingresa la cantidad de calcio"
                       value="<?php echo $row['CALCIO']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="fosforo" class="col-sm-2 control-label">Fósforo (mcg)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="fosforo" name="fosforo" placeholder="Ingresa la cantidad de fósforo"
                       value="<?php echo $row['FOSFORO']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="magnesio" class="col-sm-2 control-label">Magnesio (mcg)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="magnesio" name="magnesio" placeholder="Ingresa la cantidad de magnesio"
                       value="<?php echo $row['MAGNESIO']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="zinc" class="col-sm-2 control-label">Zinc (mcg)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="zinc" name="zinc" placeholder="Ingresa la cantidad de zinc"
                       value="<?php echo $row['ZINC']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="potasio" class="col-sm-2 control-label">Potasio (mcg)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="potasio" name="potasio" placeholder="Ingresa la cantidad de potasio"
                       value="<?php echo $row['POTASIO']; ?>" required>
            </div>
        </div>


        <input type="hidden" id="idProducto" name="idProducto"
               value="<?php echo $row['IDPRODUCTO']; ?>" />


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="MostrarP.php?idEmpresa=<?php echo $row['IDEMPRESA']; ?>"><span class="btn btn-primary">Regresar</span></a>

                <button type="submit" class="btn btn-primary">Modificar</button>






            </div>
        </div>
    </form>
</div>
</body>
</html>