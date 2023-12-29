<?php
include("Include/cabecera.php");
require_once 'Include/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/reporte.css">
</head>

<body>
    <table>
        <tr>
            <th colspan="4">Nombre</th>
        </tr>
        <tr>
            <?php
            $sql = "SELECT p.nombre AS nombre_persona, s.descripcion AS comentario, CASE s.tipo WHEN 1 THEN o.descripcion WHEN 2 THEN r.descripcion WHEN 3 THEN po.descripcion WHEN 4 THEN m.descripcion END AS tipo_descripcion FROM tbpersonaindividual p INNER JOIN tbsugerencia s ON p.idPersona = s.idusuario LEFT JOIN tbobjetivo o ON s.idTipo = o.idobjetivo AND s.tipo = 1 LEFT JOIN tbresultado r ON s.idTipo = r.idresultado AND s.tipo = 2 LEFT JOIN tbpolitica po ON s.idTipo = po.idpolitica AND s.tipo = 3 LEFT JOIN tbmedida m ON s.idTipo = m.idmedida AND s.tipo = 4 ORDER BY p.idPersona";
            $f = mysqli_query($cn, $sql);
            while ($r = mysqli_fetch_assoc($f)) {
                echo "<td colspan='4'>" . $r['nombre_persona'] . "</td>";
            }
            ?>
        </tr>
        <tr>
            <td colspan="2">Sugerencia</td>
            <td colspan="2">Descripción</td>
        </tr>
        <tr>
            <?php
            $f = mysqli_query($cn, $sql);
            while ($r = mysqli_fetch_assoc($f)) {
                echo "<td colspan='2'>" . $r['comentario'] . "</td>";
                echo "<td colspan='2'>" . $r['tipo_descripcion'] . "</td>";
            }
            ?>
        </tr>
    </table>
</body>

</html>

<?php
include 'Include/footer.php'
?>