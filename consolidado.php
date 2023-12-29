<?php
include("Include/cabecera.php");
require_once 'Include/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/consolidado.css">
</head>

<body>
    <table border="2">
        <?php
        $sqlTPer = "SELECT COUNT(*) AS personas FROM tbpersonaindividual";
        $fTPer = mysqli_query($cn, $sqlTPer);
        $rTPer = mysqli_fetch_assoc($fTPer);
        $sqlSPer = "SELECT COUNT(*) AS personas FROM tbsugerencia WHERE idUsuario IN (SELECT idpersona FROM tbpersonaindividual)";
        $fSPer = mysqli_query($cn, $sqlSPer);
        $rSPer = mysqli_fetch_assoc($fSPer);
        $sqlTIns = "SELECT COUNT(*) AS instituciones FROM tbinstitucioneducativa";
        $fTIns = mysqli_query($cn, $sqlTIns);
        $rTIns = mysqli_fetch_assoc($fTIns);
        $sqlSIns = "SELECT COUNT(*) AS instituciones FROM tbsugerencia WHERE idUsuario IN (SELECT idinstitucioneducativa FROM tbinstitucioneducativa)";
        $fSIns = mysqli_query($cn, $sqlSIns);
        $rSIns = mysqli_fetch_assoc($fSIns);
        $sqlTSug = "SELECT COUNT(*) AS sugerencias FROM tbsugerencia";
        $fTSug = mysqli_query($cn, $sqlTSug);
        $rTSug = mysqli_fetch_assoc($fTSug);
        ?>
        <tr align="center">
            <td colspan="4">Consolidado</td>
        </tr>
        <tr>
            <td>Total de Personas</td>
            <td><?php echo $rTPer['personas']; ?></td>
            <td>Total de Sugerencias x Personas</td>
            <td><?php echo $rSPer['personas']; ?></td>
        </tr>
        <tr>
            <td>Total de Instituciones</td>
            <td><?php echo $rTIns['instituciones']; ?></td>
            <td>Total de Sugerencias x Instituciones</td>
            <td><?php echo $rSIns['instituciones']; ?></td>
        </tr>
        <tr>
            <td>Total General</td>
            <td><?php echo $rTPer['personas'] + $rTIns['instituciones']; ?></td>
            <td>Total General de Sugerencias</td>
            <td><?php echo $rTSug['sugerencias']; ?></td>
        </tr>
    </table>
    <br>
    <table border="2">
        <tr align="center">
            <td colspan="22">Cantidad de Personas en Provincias</td>
        </tr>
        <tr>
            <?php
            $sql = "SELECT nombre FROM tbprovincia";
            $f = mysqli_query($cn, $sql);
            $provincias = mysqli_fetch_all($f, MYSQLI_ASSOC);
            foreach ($provincias as $provincia) {
                echo '<td colspan="2">' . $provincia['nombre'] . '</td>';
            }
            ?>
            <td colspan="2">Total</td>
        </tr>
        <tr>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
        </tr>
        <tr>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr align="center">
            <td colspan="22">Cantidad de Insituciones por Provincias</td>
        </tr>
        <tr>
            <?php
            $sql = "SELECT nombre FROM tbprovincia";
            $f = mysqli_query($cn, $sql);
            $provincias = mysqli_fetch_all($f, MYSQLI_ASSOC);
            foreach ($provincias as $provincia) {
                echo '<td colspan="2">' . $provincia['nombre'] . '</td>';
            }
            ?>
            <td colspan="2">Total</td>
        </tr>
        <tr>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>

        </tr>
        <tr>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr align="center">
            <td colspan="22">Cantidad Total por Provincias</td>
        </tr>
        <tr>
            <?php
            $sql = "SELECT nombre FROM tbprovincia";
            $f = mysqli_query($cn, $sql);
            $provincias = mysqli_fetch_all($f, MYSQLI_ASSOC);
            foreach ($provincias as $provincia) {
                echo '<td colspan="2">' . $provincia['nombre'] . '</td>';
            }
            ?>
            <td colspan="2">Total</td>
        </tr>
        <tr>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>
            <td>Nº</td>
            <td>Sug.</td>

        </tr>
        <tr>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>

    </table>

</body>

</html>

<?php
include 'Include/footer.php'
?>