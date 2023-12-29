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
            <?php
            $sqlPxProv = "SELECT p.nombre AS provincia, COUNT(pei.idpersona) AS personas FROM tbprovincia p LEFT JOIN tbdistrito d ON p.idprovincia = d.idprovincia LEFT JOIN tbpersonaindividual pei ON d.iddistrito = pei.iddistrito GROUP BY p.nombre ORDER BY p.idprovincia";
            $fPxProv = mysqli_query($cn, $sqlPxProv);
            $sqlSxProv = "SELECT p.nombre AS provincia, COUNT(DISTINCT pei.idpersona) AS sugerencias FROM tbprovincia p LEFT JOIN tbdistrito d ON p.idprovincia = d.idprovincia LEFT JOIN tbpersonaindividual pei ON d.iddistrito = pei.iddistrito LEFT JOIN tbsugerencia s ON pei.idpersona = s.idusuario WHERE s.idusuario IS NOT NULL GROUP BY p.nombre ORDER BY p.idprovincia";
            $fSxProv = mysqli_query($cn, $sqlSxProv);
            while ($rPxProv = mysqli_fetch_assoc($fPxProv)) {
                echo '<td>N°</td>';
                echo '<td>Sug</td>';
            }
            ?>
            <td>N°</td>
            <td>Sug</td>
        </tr>
        <tr>
            <?php
            mysqli_data_seek($fPxProv, 0);
            $totalPersonas = 0;
            $totalSugerencias = 0;
            while ($rPxProv = mysqli_fetch_assoc($fPxProv)) {
                $totalPersonas += $rPxProv['personas'];
                echo '<td>' . $rPxProv['personas'] . '</td>';
                echo '<td>0</td>';
            }
            mysqli_data_seek($fSxProv, 0);
            while ($rSxProv = mysqli_fetch_assoc($fSxProv)) {
                $totalSugerencias += $rSxProv['sugerencias'];
            }
            echo '<td>' . $totalPersonas . '</td>';
            echo '<td>' . $totalSugerencias . '</td>';
            ?>
        </tr>
        <tr align="center">
            <td colspan="22">Cantidad de Instituciones en Provincias</td>
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
            <?php
            $sqlIxProv = "SELECT p.nombre AS provincia, COUNT(ie.idinstitucioneducativa) AS instituciones FROM tbprovincia p LEFT JOIN tbdistrito d ON p.idprovincia = d.idprovincia LEFT JOIN tbinstitucioneducativa ie ON d.iddistrito = ie.iddistrito GROUP BY p.nombre ORDER BY p.idprovincia";
            $fIxProv = mysqli_query($cn, $sqlIxProv);
            $sqlSxInst = "SELECT p.nombre AS provincia, COUNT(DISTINCT ie.idinstitucioneducativa) AS sugerencias FROM tbprovincia p LEFT JOIN tbdistrito d ON p.idprovincia = d.idprovincia LEFT JOIN tbinstitucioneducativa ie ON d.iddistrito = ie.iddistrito LEFT JOIN tbsugerencia s ON ie.idinstitucioneducativa = s.idusuario WHERE s.idusuario IS NOT NULL GROUP BY p.nombre ORDER BY p.idprovincia";
            $fSxInst = mysqli_query($cn, $sqlSxInst);
            while ($rIxProv = mysqli_fetch_assoc($fIxProv)) {
                echo '<td>N°</td>';
                echo '<td>Sug</td>';
            }
            ?>
            <td>N°</td>
            <td>Sug</td>
        </tr>
        <tr>
            <?php
            mysqli_data_seek($fIxProv, 0);
            $totalInstituciones = 0;
            $totalSugerencias = 0;
            while ($rIxProv = mysqli_fetch_assoc($fIxProv)) {
                $totalInstituciones += $rIxProv['instituciones'];
                echo '<td>' . $rIxProv['instituciones'] . '</td>';
                echo '<td>0</td>';
            }
            mysqli_data_seek($fSxInst, 0);
            while ($rSxInst = mysqli_fetch_assoc($fSxInst)) {
                $totalSugerencias += $rSxInst['sugerencias'];
            }
            echo '<td>' . $totalInstituciones . '</td>';
            echo '<td>' . $totalSugerencias . '</td>';
            ?>
        </tr>
        <tr align="center">
            <td colspan="22">Cantidad de Usuarios (Personas e Instituciones) en Provincias</td>
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
            <?php
            $sqlPxInst = "SELECT p.nombre AS provincia, COUNT(ie.idinstitucioneducativa) AS instituciones FROM tbprovincia p LEFT JOIN tbdistrito d ON p.idprovincia = d.idprovincia LEFT JOIN tbinstitucioneducativa ie ON d.iddistrito = ie.iddistrito GROUP BY p.nombre ORDER BY p.idprovincia";
            $fPxInst = mysqli_query($cn, $sqlPxInst);
            $sqlPxPer = "SELECT p.nombre AS provincia, COUNT(pei.idpersona) AS personas FROM tbprovincia p LEFT JOIN tbdistrito d ON p.idprovincia = d.idprovincia LEFT JOIN tbpersonaindividual pei ON d.iddistrito = pei.iddistrito GROUP BY p.nombre ORDER BY p.idprovincia";
            $fPxPer = mysqli_query($cn, $sqlPxPer);
            $sqlSxProv = "SELECT p.nombre AS provincia, COUNT(s.idusuario) AS sugerencias FROM tbprovincia p LEFT JOIN tbdistrito d ON p.idprovincia = d.idprovincia LEFT JOIN (SELECT idusuario FROM tbsugerencia WHERE idusuario IN (SELECT idinstitucioneducativa FROM tbinstitucioneducativa) OR idusuario IN (SELECT idpersona FROM tbpersonaindividual)) s ON d.iddistrito = s.idusuario WHERE s.idusuario IS NOT NULL GROUP BY p.nombre ORDER BY p.idprovincia";
            $fSxProv = mysqli_query($cn, $sqlSxProv);
            while ($rPxInst = mysqli_fetch_assoc($fPxInst)) {
                echo '<td>N°</td>';
                echo '<td>Sug</td>';
            }
            ?>
            <td>N°</td>
            <td>Sug</td>
        </tr>
        <tr>
            <?php
            mysqli_data_seek($fPxInst, 0);
            mysqli_data_seek($fPxPer, 0);
            $totalUsuarios = 0;
            $totalSugerencias = 0;
            while ($rPxInst = mysqli_fetch_assoc($fPxInst)) {
                $rPxPer = mysqli_fetch_assoc($fPxPer);
                $totalUsuarios += $rPxInst['instituciones'] + $rPxPer['personas'];
                echo '<td>' . ($rPxInst['instituciones'] + $rPxPer['personas']) . '</td>';
                echo '<td>0</td>';
            }
            mysqli_data_seek($fSxProv, 0);
            while ($rSxProv = mysqli_fetch_assoc($fSxProv)) {
                $totalSugerencias += $rSxProv['sugerencias'];
            }
            echo '<td>' . $totalUsuarios . '</td>';
            echo '<td>' . $totalSugerencias . '</td>';
            ?>
        </tr>
    </table>

</body>

</html>

<?php
include 'Include/footer.php'
?>