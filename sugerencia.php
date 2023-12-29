<?php
include("Include/auth.php");
include("Include/conexion.php");
include("Include/cabecera.php");
$cod = $_SESSION["usuario"];
$idObjetivo = isset($_GET['idObjetivo']) ? $_GET['idObjetivo'] : null;
$idResultado = isset($_GET['idResultado']) ? $_GET['idResultado'] : null;
$idPolitica = isset($_GET['idPolitica']) ? $_GET['idPolitica'] : null;
$idMedida = isset($_GET['idMedida']) ? $_GET['idMedida'] : null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/sugerencia.css">
</head>

<body>
    <h3>Dejanos una Sugerencia :</h3>
    <fieldset>
        <?php
        $tipo = '';
        $objetivo = '';
        $resultado = '';
        $politica = '';
        $medida = '';
        if ($idObjetivo) {
            $sql = "SELECT descripcion FROM tbobjetivo WHERE idobjetivo = $idObjetivo";
            $f = mysqli_query($cn, $sql);
            $r = mysqli_fetch_assoc($f);
            $objetivo = $r['descripcion'];
            $tipo = 1;
        } else if ($idResultado) {
            $sql = "SELECT descripcion FROM tbresultado WHERE idresultado = $idResultado";
            $f = mysqli_query($cn, $sql);
            $r = mysqli_fetch_assoc($f);
            $resultado = $r['descripcion'];
            $tipo = 2;
        } else if ($idPolitica) {
            $sql = "SELECT descripcion FROM tbpolitica WHERE idpolitica = $idPolitica";
            $f = mysqli_query($cn, $sql);
            $r = mysqli_fetch_assoc($f);
            $politica = $r['descripcion'];
            $tipo = 3;
        } else if ($idMedida) {
            $sql = "SELECT descripcion FROM tbmedida WHERE idmedida = $idMedida";
            $f = mysqli_query($cn, $sql);
            $r = mysqli_fetch_assoc($f);
            $medida = $r['descripcion'];
            $tipo = 4;
        }

        if ($idObjetivo) { ?>
            <legend>Objetivo :</legend>
            <p><?php echo $objetivo; ?></p>
        <?php } else if ($idResultado) { ?>
            <legend>Resultado :</legend>
            <p><?php echo $resultado; ?></p>
        <?php } else if ($idPolitica) { ?>
            <legend>Política :</legend>
            <p><?php echo $politica; ?></p>
        <?php } else if ($idMedida) { ?>
            <legend>Medida :</legend>
            <p><?php echo $medida; ?></p>
        <?php } ?>
        <form action="p_sugerencia.php" method="post">
            <input type="hidden" name="idtipo" value="<?php echo $idObjetivo ?? $idResultado ?? $idPolitica ?? $idMedida; ?>">
            <input type="hidden" name="tipo" value="<?php echo $tipo; ?>">
            <label for="sugerencia">Sugerencia :</label><br>
            <textarea id="sugerencia" name="txtsugerencia" rows="4" cols="50"></textarea><br><br>
            <input type="submit" value="Enviar Sugerencia">
        </form>
    </fieldset>
</body>

</html>

<?php
include("Include/footer.php");
?>