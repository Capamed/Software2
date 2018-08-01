<?php

require 'Conexion.php';
$username = $_POST['username'];
$password = $_POST['password'];

    if($username == 'Administrador' && $password == '123'){
       header("Location: Mostrar.php");
    }else {
        echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=Login.php">
                  <SCRIPT LANGUAGE="javascript"> 
                    alert("Ingrese Usuario y Contraseña CORRECTOS"); 
                  </SCRIPT>';
    }
    $consulta = "SELECT * FROM EMPRESA WHERE NICKNAMEE = '$username' && PASSWORDE = '$password'";
    $resultado = $mysqli->query($consulta);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $nombre = $row['NICKNAMEE'];
    $password1 = $row['PASSWORDE'];
    if ($nombre == $username && $password1 == $password) {
        $id =$row['IDEMPRESA'];
        header("Location: MostrarP.php?idEmpresa=$id");
    } else {
        echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=Login.php">
              <SCRIPT LANGUAGE="javascript"> 
                alert("Ingrese Usuario y Contraseña CORRECTOS"); 
              </SCRIPT>';
    }
