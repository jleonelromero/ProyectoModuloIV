<?php
include("Include/auth.php");
include("Include/conexion.php");
include("Include/cabecera.php");
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
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/actualizar.css">
</head>

<body>
    <form action="p_actualizar.php" method="post">
        <?php if ($tabla === "InstitucionEducativa") { ?>
            <fieldset id="actualizar">
                <label>1.- Codigo de la I.E.</label>
                <input type="text" name="txtcodigo" value="<?php echo $rInst["codInstitucion"]; ?>" required>
                <label>2.- Nombre de la Institución Educativa (*):</label>
                <input type="text" name="txtnombre" value="<?php echo $rInst["nombre"]; ?>" required>
                <label>3.- Director(a) Responsable</label>
                <input type="text" name="txtdirector" value="<?php echo $rInst["direcResponsable"]; ?>" required>
                <label>4.- Numero de personas de la comunidad educativa que participan (*):</label>
                <label>Nro. de Alumnos</label>
                <input type="text" name="txtalumnos" value="<?php echo $rInst["numAlumnos"]; ?>" required>
                <label>Nro. de Docentes</label>
                <input type="text" name="txtdocentes" value="<?php echo $rInst["numDocentes"]; ?>" required>
                <label>Nro. de Administrativos</label>
                <input type="text" name="txtadministrativos" value="<?php echo $rInst["numAdministrativos"]; ?>" required>
                <label>Departamento :</label>
                <input type="text" name="txtdepartamento" value="Lima" disabled>
                <label>Provincia (*):</label>
                <select name="lprovincias" class="selector" id="provincia" required>
                    <option value="" disabled selected>Elige tu provincia</option>
                    <?php
                    $sql = "SELECT * FROM tbprovincia";
                    $f = mysqli_query($cn, $sql);
                    while ($r = mysqli_fetch_array($f)) {
                    ?>
                        <option value="<?php echo $r["idProvincia"] ?>"><?php echo $r["nombre"]; ?></option>
                    <?php
                    }
                    ?>
                </select>
                <label>Distrito (*):</label>
                <select name="ldistritos" class="selector" id="distrito"></select>
                <input type="submit" class="btn-actualizar" value="Actualizar tus datos">
            </fieldset>
        <?php } elseif ($tabla === "PersonaIndividual") { ?>
            <fieldset id="actualizar">
                <label>Nombres (*):</label>
                <input type="text" name="txtnombres" value="<?php echo $rPers["nombre"]; ?>" required>
                <label>Apellidos (*):</label>
                <input type="text" name="txtapellidos" value="<?php echo $rPers["apellido"]; ?>" required>
                <label>Edad (*):</label>
                <input type="text" name="txtedad" value="<?php echo $rPers["edad"]; ?>" required>
                <label>Nro. DNI (*):</label>
                <input type="text" name="txtdni" value="<?php echo $rPers["dni"]; ?>" maxlength="8" minlength="8" required>
                <label>Departamento :</label>
                <input type="text" name="txtdepartamento" value="Lima" disabled>
                <label>Provincia a la que perteneces (*):</label>
                <select name="lprovincias" class="selector" id="provincia" required>
                    <option value="" disabled selected>Elige tu provincia</option>
                    <?php
                    $sql = "SELECT * FROM tbprovincia";
                    $f = mysqli_query($cn, $sql);
                    while ($r = mysqli_fetch_array($f)) {
                    ?>
                        <option value="<?php echo $r["idProvincia"] ?>"><?php echo $r["nombre"]; ?></option>
                    <?php
                    }
                    ?>
                </select>
                <label>Distrito (*):</label>
                <select name="ldistritos" class="selector" id="distrito"></select>
                <input type="submit" class="btn-actualizar" value="Actualizar tus datos">
            </fieldset>
        <?php } ?>
    </form>
    <script src="js/actualizar.js"></script>
</body>

</html>
<?php

include 'Include/footer.php';
?>