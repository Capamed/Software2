<?php

require '../Conexion.php';

$nombreE = $_POST['nombreE'];
$nicknameE = $_POST['nicknameE'];
$passwordE = $_POST['passwordE'];
//$repassword = $_POST['repassword'];
$direccionE = $_POST['direccionE'];
$telefonoE = $_POST['telefonoE'];
$emailE = $_POST['emailE'];


$sql = "INSERT INTO empresa (nombreE, nicknameE, passwordE, direccion, telefono, email) 
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

            <a href="../Mostrar.php" class="btn btn-primary">Regresar</a>

        </div>
    </div>
</div>
</body>
</html>