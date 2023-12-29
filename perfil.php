<?php
include 'Include/conexion.php';
include 'Include/cabecera.php';
$cod = $_SESSION["usuario"];
$sqlInstitucion = "SELECT * FROM tbinstitucioneducativa WHERE idInstitucionEducativa = '$cod'";
$fInst = mysqli_query($cn, $sqlInstitucion);
$rInst = mysqli_fetch_assoc($fInst);
$sqlPersona = "SELECT * FROM tbpersonaindividual WHERE idPersona = '$cod'";
$fPers = mysqli_query($cn, $sqlPersona);
$rPers = mysqli_fetch_assoc($fPers);
if ($rInst) {
    $tabla = "InstitucionEducativa";
} elseif ($rPers) {
    $tabla = "PersonaIndividual";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/perfil.css">
</head>

<body>
    <div class="container">
        <?php if ($tabla === "InstitucionEducativa") { ?>
            <div class="profile">
                <img src="<?php echo (file_exists($fotoPath)) ? $fotoPath : 'FotosPerfil/foto-porDefecto.png'; ?>" alt="Foto de perfil">
                <div class="profile-info">
                    <h2><?php echo $rInst["nombre"]; ?></h2>
                    <p><strong>Código de la I.E:</strong><?php echo (!empty($rInst["codInstitucion"])) ? $rInst["codInstitucion"] : '<span class="error-message">¡Actualiza tus datos!</span>'; ?></p>
                    <p><strong>Nombre de la Institución Educativa :</strong><?php echo $rInst["nombre"]; ?></p>
                    <p><strong>Email :</strong><?php echo $rInst["correo"]; ?></p>
                    <p><strong>Director(a) Responsable :</strong><?php echo $rInst["direcResponsable"]; ?></p>
                    <p><strong>Nro. de Alumnos :</strong><?php echo $rInst["numAlumnos"]; ?></p>
                    <p><strong>Nro. de Docentes :</strong><?php echo $rInst["numDocentes"]; ?></p>
                    <p><strong>Nro. de Administrativos :</strong><?php echo $rInst["numAdministrativos"]; ?></p>
                    <p><strong>Departamento :</strong>Lima</p>
                    <p><strong>Provincia :</strong>
                        <?php
                        $sql = "SELECT prov.nombre AS provincia FROM tbdistrito dis JOIN tbprovincia prov ON dis.idProvincia = prov.idProvincia JOIN tbinstitucioneducativa inst ON inst.idDistrito = dis.idDistrito WHERE inst.idInstitucionEducativa = '$cod';";
                        $f = mysqli_query($cn, $sql);
                        $r = mysqli_fetch_assoc($f);
                        if ($r) {
                            echo $r["provincia"];
                        } else {
                            echo '<span class="error-message">¡Actualiza tus datos!</span>';
                        }
                        ?>
                    </p>
                    <p><strong>Distrito :</strong>
                        <?php
                        $sql = "SELECT dis.nombre FROM tbdistrito dis JOIN tbinstitucioneducativa inst ON dis.idDistrito = inst.idDistrito WHERE inst.idInstitucionEducativa = $cod;";
                        $f = mysqli_query($cn, $sql);
                        $r = mysqli_fetch_assoc($f);
                        if ($r) {
                            echo $r["nombre"];
                        } else {
                            echo '<span class="error-message">¡Actualiza tus datos!</span>';
                        }
                        ?>
                    </p>
                </div>
            </div>
        <?php } elseif ($tabla === "PersonaIndividual") { ?>
            <div class="profile">
                <img src="<?php echo (file_exists($fotoPath)) ? $fotoPath : 'FotosPerfil/foto-porDefecto.png'; ?>" alt="Foto de perfil">
                <div class="profile-info">
                    <h2><?php echo $rPers["nombre"] . ' ' . $rPers["apellido"]; ?></h2>
                    <p><strong>Email :</strong><?php echo $rPers["correo"]; ?></p>
                    <p><strong>Nro. DNI :</strong><?php echo (!empty($rPers["dni"])) ? $rPers["dni"] : '<span class="error-message">¡Actualiza tus datos!</span>'; ?></p>
                    <p><strong>Edad :</strong><?php echo (!empty($rPers["edad"])) ? $rPers["edad"] : '<span class="error-message">¡Actualiza tus datos!</span>'; ?></p>
                    <p><strong>Departamento :</strong>Lima</p>
                    <p><strong>Provincia :</strong>
                        <?php
                        $sql = "SELECT prov.nombre AS provincia FROM tbdistrito dis JOIN tbprovincia prov ON dis.idProvincia = prov.idProvincia JOIN tbpersonaindividual pers ON pers.idDistrito = dis.idDistrito WHERE pers.idPersona = '$cod';";
                        $f = mysqli_query($cn, $sql);
                        $r = mysqli_fetch_assoc($f);
                        if ($r) {
                            echo $r["provincia"];
                        } else {
                            echo '<span class="error-message">¡Actualiza tus datos!</span>';
                        }
                        ?>
                    </p>
                    <p><strong>Distrito :</strong>
                        <?php
                        $sql = "SELECT dis.nombre FROM tbdistrito dis JOIN tbpersonaindividual tbpe ON dis.idDistrito = tbpe.idDistrito WHERE tbpe.idPersona = $cod;";
                        $f = mysqli_query($cn, $sql);
                        $r = mysqli_fetch_assoc($f);
                        if ($r) {
                            echo $r["nombre"];
                        } else {
                            echo '<span class="error-message">¡Actualiza tus datos!</span>';
                        }
                        ?>
                    </p>
                </div>
            </div>
        <?php } ?>
        <div class="btn-container">
            <a href="actualizar.php" class="btn">Editar</a>
            <a href="imagenperfil.php" class="btn">Cambiar foto</a>
        </div>
    </div>
</body>

</html>

<?php
include 'Include/footer.php'
?>