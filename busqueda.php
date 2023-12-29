<?php

include("Include/conexion.php");
include("Include/cabecera.php");


?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <title>Usuarios</title>
</head>
<br>
<div class="container is-fluid">




<div class="col-xs-12">
      <br>
		<h1>Lista de usuarios</h1>
    <br>
		<div>
    
		</div>
		<br>



    <div class="container-fluid">
  <!-- <form class="d-flex">
			<form action="" method="GET">
			<input class="form-control me-2" type="search" placeholder="Buscar con PHP" 
			name="busqueda"> <br>
			<button class="btn btn-outline-info" type="submit" name="enviar"> <b>Buscar </b> </button> 
			</form> -->
  </div>
  <?php
$where="";

if(isset($_GET['enviar'])){
  $busqueda = $_GET['busqueda'];


	if (isset($_GET['busqueda']))
	{
		$where="WHERE tbinstitucioneducativa.codInstitucion LIKE'%".$busqueda."%' OR nombre  LIKE'%".$busqueda."%'
    OR correo  LIKE'%".$busqueda."%'";
	}
  
}


?>

<!---busqueda de personas-->
<br>


</form>
<div class="container-fluid">
<form class="d-flex">
<input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
placeholder="Buscar  personas">
<hr>
</form>
</div>

<br>


<table class="table table-striped table-dark table_id ">

       <h1>Busqueda por personas</h1>
             <thead>    
             <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Numero de I.E</th>

            </tr>
            </thead>
            <tbody>

    <?php

$SQL="SELECT tbpersonaindividual.idPersona, tbpersonaindividual.nombre, tbpersonaindividual.apellido, tbpersonaindividual.dni
FROM tbpersonaindividual $where";
$dato = mysqli_query($cn, $SQL);

if($dato -> num_rows >0){
while($fila=mysqli_fetch_array($dato)){

?>
<tr>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['apellido']; ?></td>
<td><?php echo $fila['dni']; ?></td>




</tr>


<?php
}
}else{

?>
<tr class="text-center">
<td colspan="16">No existen registros</td>
</tr>


<?php

}

?>


<br>


			</form>
      <div class="container-fluid">
  <form class="d-flex">
      <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
      placeholder="Buscar  instituciones">
      <hr>
      </form>
  </div>

  <br>

 
      <table class="table table-striped table-dark table_id ">

                   
                         <thead>    
                         <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Numero de I.E</th>
         
                        </tr>
                        </thead>
                        <tbody>

				<?php

$SQL="SELECT tbinstitucioneducativa.idInstitucionEducativa, tbinstitucioneducativa.codInstitucion, tbinstitucioneducativa.correo, tbinstitucioneducativa.nombre
 FROM tbinstitucioneducativa $where";
$dato = mysqli_query($cn, $SQL);

if($dato -> num_rows >0){
    while($fila=mysqli_fetch_array($dato)){
    
?>
<tr>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['correo']; ?></td>
<td><?php echo $fila['codInstitucion']; ?></td>


</tr>


<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="16">No existen registros</td>
    </tr>

    
    <?php
    
}

?>


	</body>
  </table>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="js/buscador.js"></script>




</html>
<?php

include("Include/footer.php");


?>