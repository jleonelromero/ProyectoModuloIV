<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.hide {
			display: none;
		}
	</style>
	<script>
		function mostrarTabla(id) {
			for (let i = 1; i <= 6; i++) {
				document.getElementById(i).classList.add('hide');
			}
			document.getElementById(id).classList.remove('hide');
		}
	</script>
</head>
<body>
	<h1><center>Seleccione su objetivo estrategico</center></h1>

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
	
	<!-- A un falta editar las tablas, solo esta la 1 -->

	<!-- Tabla 1 -->
	<table border="1" id="1">
		<tr>
			<th>OBJETIVOS (APROBADO EN HUAROCHIRÍ) 29-01-2009</th>
			<th>RESULTADOS (APROBADO EN CHANCAY) 27-02-2009</th>
			<th>POLÍTICAS EDUCATIVAS (APROBADO EN BARRANCA) 26-03-2009</th>
			<th>MEDIDAS (APROBADO EN SANTA MARÍA) 25-09-2009</th>
		</tr>
		<tr>
			<td rowspan="23">1. ASEGURAR una educación de calidad con equidad, innovadora, sin exclusión social que desarrolle plenamente las capacidades del estudiante con la participación activa y comprometida del docente y la sociedad.</td>
			<td rowspan="7">1.1 Universalización de la educación de calidad, con equidad, inclusión y alfabetización.</td>
			<td rowspan="3">1. Establecer universalidad al acceso obligatorio, gratuito y oportuno a una educación pública de calidad con equidad.</td>
			<td>1. Desarrollar programas de participación con municipalidades y entidades públicas y privadas, para fortalecer una educación pública de calidad con equidad.</td>
		</tr>
		<tr>
			<td>2. Establecer programas asistenciales en las áreas vulnerables.</td>
		</tr>
		<tr>
			<td>3. Ampliar la cobertura a los niños y niñas desde los 0 años, priorizando las zonas rurales y de pobreza extrema.</td>
		</tr>
		<tr>
			<td rowspan="2">2. garantizar la continuidad, inclusión, permanencia y culminación de los estudiantes de educación básica, priorizando las zonas vulnerables.</td>
			<td>1. Establecer programas de educación básica que respondan a la realidad del educando.</td>
		</tr>
		<tr>
			<td>2. Ampliar el servicio de educación básica alternativa con presencia del gobierno local.</td>
		</tr>
		<tr>
			<td rowspan="2">3. Erradicar el analfabetismo en la región, particularmente en la población rural y femenina a partir de una acción intersectorial</td>
			<td>1. Desarrollar permanentemente programas de alfabetización en zonas vulnerables. </td>
		</tr>
		<tr>
			<td>2. Celebrar convenios con gobiernos locales, mimdes y otros.</td>
		</tr>
		<tr>
			<td rowspan="5">1.2 Atención prioritaria y desarrollo de capacidades y habilidades de los estudiantes de la primera infancia.</td>
			<td rowspan="2">4. Asegurar la atención integral de los niños y niñas de 0-5 años en acción coordinada con los gobiernos locales y acción intersectorial.</td>
			<td>1. Ampliación del nivel inicial con presupuesto excedente de plaza vacante por racionalización de otros niveles, continuando con la conversión de los Pronoei a II.EE. de nivel inicial.</td>
		</tr>
		<tr>
			<td>2. Celebrar convenios con municipios, mimdes y otros para atención a programas.</td>
		</tr>
		<tr>
			<td rowspan="3">5. Garantizar el acceso, la cobertura y mejorar la calidad del servicio de la educación de niños menores de 6 años.</td>
			<td>1. Afianzamiento y sensibilización a pobladores y padres de familia sobre la importancia de la asistencia de niños y niñas al nivel inicial.</td>
		</tr>
		<tr>
			<td>2. Garantizar el apoyo alimentario a los niños de 0 a 6 años, en coordinación con otras instituciones.</td>
		</tr>
		<tr>
			<td>3. Fortalecer y gestionar la ampliación del presupuesto por resultados para garantizar el desarrollo de capacidades y habilidades en niños menores de 6 años.</td>
		</tr>
		<tr>
			<td rowspan="7">1.3 Desarrollo pleno de las capacidades fundamentales del estudiante de educación básica.</td>
			<td rowspan="2">6. Asegurar las condiciones esenciales para el aprendizaje de los estudiantes con calidad y equidad priorizando zona vulnerables.</td>
			<td>1. Implementar a las instituciones educativas con materiales y equipos de su necesidad y de acuerdo a su realidad.</td>
		</tr>
		<tr>
			<td>2. Desarrollar programas de tutoría y nivelación académica.</td>
		</tr>
		<tr>
			<td rowspan="3">7. Garantizar el logro de aprendizajes fundamentales para prevenir el fracaso escolar, con especial atención a las áreas de comunicación y matemática.</td>
			<td>1. Diseñar lineamientos de prevención del fracaso escolar en función de los aprendizajes significativos.</td>
		</tr>
		<tr>
			<td>2. Reforzar el plan lector en comprensión y análisis de textos y material bibliográfico.</td>
		</tr>
		<tr>
			<td>3. Promover el desarrollo de las capacidades matemáticas, comunicativas e investigativas.</td>
		</tr>
		<tr>
			<td rowspan="2">8. Asegurar la atención integral de los estudiantes en situación de vulnerabilidad y de riesgo aprovechando los recursos naturales e institucionales de la zona en coordinación multisectorial.</td>
			<td>1. Convenios con entidades públicas y privadas para el desarrollo de actividades y proyectos productivos y de gestión empresarial, aprovechando los recursos de la zona.</td>
		</tr>
		<tr>
			<td>2. Fortalecer programas de gestión empresarial de las instituciones con el apoyo y financiamiento de los organizadores.</td>
		</tr>
		<tr>
			<td rowspan="4">1.4 Fortalecimiento de capacidades de los docentes en formación en servicio para garantizar una educación de calidad.</td>
			<td rowspan="2">9. Capacitar al docente acorde a las políticas educativas regionales establecidas en el proyecto educativo regional.</td>
			<td>1. Elaborar e implementar un programa de capacitación docente articulado al plan regional de desarrollo de capacidades.</td>
		</tr>
		<tr>
			<td>2. Desarrollo de convenios con gobiernos locales y otras instituciones públicas y privadas, para capacitación de docentes.</td>
		</tr>
		<tr>
			<td rowspan="2">10. Promover la formación profesional y continua del docente en función a la demanda y necesidad educativa regional.</td>
			<td>1. Establecer convenios con las universidades e institutos pedagógicos para la formación de docentes de acuerdo a la demanda de la región.</td>
		</tr>
		<tr>
			<td>2. Implementar un programa de revalorización social y estímulos del docente.</td>
		</tr>
	</table>
	
	<!-- Tabla 2 -->
	<table border="1" id=2> 
		<tr>
			<th>OBJETIVOS (APROBADO EN HUAROCHIRÍ) 29-01-2009</th>
			<th>RESULTADOS (APROBADO EN CHANCAY) 27-02-2009</th>
			<th>POLÍTICAS EDUCATIVAS (APROBADO EN BARRANCA) 26-03-2009</th>
			<th>MEDIDAS (APROBADO EN SANTA MARÍA) 25-09-2009</th>
		</tr>
		<tr>
			<td rowspan="23">2. ASEGURAR una educación de calidad con equidad, innovadora, sin exclusión social que desarrolle plenamente las capacidades del estudiante con la participación activa y comprometida del docente y la sociedad.</td>
			<td rowspan="7">1.1 Universalización de la educación de calidad, con equidad, inclusión y alfabetización.</td>
			<td rowspan="3">1. Establecer universalidad al acceso obligatorio, gratuito y oportuno a una educación pública de calidad con equidad.</td>
			<td>1. Desarrollar programas de participación con municipalidades y entidades públicas y privadas, para fortalecer una educación pública de calidad con equidad.</td>
		</tr>
		<tr>
			<td>2. Establecer programas asistenciales en las áreas vulnerables.</td>
		</tr>
		<tr>
			<td>3. Ampliar la cobertura a los niños y niñas desde los 0 años, priorizando las zonas rurales y de pobreza extrema.</td>
		</tr>
		<tr>
			<td rowspan="2">2. garantizar la continuidad, inclusión, permanencia y culminación de los estudiantes de educación básica, priorizando las zonas vulnerables.</td>
			<td>1. Establecer programas de educación básica que respondan a la realidad del educando.</td>
		</tr>
		<tr>
			<td>2. Ampliar el servicio de educación básica alternativa con presencia del gobierno local.</td>
		</tr>
		<tr>
			<td rowspan="2">3. Erradicar el analfabetismo en la región, particularmente en la población rural y femenina a partir de una acción intersectorial</td>
			<td>1. Desarrollar permanentemente programas de alfabetización en zonas vulnerables. </td>
		</tr>
		<tr>
			<td>2. Celebrar convenios con gobiernos locales, mimdes y otros.</td>
		</tr>
		<tr>
			<td rowspan="5">1.2 Atención prioritaria y desarrollo de capacidades y habilidades de los estudiantes de la primera infancia.</td>
			<td rowspan="2">4. Asegurar la atención integral de los niños y niñas de 0-5 años en acción coordinada con los gobiernos locales y acción intersectorial.</td>
			<td>1. Ampliación del nivel inicial con presupuesto excedente de plaza vacante por racionalización de otros niveles, continuando con la conversión de los Pronoei a II.EE. de nivel inicial.</td>
		</tr>
		<tr>
			<td>2. Celebrar convenios con municipios, mimdes y otros para atención a programas.</td>
		</tr>
		<tr>
			<td rowspan="3">5. Garantizar el acceso, la cobertura y mejorar la calidad del servicio de la educación de niños menores de 6 años.</td>
			<td>1. Afianzamiento y sensibilización a pobladores y padres de familia sobre la importancia de la asistencia de niños y niñas al nivel inicial.</td>
		</tr>
		<tr>
			<td>2. Garantizar el apoyo alimentario a los niños de 0 a 6 años, en coordinación con otras instituciones.</td>
		</tr>
		<tr>
			<td>3. Fortalecer y gestionar la ampliación del presupuesto por resultados para garantizar el desarrollo de capacidades y habilidades en niños menores de 6 años.</td>
		</tr>
		<tr>
			<td rowspan="7">1.3 Desarrollo pleno de las capacidades fundamentales del estudiante de educación básica.</td>
			<td rowspan="2">6. Asegurar las condiciones esenciales para el aprendizaje de los estudiantes con calidad y equidad priorizando zona vulnerables.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td rowspan="3">7. Garantizar el logro de aprendizajes fundamentales para prevenir el fracaso escolar, con especial atención a las áreas de comunicación y matemática.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td rowspan="2">8. Asegurar la atención integral de los estudiantes en situación de vulnerabilidad y de riesgo aprovechando los recursos naturales e institucionales de la zona en coordinación multisectorial.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td rowspan="4">1.4 Fortalecimiento de capacidades de los docentes en formación en servicio para garantizar una educación de calidad.</td>
			<td rowspan="2">9. Capacitar al docente acorde a las políticas educativas regionales establecidas en el proyecto educativo regional.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td rowspan="2">10. Promover la formación profesional y continua del docente en función a la demanda y necesidad educativa regional.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
	</table>

	<!-- Tabla 3 -->
	<table border="1" id=3>
		<tr>
			<th>OBJETIVOS (APROBADO EN HUAROCHIRÍ) 29-01-2009</th>
			<th>RESULTADOS (APROBADO EN CHANCAY) 27-02-2009</th>
			<th>POLÍTICAS EDUCATIVAS (APROBADO EN BARRANCA) 26-03-2009</th>
			<th>MEDIDAS (APROBADO EN SANTA MARÍA) 25-09-2009</th>
		</tr>
		<tr>
			<td rowspan="23">2. ASEGURAR una educación de calidad con equidad, innovadora, sin exclusión social que desarrolle plenamente las capacidades del estudiante con la participación activa y comprometida del docente y la sociedad.</td>
			<td rowspan="7">1.1 Universalización de la educación de calidad, con equidad, inclusión y alfabetización.</td>
			<td rowspan="3">1. Establecer universalidad al acceso obligatorio, gratuito y oportuno a una educación pública de calidad con equidad.</td>
			<td>1. Desarrollar programas de participación con municipalidades y entidades públicas y privadas, para fortalecer una educación pública de calidad con equidad.</td>
		</tr>
		<tr>
			<td>2. Establecer programas asistenciales en las áreas vulnerables.</td>
		</tr>
		<tr>
			<td>3. Ampliar la cobertura a los niños y niñas desde los 0 años, priorizando las zonas rurales y de pobreza extrema.</td>
		</tr>
		<tr>
			<td rowspan="2">2. garantizar la continuidad, inclusión, permanencia y culminación de los estudiantes de educación básica, priorizando las zonas vulnerables.</td>
			<td>1. Establecer programas de educación básica que respondan a la realidad del educando.</td>
		</tr>
		<tr>
			<td>2. Ampliar el servicio de educación básica alternativa con presencia del gobierno local.</td>
		</tr>
		<tr>
			<td rowspan="2">3. Erradicar el analfabetismo en la región, particularmente en la población rural y femenina a partir de una acción intersectorial</td>
			<td>1. Desarrollar permanentemente programas de alfabetización en zonas vulnerables. </td>
		</tr>
		<tr>
			<td>2. Celebrar convenios con gobiernos locales, mimdes y otros.</td>
		</tr>
		<tr>
			<td rowspan="5">1.2 Atención prioritaria y desarrollo de capacidades y habilidades de los estudiantes de la primera infancia.</td>
			<td rowspan="2">4. Asegurar la atención integral de los niños y niñas de 0-5 años en acción coordinada con los gobiernos locales y acción intersectorial.</td>
			<td>1. Ampliación del nivel inicial con presupuesto excedente de plaza vacante por racionalización de otros niveles, continuando con la conversión de los Pronoei a II.EE. de nivel inicial.</td>
		</tr>
		<tr>
			<td>2. Celebrar convenios con municipios, mimdes y otros para atención a programas.</td>
		</tr>
		<tr>
			<td rowspan="3">5. Garantizar el acceso, la cobertura y mejorar la calidad del servicio de la educación de niños menores de 6 años.</td>
			<td>1. Afianzamiento y sensibilización a pobladores y padres de familia sobre la importancia de la asistencia de niños y niñas al nivel inicial.</td>
		</tr>
		<tr>
			<td>2. Garantizar el apoyo alimentario a los niños de 0 a 6 años, en coordinación con otras instituciones.</td>
		</tr>
		<tr>
			<td>3. Fortalecer y gestionar la ampliación del presupuesto por resultados para garantizar el desarrollo de capacidades y habilidades en niños menores de 6 años.</td>
		</tr>
		<tr>
			<td rowspan="7">1.3 Desarrollo pleno de las capacidades fundamentales del estudiante de educación básica.</td>
			<td rowspan="2">6. Asegurar las condiciones esenciales para el aprendizaje de los estudiantes con calidad y equidad priorizando zona vulnerables.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td rowspan="3">7. Garantizar el logro de aprendizajes fundamentales para prevenir el fracaso escolar, con especial atención a las áreas de comunicación y matemática.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td rowspan="2">8. Asegurar la atención integral de los estudiantes en situación de vulnerabilidad y de riesgo aprovechando los recursos naturales e institucionales de la zona en coordinación multisectorial.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td rowspan="4">1.4 Fortalecimiento de capacidades de los docentes en formación en servicio para garantizar una educación de calidad.</td>
			<td rowspan="2">9. Capacitar al docente acorde a las políticas educativas regionales establecidas en el proyecto educativo regional.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td rowspan="2">10. Promover la formación profesional y continua del docente en función a la demanda y necesidad educativa regional.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
	</table>

	<!-- Tabla 4 -->
	<table border="1" id=4>
		<tr>
			<th>OBJETIVOS (APROBADO EN HUAROCHIRÍ) 29-01-2009</th>
			<th>RESULTADOS (APROBADO EN CHANCAY) 27-02-2009</th>
			<th>POLÍTICAS EDUCATIVAS (APROBADO EN BARRANCA) 26-03-2009</th>
			<th>MEDIDAS (APROBADO EN SANTA MARÍA) 25-09-2009</th>
		</tr>
		<tr>
			<td rowspan="23">2. ASEGURAR una educación de calidad con equidad, innovadora, sin exclusión social que desarrolle plenamente las capacidades del estudiante con la participación activa y comprometida del docente y la sociedad.</td>
			<td rowspan="7">1.1 Universalización de la educación de calidad, con equidad, inclusión y alfabetización.</td>
			<td rowspan="3">1. Establecer universalidad al acceso obligatorio, gratuito y oportuno a una educación pública de calidad con equidad.</td>
			<td>1. Desarrollar programas de participación con municipalidades y entidades públicas y privadas, para fortalecer una educación pública de calidad con equidad.</td>
		</tr>
		<tr>
			<td>2. Establecer programas asistenciales en las áreas vulnerables.</td>
		</tr>
		<tr>
			<td>3. Ampliar la cobertura a los niños y niñas desde los 0 años, priorizando las zonas rurales y de pobreza extrema.</td>
		</tr>
		<tr>
			<td rowspan="2">2. garantizar la continuidad, inclusión, permanencia y culminación de los estudiantes de educación básica, priorizando las zonas vulnerables.</td>
			<td>1. Establecer programas de educación básica que respondan a la realidad del educando.</td>
		</tr>
		<tr>
			<td>2. Ampliar el servicio de educación básica alternativa con presencia del gobierno local.</td>
		</tr>
		<tr>
			<td rowspan="2">3. Erradicar el analfabetismo en la región, particularmente en la población rural y femenina a partir de una acción intersectorial</td>
			<td>1. Desarrollar permanentemente programas de alfabetización en zonas vulnerables. </td>
		</tr>
		<tr>
			<td>2. Celebrar convenios con gobiernos locales, mimdes y otros.</td>
		</tr>
		<tr>
			<td rowspan="5">1.2 Atención prioritaria y desarrollo de capacidades y habilidades de los estudiantes de la primera infancia.</td>
			<td rowspan="2">4. Asegurar la atención integral de los niños y niñas de 0-5 años en acción coordinada con los gobiernos locales y acción intersectorial.</td>
			<td>1. Ampliación del nivel inicial con presupuesto excedente de plaza vacante por racionalización de otros niveles, continuando con la conversión de los Pronoei a II.EE. de nivel inicial.</td>
		</tr>
		<tr>
			<td>2. Celebrar convenios con municipios, mimdes y otros para atención a programas.</td>
		</tr>
		<tr>
			<td rowspan="3">5. Garantizar el acceso, la cobertura y mejorar la calidad del servicio de la educación de niños menores de 6 años.</td>
			<td>1. Afianzamiento y sensibilización a pobladores y padres de familia sobre la importancia de la asistencia de niños y niñas al nivel inicial.</td>
		</tr>
		<tr>
			<td>2. Garantizar el apoyo alimentario a los niños de 0 a 6 años, en coordinación con otras instituciones.</td>
		</tr>
		<tr>
			<td>3. Fortalecer y gestionar la ampliación del presupuesto por resultados para garantizar el desarrollo de capacidades y habilidades en niños menores de 6 años.</td>
		</tr>
		<tr>
			<td rowspan="7">1.3 Desarrollo pleno de las capacidades fundamentales del estudiante de educación básica.</td>
			<td rowspan="2">6. Asegurar las condiciones esenciales para el aprendizaje de los estudiantes con calidad y equidad priorizando zona vulnerables.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td rowspan="3">7. Garantizar el logro de aprendizajes fundamentales para prevenir el fracaso escolar, con especial atención a las áreas de comunicación y matemática.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td rowspan="2">8. Asegurar la atención integral de los estudiantes en situación de vulnerabilidad y de riesgo aprovechando los recursos naturales e institucionales de la zona en coordinación multisectorial.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td rowspan="4">1.4 Fortalecimiento de capacidades de los docentes en formación en servicio para garantizar una educación de calidad.</td>
			<td rowspan="2">9. Capacitar al docente acorde a las políticas educativas regionales establecidas en el proyecto educativo regional.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td rowspan="2">10. Promover la formación profesional y continua del docente en función a la demanda y necesidad educativa regional.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
	</table>

	<!-- Tabla 5 -->
	<table border="1" id=5>
		<tr>
			<th>OBJETIVOS (APROBADO EN HUAROCHIRÍ) 29-01-2009</th>
			<th>RESULTADOS (APROBADO EN CHANCAY) 27-02-2009</th>
			<th>POLÍTICAS EDUCATIVAS (APROBADO EN BARRANCA) 26-03-2009</th>
			<th>MEDIDAS (APROBADO EN SANTA MARÍA) 25-09-2009</th>
		</tr>
		<tr>
			<td rowspan="23">2. ASEGURAR una educación de calidad con equidad, innovadora, sin exclusión social que desarrolle plenamente las capacidades del estudiante con la participación activa y comprometida del docente y la sociedad.</td>
			<td rowspan="7">1.1 Universalización de la educación de calidad, con equidad, inclusión y alfabetización.</td>
			<td rowspan="3">1. Establecer universalidad al acceso obligatorio, gratuito y oportuno a una educación pública de calidad con equidad.</td>
			<td>1. Desarrollar programas de participación con municipalidades y entidades públicas y privadas, para fortalecer una educación pública de calidad con equidad.</td>
		</tr>
		<tr>
			<td>2. Establecer programas asistenciales en las áreas vulnerables.</td>
		</tr>
		<tr>
			<td>3. Ampliar la cobertura a los niños y niñas desde los 0 años, priorizando las zonas rurales y de pobreza extrema.</td>
		</tr>
		<tr>
			<td rowspan="2">2. garantizar la continuidad, inclusión, permanencia y culminación de los estudiantes de educación básica, priorizando las zonas vulnerables.</td>
			<td>1. Establecer programas de educación básica que respondan a la realidad del educando.</td>
		</tr>
		<tr>
			<td>2. Ampliar el servicio de educación básica alternativa con presencia del gobierno local.</td>
		</tr>
		<tr>
			<td rowspan="2">3. Erradicar el analfabetismo en la región, particularmente en la población rural y femenina a partir de una acción intersectorial</td>
			<td>1. Desarrollar permanentemente programas de alfabetización en zonas vulnerables. </td>
		</tr>
		<tr>
			<td>2. Celebrar convenios con gobiernos locales, mimdes y otros.</td>
		</tr>
		<tr>
			<td rowspan="5">1.2 Atención prioritaria y desarrollo de capacidades y habilidades de los estudiantes de la primera infancia.</td>
			<td rowspan="2">4. Asegurar la atención integral de los niños y niñas de 0-5 años en acción coordinada con los gobiernos locales y acción intersectorial.</td>
			<td>1. Ampliación del nivel inicial con presupuesto excedente de plaza vacante por racionalización de otros niveles, continuando con la conversión de los Pronoei a II.EE. de nivel inicial.</td>
		</tr>
		<tr>
			<td>2. Celebrar convenios con municipios, mimdes y otros para atención a programas.</td>
		</tr>
		<tr>
			<td rowspan="3">5. Garantizar el acceso, la cobertura y mejorar la calidad del servicio de la educación de niños menores de 6 años.</td>
			<td>1. Afianzamiento y sensibilización a pobladores y padres de familia sobre la importancia de la asistencia de niños y niñas al nivel inicial.</td>
		</tr>
		<tr>
			<td>2. Garantizar el apoyo alimentario a los niños de 0 a 6 años, en coordinación con otras instituciones.</td>
		</tr>
		<tr>
			<td>3. Fortalecer y gestionar la ampliación del presupuesto por resultados para garantizar el desarrollo de capacidades y habilidades en niños menores de 6 años.</td>
		</tr>
		<tr>
			<td rowspan="7">1.3 Desarrollo pleno de las capacidades fundamentales del estudiante de educación básica.</td>
			<td rowspan="2">6. Asegurar las condiciones esenciales para el aprendizaje de los estudiantes con calidad y equidad priorizando zona vulnerables.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td rowspan="3">7. Garantizar el logro de aprendizajes fundamentales para prevenir el fracaso escolar, con especial atención a las áreas de comunicación y matemática.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td rowspan="2">8. Asegurar la atención integral de los estudiantes en situación de vulnerabilidad y de riesgo aprovechando los recursos naturales e institucionales de la zona en coordinación multisectorial.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td rowspan="4">1.4 Fortalecimiento de capacidades de los docentes en formación en servicio para garantizar una educación de calidad.</td>
			<td rowspan="2">9. Capacitar al docente acorde a las políticas educativas regionales establecidas en el proyecto educativo regional.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td rowspan="2">10. Promover la formación profesional y continua del docente en función a la demanda y necesidad educativa regional.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
	</table>

	<!-- Tabla 6 -->
		<table border="1" id=6>
		<tr>
			<th>OBJETIVOS (APROBADO EN HUAROCHIRÍ) 29-01-2009</th>
			<th>RESULTADOS (APROBADO EN CHANCAY) 27-02-2009</th>
			<th>POLÍTICAS EDUCATIVAS (APROBADO EN BARRANCA) 26-03-2009</th>
			<th>MEDIDAS (APROBADO EN SANTA MARÍA) 25-09-2009</th>
		</tr>
		
		<tr>
			<td rowspan="23">2. ASEGURAR una educación de calidad con equidad, innovadora, sin exclusión social que desarrolle plenamente las capacidades del estudiante con la participación activa y comprometida del docente y la sociedad.</td>
			<td rowspan="7">1.1 Universalización de la educación de calidad, con equidad, inclusión y alfabetización.</td>
			<td rowspan="3">1. Establecer universalidad al acceso obligatorio, gratuito y oportuno a una educación pública de calidad con equidad.</td>
			<td>1. Desarrollar programas de participación con municipalidades y entidades públicas y privadas, para fortalecer una educación pública de calidad con equidad.</td>
		</tr>
		<tr>
			<td>2. Establecer programas asistenciales en las áreas vulnerables.</td>
		</tr>
		<tr>
			<td>3. Ampliar la cobertura a los niños y niñas desde los 0 años, priorizando las zonas rurales y de pobreza extrema.</td>
		</tr>
		<tr>
			<td rowspan="2">2. garantizar la continuidad, inclusión, permanencia y culminación de los estudiantes de educación básica, priorizando las zonas vulnerables.</td>
			<td>1. Establecer programas de educación básica que respondan a la realidad del educando.</td>
		</tr>
		<tr>
			<td>2. Ampliar el servicio de educación básica alternativa con presencia del gobierno local.</td>
		</tr>
		<tr>
			<td rowspan="2">3. Erradicar el analfabetismo en la región, particularmente en la población rural y femenina a partir de una acción intersectorial</td>
			<td>1. Desarrollar permanentemente programas de alfabetización en zonas vulnerables. </td>
		</tr>
		<tr>
			<td>2. Celebrar convenios con gobiernos locales, mimdes y otros.</td>
		</tr>
		<tr>
			<td rowspan="5">1.2 Atención prioritaria y desarrollo de capacidades y habilidades de los estudiantes de la primera infancia.</td>
			<td rowspan="2">4. Asegurar la atención integral de los niños y niñas de 0-5 años en acción coordinada con los gobiernos locales y acción intersectorial.</td>
			<td>1. Ampliación del nivel inicial con presupuesto excedente de plaza vacante por racionalización de otros niveles, continuando con la conversión de los Pronoei a II.EE. de nivel inicial.</td>
		</tr>
		<tr>
			<td>2. Celebrar convenios con municipios, mimdes y otros para atención a programas.</td>
		</tr>
		<tr>
			<td rowspan="3">5. Garantizar el acceso, la cobertura y mejorar la calidad del servicio de la educación de niños menores de 6 años.</td>
			<td>1. Afianzamiento y sensibilización a pobladores y padres de familia sobre la importancia de la asistencia de niños y niñas al nivel inicial.</td>
		</tr>
		<tr>
			<td>2. Garantizar el apoyo alimentario a los niños de 0 a 6 años, en coordinación con otras instituciones.</td>
		</tr>
		<tr>
			<td>3. Fortalecer y gestionar la ampliación del presupuesto por resultados para garantizar el desarrollo de capacidades y habilidades en niños menores de 6 años.</td>
		</tr>
		<tr>
			<td rowspan="7">1.3 Desarrollo pleno de las capacidades fundamentales del estudiante de educación básica.</td>
			<td rowspan="2">6. Asegurar las condiciones esenciales para el aprendizaje de los estudiantes con calidad y equidad priorizando zona vulnerables.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td rowspan="3">7. Garantizar el logro de aprendizajes fundamentales para prevenir el fracaso escolar, con especial atención a las áreas de comunicación y matemática.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td rowspan="2">8. Asegurar la atención integral de los estudiantes en situación de vulnerabilidad y de riesgo aprovechando los recursos naturales e institucionales de la zona en coordinación multisectorial.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td rowspan="4">1.4 Fortalecimiento de capacidades de los docentes en formación en servicio para garantizar una educación de calidad.</td>
			<td rowspan="2">9. Capacitar al docente acorde a las políticas educativas regionales establecidas en el proyecto educativo regional.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td rowspan="2">10. Promover la formación profesional y continua del docente en función a la demanda y necesidad educativa regional.</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
	</table>

	<script>
		// Mostrar la tabla 1 por defecto al cargar la página
		mostrarTabla('1');
	</script>




</body>
</html>