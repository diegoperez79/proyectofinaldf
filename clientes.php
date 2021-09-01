<?php include("bd.php");?>
<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Clientes</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">"BASE DE DATOS pcc2021_evalfinal. DIEGO FRANCISCO PEREZ GALEANO 5to Baco. PROYECTO FINAL DFPG"</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <body style="background-color: hsla(0, 100%, 49%, 0.548)">

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        
       
        </li>
      </ul>



      
 <form action="busca_usuario.php" method="GET" class="d-flex">
    <input class="form-control me-sm-2" type="text" placeholder="Buscar" name="busqueda" id="busqueda">
       <input type="submit" class="btn btn-secondary my-2 my-sm-0" value="Buscar">
      </form>
    </div>
  </div>
</nav>
<br><br>
<nav class=" bg-light">
 <center>
        <div class="btn-group w-100" role="group" aria-label="Basic example">
     <button type="button" class="btn btn-outline-warning"><a href="inicio.html" style="text-decoration: none;">INICIO</button></a>
        <button type="button" class="btn btn-outline-info"><a href="tienda.html" style="text-decoration: none;">TIENDAS</button></a>
        <button type="button" class="btn btn-outline-primary"><a href="mensajes.php" style="text-decoration: none;">MENSAJES</button></a>
      </div>
    </center>
  </nav>
<br><br>
 <br>
<center><h1>CONTACTENOS</h1></center>
   <br>
<form action="guardar.php" method="POST">
<div class="container">
  <div class="row">
    <div class="col-4">
</div>
<br>
      <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="codcliente" name="codcliente">
  <label for="floatingInput">No_Cliente</label>
</br>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="nit" name="nit">
  <label for="floatingInput">Telefono</label>
<br>
<div class="form-floating">
  <input type="text" class="form-control" id="floatingPassword" placeholder="nombre"  name="nombre">
  <label for="floatingPassword">Nombre</label>
</div>
<br>
<div class="form-floating">
  <input type="text" class="form-control" id="floatingPassword" placeholder="apellido" name="apellido">
  <label for="floatingPassword">Mensajes</label>
</div>
<br>
<div class="form-floating">
  <input type="email" class="form-control" id="floatingPassword" placeholder="correo" name="correo">
  <label for="floatingPassword">Correo Electronico</label>
</div>
</div>
<br>
<center>
<input type="submit" class="btn btn-danger" name="enviar">
</form>
</center>

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