<?php
include("Include/conexion.php");
include("Include/cabecera.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/contacto.css">
</head>

<body>
    <div class="container">
        <form action="p_contactenos.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required>
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>
            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>
            <label for="motivo">Motivo:</label>
            <select id="motivo" name="motivo">
                <option value="" disabled selected>Seleccione una opción</option>
                <option value="consulta">Consulta</option>
                <option value="reclamo">Reclamo</option>
                <option value="comentario">Comentario</option>
                <option value="sugerencia">Sugerencia</option>
                <option value="otros">Otros</option>
            </select>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
            <div class="checkbox-container">
                <input type="checkbox" name="consentimiento" id="consentimiento" required>
                <label for="consentimiento">He leído y acepto dar mi consentimiento para el uso de mis datos personales.</label>
            </div>
            <br>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>

</body>

</html>

<?php
include 'Include/footer.php'
?>