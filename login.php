<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/estilo.css">
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
                    <label for="txtusuario" class="labels">Usuario :</label>
                    <br>
                    <input type="text" id="txtusuario" name="txtusuario" class="input" maxlength="30" minlength="3" placeholder="Usuario / Correo Electronico">
                    <br>
                    <br>
                    <label for="txtpassword" class="labels">Contraseña :</label>
                    <br>
                    <div class="input-wrapper password-wrapper">
                        <input type="password" id="txtpassword" name="txtpassword" class="input password-input" placeholder="Contraseña" required>
                        <button type="button" class="password-toggle-button" data-action="toggle">
                            <span class="eye-closed" aria-hidden="true"></span>
                            <span class="eye-open" aria-hidden="true" style="display: none;"></span>
                        </button>
                    </div>
                    <br>
                    <br>
                    <input type="submit" value="Iniciar Sesión" class="btn" maxlength="30" minlength="3">
                    <br>
                    <br>
                    <a class="hiper" href="i_registro.php">¿No tienes una cuenta? ¡Regístrate!</a>
                </div>
            </center>
        </fieldset>
    </form>
    <script src="js/login.js"></script>
</body>

</html>