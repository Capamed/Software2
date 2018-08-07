<?php

require 'Conexion.php';

$nombreE = $_POST['nombreE'];
$nicknameE = $_POST['nicknameE'];
$passwordE = $_POST['passwordE'];
//$repassword = $_POST['repassword'];
$direccionE = $_POST['direccionE'];
$telefonoE = $_POST['telefonoE'];
$emailE = $_POST['emailE'];


$sql = "INSERT INTO EMPRESA (NOMBREE, NICKNAMEE, PASSWORDE, DIRECCION, TELEFONO, EMAIL) 
VALUES ('$nombreE', '$nicknameE', '$passwordE', '$direccionE', '$telefonoE', '$emailE')";

$resultado = $mysqli->query($sql);


$idEmpresa=$mysqli->insert_id; //esta funcion me trae el ID que se haya insertado en el registro

/*if($_FILES["archivo"]["error"]>0) {//Me permite recibir un archivo y evaluar si existe un error o este vacio
    echo "Error al cargar archivo";
}else{
    $permitidos = array("image/gif","image/png","application/pdf","image/jpeg");
    $limite_kb=200; //para el tamanio de mi archivo en Kb

    if(in_array($_FILES["archivo"]["type"],$permitidos)&& $_FILES['archivo']['size']<=$limite_kb*1024){//me permite buscar dentro del array la extension del archivo y del campo que tiene en la variable permitidos (nos envia un true o false) y tambien se evalua que no supere ellimite extabklecido
        $ruta='FilesImages/'; //ruta donde se guardar el archivo perteneciente al id
        $archivo =$ruta.$idEmpresa; //defino el nombre de mi archivo

        if(!file_exists($ruta)) {//verificar si no existe la ruta la crearemo
            mkdir($ruta);
        }
        if(!file_exist($archivo)) {//validacion de que no exista archivos duplicados
            $resultado=@move_uploaded_file($_FILES["archivo"]["tmp_name"],$archivo);//guardar el archivo indicando la ruta a la que voy a mover del formulario
            //tmp_name es el nombre temporal que se la da a un archivo cuando se lo carga al formulario
            if($resultado){ //como me retorna un true o false lo anterior entonces se evalua si es verdadero
                echo "Archivo guardado";
            }else{
                echo "Error al guardar el archivo";

            }

        }else{
            echo "Archivo ya existe";
        }
    }else{
    echo "Archivo no permitido o excede el tamaño";
    }

}

*/
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
        <img src="Imagenes/IconoEmpresa.ico" width="50"/>
        <a class="navbar-brand" href="#">LABOWL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        </div>
        <form class="form-inline mt-2 mt-md-0">
            <a href="Index.html" class="btn btn-outline-success my-2 my-sm-0">Cerrar Sesión</a>
        </form>
    </nav>
</header>

<br/>
<br/>
<br/>

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