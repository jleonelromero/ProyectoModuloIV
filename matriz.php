<?php
include 'Include/conexion.php';
include 'Include/cabecera.php';
$cod = $_SESSION["usuario"];
$idObjetivo = isset($_GET['idObjetivo']) ? $_GET['idObjetivo'] : 1;
$sql = "SELECT o.idobjetivo, o.descripcion AS objetivo, r.idresultado, r.descripcion AS resultado, p.idpolitica, p.descripcion AS politica, m.idmedida, m.descripcion AS medida 
        FROM tbobjetivo o 
        LEFT JOIN tbresultado r ON o.idobjetivo = r.idobjetivo 
        LEFT JOIN tbpolitica p ON r.idresultado = p.idresultado 
        LEFT JOIN tbmedida m ON p.idpolitica = m.idpolitica 
        WHERE o.idobjetivo = '$idObjetivo'";
$f = mysqli_query($cn, $sql);
$data = array();
while ($row = mysqli_fetch_assoc($f)) {
	$data[$row['objetivo']]['idObjetivo'] = $row['idobjetivo'];
	$data[$row['objetivo']]['objetivo'] = $row['objetivo'];
	$data[$row['objetivo']]['resultados'][$row['resultado']]['idResultado'] = $row['idresultado'];
	$data[$row['objetivo']]['resultados'][$row['resultado']]['resultado'] = $row['resultado'];
	$data[$row['objetivo']]['resultados'][$row['resultado']]['politicas'][$row['politica']]['idPolitica'] = $row['idpolitica'];
	$data[$row['objetivo']]['resultados'][$row['resultado']]['politicas'][$row['politica']]['politica'] = $row['politica'];
	$data[$row['objetivo']]['resultados'][$row['resultado']]['politicas'][$row['politica']]['medidas'][$row['medida']]['idMedida'] = $row['idmedida'];
	$data[$row['objetivo']]['resultados'][$row['resultado']]['politicas'][$row['politica']]['medidas'][$row['medida']]['medida'] = $row['medida'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="css/sugerencias.css">
</head>

<body>
	<h3>
		<center>Seleccione su objetivo estratégico</center>
	</h3>
	<div class="button-container">
		<button onclick="mostrarTabla('1')">1</button>
		<button onclick="mostrarTabla('2')">2</button>
		<button onclick="mostrarTabla('3')">3</button>
		<button onclick="mostrarTabla('4')">4</button>
		<button onclick="mostrarTabla('5')">5</button>
		<button onclick="mostrarTabla('6')">6</button>
	</div>
	<br>

	<!-- Tabla 1 -->
	<table border="1">
		<tr class="encabezado">
			<th>OBJETIVOS (APROBADO EN HUAROCHIRÍ) 29-01-2009</th>
			<th>RESULTADOS (APROBADO EN CHANCAY) 27-02-2009</th>
			<th>POLÍTICAS EDUCATIVAS (APROBADO EN BARRANCA) 26-03-2009</th>
			<th>MEDIDAS (APROBADO EN SANTA MARÍA) 25-09-2009</th>
		</tr>
		<?php
		foreach ($data as $objetivo) {
			$firstObjetivo = true;
			foreach ($objetivo['resultados'] as $resultado) {
				$firstResult = true;
				foreach ($resultado['politicas'] as $politica => $medidas) {
					echo "<tr>";
					if ($firstObjetivo) {
						echo "<td rowspan='23'><a href='sugerencia.php?idObjetivo={$objetivo['idObjetivo']}'><img src='img/edit_text.png' width='27' alt=''></a><a href='sugerencia.php?idObjetivo={$objetivo['idObjetivo']}'> " . $objetivo['objetivo'] . "</a></td>";
						$firstObjetivo = false;
					}
					if ($firstResult) {
						echo "<td rowspan='" . count($resultado['politicas']) . "'><a href='sugerencia.php?idResultado={$resultado['idResultado']}'><img src='img/edit_text.png' width='27' alt=''></a><a href='sugerencia.php?idResultado={$resultado['idResultado']}'> " . $resultado['resultado'] . "</a></td>";
						$firstResult = false;
					}
					echo "<td><a href='sugerencia.php?idPolitica={$medidas['idPolitica']}'><img src='img/edit_text.png' width='27' alt=''></a><a href='sugerencia.php?idPolitica={$medidas['idPolitica']}'> $politica:</a></td>";
					echo "<td>";
					foreach ($medidas['medidas'] as $medida) {
						echo "<ul>";
						echo "<li><a href='sugerencia.php?idMedida={$medida['idMedida']}'><img src='img/edit_text.png' width='27' alt=''></a><a href='sugerencia.php?idMedida={$medida['idMedida']}'> {$medida['medida']}</a></li>";
						echo "</ul>";
					}
					echo "</td>";
					echo "</tr>";
				}
			}
		}
		?>
	</table>
	<script src="js/sugerencias.js"></script>
</body>

</html>

<?php
include 'Include/footer.php'
?>