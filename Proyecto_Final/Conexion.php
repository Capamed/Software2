<?php
$mysqli = new mysqli('localhost', 'root', '', 'labowlb');

if($mysqli->connect_error){

    die('Error en la conexion' . $mysqli->connect_error);
}
?>





<!--$host = "localhost";
$user = "root";
$pass = "";
$db = "labowlb";
$enlace = mysqli_connect($host, $user, $pass, $db);

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
echo "Éxito: Se realizó una conexión apropiada a MySQL!" . PHP_EOL;-->










