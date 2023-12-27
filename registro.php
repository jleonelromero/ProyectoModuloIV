<?php
session_start();
include("Include/conexion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <form action="p_registro.php" method="post">
        <fieldset id="registro">
            <center>
                <div class="registro_form">
                    <?php if ($_GET['type'] === 'persona') { ?>
                        <label for="nombres" class="labels">Nombres:</label>
                        <br>
                        <input type="text" id="txtnombre" name="txtnombre" class="input" required>
                        <br>
                        <br>
                        <label for="apellidos" class="labels">Apellidos:</label>
                        <br>
                        <input type="text" id="txtapellido" name="txtapellido" class="input" required>
                        <br>
                        <br>
                    <?php } else if ($_GET['type'] === 'institucion') { ?>
                        <label for="nombre_institucion" class="labels">Nombre de la Institución Educativa:</label>
                        <br>
                        <input type="text" id="txtnombre" name="txtnombre" class="input" required>
                        <br>
                        <br>
                        <label for="director" class="labels">Director Responsable:</label>
                        <br>
                        <input type="text" id="txtdirector" name="txtdirector" class="input" required>
                        <br>
                        <br>
                    <?php } ?>
                    <label for="correo" class="labels">Correo:</label>
                    <br>
                    <input type="email" id="txtcorreo" name="txtcorreo" class="input" required>
                    <br>
                    <br>
                    <label for="contrasena" class="labels">Contraseña:</label>
                    <br>
                    <input type="password" id="txtpassword" name="txtpassword" class="input" required>
                    <br>
                    <br>
                    <label for="confirmar_contrasena" class="labels">Confirmar Contraseña:</label>
                    <br>
                    <input type="password" id="confirmar_contrasena" name="confirmar_contrasena" class="input" required>
                    <br>
                    <br>
                    <input type="submit" value="Registrate" class="btn" maxlength="30" minlength="3">
                    <br>
                    <br>
                    <input type="hidden" name="type" value="<?php echo $_GET['type']; ?>">
                    <a class="hiper" href="login.php">¿Ya tienes una cuenta? ¡Inicia Sesión!</a>
                </div>
            </center>
        </fieldset>
    </form>
    <script src="js/registro.js"></script>
</body>

</html>