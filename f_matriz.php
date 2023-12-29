<?php
include 'Include/conexion.php';
include("modal/m_sugerencia.php");

$sql = "SELECT 
ob.descripcion AS ob_descripcion,
po.descripcion AS po_descripcion,
re.descripcion AS re_descripcion,
med.descripcion AS med_descripcion
from tbobjetivo ob, tbpolitica po, tbresultado re, tbmedida med;
";

// $sql2 = "SELECT
//     m.idMedida,
//     m.descripcion AS medida_descripcion,
//     o.idObjetivo,
//     o.descripcion AS objetivo_descripcion,
//     p.idPolitica,
//     p.descripcion AS politica_descripcion,
//     p.idResultado
// FROM
//     tbmedida m
// JOIN
//     tbpolitica p ON m.idPolitica = p.idPolitica
// JOIN
//     tbobjetivo o ON p.idResultado = o.idObjetivo;
// ";
$resultado = mysqli_query($cn, $sql);

?>

<table class="table table-bordered table-sm table-responsive-sm">
    <thead>
        <tr>
            <th>OBJETIVOS (APROBADO EN HUAROCHIRÍ) 29-01-2009</th>
            <th>RESULTADOS (APROBADO EN CHANCAY) 27-02-2009</th>
            <th>POLÍTICAS EDUCATIVAS (APROBADO EN BARRANCA) 26-03-2009</th>
            <th>MEDIDAS (APROBADO EN SANTA MARÍA) 25-09-2009</th>
        </tr>
    </thead>
    <tbody>
        <?php
         $objetivoAnterior = null;
        while ($fila = mysqli_fetch_assoc($resultado)) {
        ?>
            <tr>
                <td ><?php echo isset ($fila["ob_descripcion"]) ? $fila["ob_descripcion"] : '';?></td>
                <td><?php echo isset($fila["re_descripcion"]) ? $fila["re_descripcion"] : ''; ?></td>
                <td><?php echo isset($fila["po_descripcion"]) ? $fila["po_descripcion"] : ''; ?></td>
                <td><?php echo isset($fila["me_dedscripcion"]) ? $fila["med_descripcion"] : ''; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<h1>asdasdasd</h1>
