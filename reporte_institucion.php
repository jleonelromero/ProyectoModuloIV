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
    <table class="styled-table">
        <tr>
            <th>Nombre</th>
            <th>Director</th>
            <th>Sugerencia</th>
            <th>Objetivo Estratégico</th>
        </tr>
        <?php
        $sql = "SELECT i.nombre AS nombre_institucion, i.direcResponsable AS director, s.descripcion AS comentario, 
                CASE s.tipo 
                    WHEN 1 THEN o.descripcion 
                    WHEN 2 THEN r.descripcion 
                    WHEN 3 THEN po.descripcion 
                    WHEN 4 THEN m.descripcion 
                END AS tipo_descripcion 
                FROM tbinstitucioneducativa i 
                INNER JOIN tbsugerencia s ON i.idinstitucioneducativa = s.idusuario 
                LEFT JOIN tbobjetivo o ON s.idTipo = o.idobjetivo AND s.tipo = 1 
                LEFT JOIN tbresultado r ON s.idTipo = r.idresultado AND s.tipo = 2 
                LEFT JOIN tbpolitica po ON s.idTipo = po.idpolitica AND s.tipo = 3 
                LEFT JOIN tbmedida m ON s.idTipo = m.idmedida AND s.tipo = 4 
                ORDER BY i.idinstitucioneducativa";
        $f = mysqli_query($cn, $sql);
        while ($r = mysqli_fetch_assoc($f)) {
            echo "<tr>";
            echo "<td>" . $r['nombre_institucion'] . "</td>";
            echo "<td>" . $r['director'] . "</td>";
            echo "<td>" . $r['comentario'] . "</td>";
            echo "<td>" . $r['tipo_descripcion'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>

<?php
include 'Include/footer.php'
?>