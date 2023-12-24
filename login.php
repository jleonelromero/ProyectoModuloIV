<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- <link rel="stylesheet" href="css/estilo.css"> -->
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <form action="p_login.php" method="post">
        <fieldset id="login">
            <center>
                <label for="txtusuario">Usuario:</label>
                <br>
                <input type="text" id="txtusuario" name="txtusuario" class="txt">
                <br>
                <label for="txtpassword">Contraseña:</label>
                <br>
                <input type="password" id="txtpassword" name="txtpassword" class="pwd">
                <br>
                <input type="submit" value="Iniciar Sesión" class="btn">
                <br>
                <br>
                <a href="registro.php">¿No tienes una cuenta? ¡Regístrate!</a>
            </center>
        </fieldset>
    </form>
</body>

</html>