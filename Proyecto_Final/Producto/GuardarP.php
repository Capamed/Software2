<?php

require '../Conexion.php';


$idEmpresa = $_POST['idEmpresa'];
$nombreP = $_POST['nombreP'];
$cantidad = $_POST['cantidad'];
$porcion = $_POST['porcion'];
$energia = $_POST['energia'];
$grasa = $_POST['grasa'];
$grasaS = $_POST['grasaS'];
$colesterol = $_POST['colesterol'];
$sal = $_POST['sal'];
$sodio = $_POST['sodio'];
$carbohidratos = $_POST['carbohidratos'];
$fibraD = $_POST['fibraD'];
$azucar = $_POST['azucar'];
$proteinas = $_POST['proteinas'];
$hierro = $_POST['hierro'];
$vitamA = $_POST['vitamA'];
$vitamC = $_POST['vitamC'];
$vitamD = $_POST['vitamD'];
$vitamB1 = $_POST['vitamB1'];
$vitamB2 = $_POST['vitamB2'];
$vitamB12 = $_POST['vitamB12'];
$vitamB6 = $_POST['vitamB6'];
$calcio = $_POST['calcio'];
$fosforo = $_POST['fosforo'];
$magnesio = $_POST['magnesio'];
$zinc = $_POST['zinc'];
$potasio = $_POST['potasio'];


$sql = "INSERT INTO PRODUCTO (IDEMPRESA,NOMBREP,CANTIDAD,PORCION,ENERGIA, 
GRASA,GRASASATURADA,COLESTEROL,SAL,SODIO,CARBOHIDRATOS,FIBRADIETETICA,AZUCAR,
PROTEINAS,HIERRO,VITAMINAA,VITAMINAC,VITAMINAD,VITAMINAB1,VITAMINAB2,
VITAMINAB12,VITAMINAB6,CALCIO,FOSFORO,MAGNESIO,ZINC,POTASIO) 
VALUES ('$idEmpresa','$nombreP','$cantidad', '$porcion','$energia','$grasa',
'$grasaS','$colesterol','$sal','$sodio','$carbohidratos','$fibraD','$azucar',
'$proteinas','$hierro','$vitamA','$vitamC','$vitamD','$vitamB1','$vitamB2',
'$vitamB12','$vitamB6','$calcio','$fosforo','$magnesio','$zinc','$potasio')";




$resultado = $mysqli->query($sql);

/*
  if($_FILES["archivo"]["error"]>0) {//Me permite recibir un archivo y evaluar si existe un error o este vacio
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

            <a href="MostrarP.php?idEmpresa=<?php echo $idEmpresa?>" class="btn btn-primary">Regresar</a>

        </div>
    </div>
</div>
</body>
</html>