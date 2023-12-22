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
	
	<!-- A un falta editar las tablas, Falta 3 y 4 -->

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
		<td rowspan="16">2. Garantizar una formación ciudadana crítica, creativa, autónoma, emprendedora y propositiva, que permita la realización individual y social a partir del desarrollo integral del estudiante con una sólida identidad local, regional y nacional</td>
		<td rowspan="7">2.1 Formación analítica, creativa, autónoma y emprendedora con un diseño curricular diversificado y contextualizado.</td>
		<td>11. elaborar e implementar lineamientos de política educativa regional.</td>
		<td>1. Diseño de los lineamientos de política educativa para la diversificación curricular regional.</td>
	</tr>
	<tr>
		<td rowspan="3">12. Fomentar un diseño curricular inclusivo, con enfoque intercultural, bilingüe, diversificado y participativo de acuerdo  al entorno local, regional y de manera participativa.</td>
		<td>1. desarrollar programas de socialización y sensibilización de la aplicación de los lineamientos de política educativa regional.</td>
	</tr>
	<tr>
		<td>2. fortalecer las redes educativas para lograr en las instituciones educativas la aplicación adecuada del diseño curricular debidamente contextualizado y diversificado.</td>
	</tr>
	<tr>
		<td>3. desarrollar programas de capacitación docente para la formulación, aplicación y seguimiento de los diseños curriculares diversificados.</td>
	</tr>
	<tr>
		<td rowspan="3">13. Promoción del desarrollo integral basado en capacidades, actitudes, habilidades, destrezas deportivas y valores de los estudiantes de acuerdo  a la realidad sociocultural, avance de la ciencia y la tecnología, la biodiversidad  y a los ejes de desarrollo local y regional y nacional.</td>
		<td>1. Difusión a través de los medios de comunicación (televisiva, radial) de la promoción de desarrollo integral de los estudiantes en el marco de la realidad local, regional y nacional.</td>
	</tr>
	<tr>
		<td>2. Creación de espacios educativos culturales y deportivos a través de los recursos del estado y el sector privado y otros.</td>
	</tr>
	<tr>
		<td>3. Propiciar convenios con universidades e institutos para la integración educativa.</td>
	</tr>
	<tr>
		<td rowspan="7">2.2. Ciudadanos líderes y comprometidos con el desarrollo personal y social de la región ejerciendo sus derechos y deberes.</td>
		<td rowspan="3">14. Impulso  de una manera  creativa y sostenida de una educación en democracia  que favorezca integración, cohesión social y gobernabilidad.</td>
		<td>1. Formación docente en enfoques y estrategias metodológicas de educación para la democracia.</td>
	</tr>
	<tr>
		<td>2. Propiciar la articulación institucional pública y cívica para el fomento de valores y buenas prácticas ciudadanas.</td>
	</tr>
	<tr>
		<td>3. Insertar en el proceso educativo contenidos para el desarrollo de liderazgo, autoestima y vocación emprendedora.</td>
	</tr>
	<tr>
		<td rowspan="4">15. Creación de espacios y mecanismos de participación de los educandos para fortalecer el ejercicio de los derechos y deberes, identidad e integración local y regional.</td>
		<td>Fortalecer y crear espacios de participación de los educandos para el ejercicio de sus derechos y deberes (municipios escolares, Conei y otros).</td>
	</tr>
	<tr>
		<td>2. Promover la participación de los educandos en concursos escolares.</td>
	</tr>
	<tr>
		<td>3. Desarrollar, fomentar y difundir el arte y la cultura nacional, regional y local.</td>
	</tr>
	<tr>
		<td>4. Celebrar convenios con instituciones públicas y privadas para fortalecer la participación de los educandos para el ejercicio ciudadano.</td>
	</tr>
	<tr>
		<td rowspan="2">2.3. sociedad promotora de la identidad local y regional.</td>
		<td rowspan="2">16. Fomentar el turismo, programas y proyectos educativos que reafirmen y consoliden la identidad local y regional, revalorando  las manifestaciones y patrimonio cultural.</td>
		<td>1. Fomentar redes interinstitucionales locales, provinciales y regional para promover y difundir el turismo y construir la identidad local y regional, revalorando las manifestaciones y patrimonio cultural.</td>
	</tr>
	<tr>
		<td>2. Promover y difundir las potencialidades turísticas y culturales de la region.</td>
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
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
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
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
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
		<td rowspan="7">5. Lograr ciudadanos que demuestren en la práctica la valoración, el respeto a la biodiversidad y medio ambiente como parte del ecosistema en que vivimos.</td>
		<td rowspan="7">5.1 Ciudadanos responsables que conservan y preservan el medio ambiente y la defensa de la biodiversidad.</td>
		<td rowspan="4">26. promover permanentemente una conciencia ambiental inculcando un comportamiento adecuado y responsable en el uso de los recursos naturales.</td>
		<td>1. Creación de espacios especializados como medios de difusión de zonas de alto riesgo de contaminación y deterioro del medio ambiente.</td>
	</tr>
	<tr>
		<td>2. Programa de capacitación continua en conservación y defensa del medio ambiente a nivel de alumnos, docentes, población y autoridades.</td>
	</tr>
	<tr>
		<td>3. Coordinar con las entidades públicas y privadas para comprometerlos en la difusión y defensa del medio ambiente. </td>
	</tr>
	<tr>
		<td>4. Incorporar en los lineamientos de política educativa de diversificación curricular regional que los proyectos curriculares de centro de instituciones educativas consideren capacidades, conocimientos, actitudes y valores de conciencia ambiental y uso responsable de los recursos naturales.</td>
	</tr>
	<tr>
		<td rowspan="2">27. conservar, valorar, proteger y respetar los recursos naturales de la región promoviendo con los gobiernos locales y organismos correspondientes la defensa de la biodiversidad.</td>
		<td>1. Materializar convenios y/o programas estratégicos multisectoriales que involucren centros de investigación ecológica, círculos y/o redes educativas y comunales ambientales, funcionamiento de redes de reciclaje a nivel local e instituciones educativas.</td>
	</tr>
	<tr>
		<td>2. Desarrollar programas y proyectos de conservación, valoración, protección de la defensa del medio ambiente y biodiversidad.</td>
	</tr>
	<tr>
		<td>28. Promover escuelas ecológicas que desarrollen una educación ambiental.</td>
		<td>1. Promover e implementar escuelas ecológicas gestoras de proyectos de innovación e investigación para la conservación del medio ambiente.</td>
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
		<td rowspan="7">6. Impulsar una educación productiva y empresarial para el desarrollo sostenible de la región</td>
		<td rowspan="4">6.1 Educación generadora de competencias emprendedoras, productivas y empresariales para el desarrollo local y regional.</td>
		<td rowspan="2">29. Formar técnicos competentes, desarrollando capacidades laborales en respuesta a las demandas socio-económico-culturales local, regional y nacional</td>
		<td>1. Contribuir en la elaboración de una currícula de formación técnica con orientación de competencias productivas.</td>
	</tr>
	<tr>
		<td>2. Desarrollar programas de capacitación para técnicos de la educación productiva.</td>
	</tr>
	<tr>
		<td rowspan="2">30. Educación superior ligada a la formación de estudiantes con visión de generar empresas que permitirán elevar los niveles de vida y reducir la tasa de pobreza en el ámbito de la región lima provincias.</td>
		<td>1. Promover la formación de estudiantes emprendendores con visión empresarial.</td>
	</tr>
	<tr>
		<td>2. Elaborar, gestionar y desarrollar proyectos productivos.</td>
	</tr>
	<tr>
		<td rowspan="3">6.2 Instituciones superiores formadoras de profesionales competentes y comprometidos con la investigación e innovación en la ciencia y tecnología.</td>
		<td rowspan="2">31. Articular las actividades ocupacionales con las instituciones de educación superior no universitarias, incrementando el financiamiento y promoviendo la investigación e innovación.</td>
		<td>1. Desarrollar pasantías entre instituciones de educación superior no universitarias.</td>
	</tr>
	<tr>
		<td>2. Implementar aulas innovadoras para que los educandos investiguen.</td>
	</tr>
	<tr>
		<td>32. Priorizar las inversiones en equipamiento de las instituciones educativas con medidas pertinentes.</td>
		<td>1. Gestionar la emisión de ordenanzas regionales que aprueben la inversión en las instituciones educativas para su equipamiento.</td>
	</tr>
</table>

	<script>
		// Mostrar la tabla 1 por defecto al cargar la página
		mostrarTabla('1');
	</script>




</body>
</html>