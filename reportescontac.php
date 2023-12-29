<?php
include("Include/conexion.php");
include("Include/cabecera.php");





?>
<br>
<br>
<center>


<table border="1">
    <!-- <thead>
        <tr><th colspan=2 style='text-align: center;'>Registrar Usuario</th></tr>
    </thead> -->
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>correo</th>
        <th>fecha</th>
        <th>Mensaje</th>
        <th>Motivo</th>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


        <th align="center">Opcion</th>
        <style>
            th{
                background-color: lightblue;
            }
            table{
                background-color: white;
                width: 900px;
                text-align: center;
                padding: 10px 10px 10px 10px;
            }
            .btn{
                border:  1px solid green;
                text-decoration: none;
                color: black;
                font-size:15px;
                color: white;
                background-color: green;
                border-radius: 2px;
                padding: 3px 4px;
            }
            td{
                padding: 10px;
            }
            .btn:visited{
                color: black;
                
            }
            .img{
                width: 40px;
            }
        </style>


    </tr>
    <?php
    $sql="select * from   tbconctacto  order by idcon ";
    $fila=mysqli_query($cn,$sql);
while ($r=mysqli_fetch_assoc($fila)) {
$arreglo = $r['idcon'] . ',' . $r['nombre'] . ',' . $r['correo'];


?>
<tr>
    <td><?php echo $r["nombre"]?></td>
    <td><?php echo $r["apellido"]?></td>
    <td><?php echo $r["correo"]?></td>
    <td><?php echo $r["fecha"]?></td>
    <td><?php echo $r["txt"]?></td>
    <td><?php echo $r["motivo"]?></td>




 
 <br>
 <br>

 <td>

 <button type="button" class="btn btn-outline-success"  data-bs-toggle="modal" data-bs-target="#responder" onclick="modificar('<?php echo $arreglo?>')">Responder</button>


 </td>


 
 </tr>

<?php


}


?>
</table>
</center>






<!---modal-->
<div class="modal fade" id="responder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enviar email a</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form id="form_">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label" >Nombre:</label>
            <h6 id="nombre_" name="nombre_" ></h1>

            <!-- <input type="text" class="form-control" id="nombre_" name="nombre_" > -->
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label" >correo:</label>
            <h6  id="correo_" name="correo_" ></h1>

            <!-- <input type="text" class="form-control" id="correo_" name="correo_" > -->

          </div>
          <div>
            <label  for="message-text" class="col-form-label" >Mensaje:</label>
            <textarea class="form-control" id="repuesta"  name="respuesta"></textarea>

          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="enviar_">Responder</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



<script type="text/javascript"  src="js/funciones2.js"> </script>

<?php
include("Include/footer.php");





?>