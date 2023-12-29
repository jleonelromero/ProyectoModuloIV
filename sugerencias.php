<?php
include 'Include/conexion.php';
include 'Include/cabecera.php';
$cod = $_SESSION["usuario"];
$idObjetivo = isset($_GET['idObjetivo']) ? $_GET['idObjetivo'] : 1;
$sql = "SELECT o.descripcion AS objetivo, r.descripcion AS resultado, p.descripcion AS politica, m.descripcion AS medida 
        FROM tbobjetivo o 
        LEFT JOIN tbresultado r ON o.idobjetivo = r.idobjetivo 
        LEFT JOIN tbpolitica p ON r.idresultado = p.idresultado 
        LEFT JOIN tbmedida m ON p.idpolitica = m.idpolitica 
        WHERE o.idobjetivo = '$idObjetivo'";
$f = mysqli_query($cn, $sql);
$data = array();
while ($row = mysqli_fetch_assoc($f)) {
	$data[$row['objetivo']]['objetivo'] = $row['objetivo'];
	$data[$row['objetivo']]['resultados'][$row['resultado']]['resultado'] = $row['resultado'];
	$data[$row['objetivo']]['resultados'][$row['resultado']]['politicas'][$row['politica']][] = $row['medida'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>

<body>
	<h3>
		<center>Seleccione su objetivo estratégico</center>
	</h3>
	<table align="center">
		<tr>
			<th><button onclick="mostrarTabla('1')">1</button></th>
			<th><button onclick="mostrarTabla('2')">2</button></th>
			<th><button onclick="mostrarTabla('3')">3</button></th>
			<th><button onclick="mostrarTabla('4')">4</button></th>
			<th><button onclick="mostrarTabla('5')">5</button></th>
			<th><button onclick="mostrarTabla('6')">6</button></th>
		</tr>
	</table>
	<br>

	<!-- Tabla 1 -->
	<table border="1" id="1">
		<tr>
			<th>Objetivo</th>
			<th>Resultados</th>
			<th>Políticas</th>
			<th>Medidas</th>
		</tr>
		<?php
		foreach ($data as $objetivo) {
			echo "<tr>";
			echo "<td rowspan='" . count($objetivo['resultados']) . "'>" . $objetivo['objetivo'] . "</td>";
			$firstResult = true;
			foreach ($objetivo['resultados'] as $resultado) {
				if (!$firstResult) {
					echo "<tr>";
				}
				echo "<td>" . $resultado['resultado'] . "</td>";
				echo "<td>";
				$firstPolitica = true;
				foreach ($resultado['politicas'] as $politica => $medidas) {
					if (!$firstPolitica) {
						echo "<br>";
					}
					echo $politica . ": " . implode(", ", $medidas);
					$firstPolitica = false;
				}
				echo "</td>";
				echo "<td></td>";
				echo "</tr>";
				$firstResult = false;
			}
		}
		?>
	</table>
	<script src="js/sugerencias.js"></script>
</body>

</html>