<?php include("bd.php");?>
<!doctype html>
<html lang="en">
  <head>
   <body background="imgs/w.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>MENSAJES</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><center>"Base de Datos pcc2021_evalfinal". Diego Francisco Perez Galeano  5to Baco."Proyecto Final"</center></a>
   

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        
       
        </li>
      </ul>


      
 <form action="busca_usuario.php" method="GET" class="d-flex">
      </form>
    </div>
  </div>
</nav>
<br><br>

 
<center><h1>MENSAJES RECIBIDOS</h1></center>
   <br>
<nav class=" bg-light">
 <center>
        <div class="btn-group w-100" role="group" aria-label="Basic example">
     <button type="button" class="btn btn-outline-warning"><a href="inicio.html" style="text-decoration: none;">INICIO</button></a>
        <button type="button" class="btn btn-outline-info"><a href="tienda.html" style="text-decoration: none;">TIENDAS</button></a>
        <button type="button" class="btn btn-outline-primary"><a href="clientes.php" style="text-decoration: none;">CONTÁCTENOS</button></a>
      </div>
    </center>
    </nav>
<br>

<form action="guardar.php" method="POST">
<div class="container">
  <div class="row">
    <div class="col-4">
</div>
<br>
      
</div>
<br>
<center>
</form>
</center>
<br>
<center>
  <form>
    <div class="col-8">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No-SMS</th>
      <th scope="col">Telefono</th>
      <th scope="col">Nombre</th>
      <th scope="col">Mensajes</th>
      <th scope="col">Correo Electronico</th>
      <th scope="col">Elimine SMS</th>
    </tr>
  </thead>
</center>
  <tbody>
<?php
$query="SELECT * FROM clientes";

$result=mysqli_query($conn, $query);
while ($row=mysqli_fetch_array($result)){
  ?>

<tr>
<td><?php echo $row ['codcliente']?></td>
<td><?php echo $row ['nit']?></td>
<td><?php echo $row ['nombre']?></td>
<td><?php echo $row ['apellido']?></td>
<td><?php echo $row ['direccion']?></td>
<td>
<a href="eliminar.php?id=<?php echo $row ['codcliente']?>   "class="btn btn-outline-success">  <img src="imgs/delete.png" width=20> </a>
</td>
</tr>
<?php } ?>
  </tbody>
</table>
    </div>
  </div>
  </form>
<br>
<br>
  <table class="table table-info table-striped">
    <thead>
      <tr>
        <th scope="col">PBX: 32428838  DIRECCION: 20 CALLE A 2-12 ZONA 21 GUATEMALA</th>
        <th scope="col">CARNE: 2017-40416</th>
        <th scope="col">NOMBRE: DIEGO FRANCISCO PEREZ GALEANO</th>
      </tr>
    </thead>
</table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>