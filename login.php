<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <form action="p_login.php" method="post">
        <fieldset id="login">
            <center>
                <div class="login_img">
                    <a href="login.php">
                        <img src="img/login.jpeg" class="img" alt="">
                    </a>
                </div>
                <div class="login_form">
                    <label for="txtusuario" class="labels">Usuario / Correo Electronico :</label>
                    <br>
                    <input type="text" id="txtusuario" name="txtusuario" class="input" maxlength="30" minlength="3">
                    <br>
                    <br>
                    <label for="txtpassword" class="labels">Contraseña :</label>
                    <br>
                    <input type="password" id="txtpassword" name="txtpassword" class="input">
                    <br>
                    <br>
                    <input type="submit" value="Iniciar Sesión" class="btn" maxlength="30" minlength="3">
                    <br>
                    <br>
                    <a class="hiper" href="registro.php">¿No tienes una cuenta? ¡Regístrate!</a>
                </div>
            </center>
        </fieldset>
    </form>
</body>

</html>