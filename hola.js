<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LABOWL-Empresa</title>
    <link rel="stylesheet" type="text/css" href="Css/estilosFormulario.css">

    </head>
    <body>
    <h1>Registro de Empresa</h1>

<form method="POST" action="" />

    <table>

    <label for="nombre">Nombre de la Empresa: (*)</label>
<input type="text" name="nombre" placeholder="Escribe tu nombre de Empresa">

    <label for="nickname">Nickname: (*) </label>
<input type="text" name="nickname" placeholder="Escribe tu nickname">

    <label for="password">Contraseña: (*)</label>
<input type="password" name="password" placeholder="Escribe tu contraseña">

    <label for="repassword">Repetir contraseña: (*)</label>
<input type="password" name="repassword" placeholder="Escribe tu contraseña">

    <label for="direccion">Dirección: (*)</label>
<input type="text" name="direccion" placeholder="Escribe tu dirección">

    <label for="telefono">Teléfono: (*)</label>
<input type="text" name="telefono" placeholder="Escribe tu teléfono">

    <label for="email">Email: (*)</label>
<input type="text" name="email" placeholder="Escribe tu email">

    </table>


    <tr>
    <td>
    <input type="submit" name="registrar" value="Registrar" />
    <input type="reset" name="restablecer" value="Restablecer"/>
</td>
</tr>


</form>

<?php
if (isset($_POST['registrar'])){
    require ("registro");
}
    ?>

</body>
</html>
