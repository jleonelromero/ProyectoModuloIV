<?php
include("Include/auth.php");
include("Include/conexion.php");
include("Include/cabecera.php");
$cod = $_SESSION["usuario"];
$sql = "SELECT correo FROM tbinstitucioneducativa WHERE idInstitucionEducativa = '$cod' UNION ALL SELECT correo FROM tbpersonaindividual WHERE idPersona = '$cod'";
$f = mysqli_query($cn, $sql);
$r = mysqli_fetch_assoc($f);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/actualizarpass.css">
</head>

<body>
    <br><br>
    <h2>Cambio de Contraseña</h2>
    <form action="p_cambiarpass.php" method="post">
        <label>Correo Electrónico :</label>
        <input type="email" name="txtcorreo" value="<?php echo $r["correo"]; ?>" required>
        <label>Antigua Contraseña :</label>
        <input type="password" name="pass_antigua" required>
        <label>Nueva Contraseña :</label>
        <input type="password" name="pass_nueva" required>
        <label>Confirmar Nueva Contraseña :</label>
        <input type="password" name="pass_confirmar" required>
        <input type="submit" value="Cambiar contraseña">
    </form>
</body>

</html>

<?php
include 'Include/footer.php'
?>