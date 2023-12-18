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
    <!--
        https://nicepage.com/es/css-templates/preview/hola-amigo-1474004?device=desktop
        
    -->
    <form action="p_login.php" method="post">
        <fieldset id="login">
            <center>
                <a href="login.php">
                <img src="img/login.jpeg"  class="img" alt="">

                </a>
                <label for="txtusuario" class="labels">Usuario</label>
                <br>
                <input type="text" id="txtusuario" name="txtusuario" class="input">
                <br>
                <label for="txtpassword" class="labels">Contraseña</label>
                <br>
                <input type="password" id="txtpassword" name="txtpassword" class="input">
                <br>
                <input type="submit" value="Iniciar Sesión" class="btn">
                <br>
                <br>
                <a class="hiper" href="registro.php">¿No tienes una cuenta? ¡Regístrate!</a>
            </center>
        </fieldset>
    </form>

</body>

</html>