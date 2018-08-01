<?php
$mysqli = new mysqli('db4free.net', 'software', '12345678', 'labowlfinal');

if($mysqli->connect_error){

    die('Error en la conexion' . $mysqli->connect_error);
}
?>
