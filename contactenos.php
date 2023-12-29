<?php

include 'Include/cabecera.php'
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctenos</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: left;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin-top: 20px; /* Ajusta el margen entre el título y el formulario */
        }

        h1 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            text-indent: 1px;
            text-overflow: '';
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            margin-bottom: 0px;
        }

        input[type="checkbox"] {
            margin-right: 0px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<br><br><br>
<br><br>
<br><br>
<div class="container">
    <h1>Contáctenos</h1>

    <form action="p_contac.php" method="post">
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
        <style>
            textarea {
width: 100%;
height: 80px; 
padding: 10px;
box-sizing: border-box;
margin-bottom: 10px;
resize: none; 
}
        </style>
        <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Ingrese su mensaje" required maxlength="200"></textarea>

        
        <br>
        <br>

        <input type="submit" value="Enviar">
    </form>
</div>

</body>
</html>
<?php
include'Include/footer.php';
?>