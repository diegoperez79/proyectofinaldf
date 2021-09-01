<?php 

include("bd.php");

if (isset($_POST['enviar'])) {
    $codcliente=$_POST['codcliente'];
    $nit=$_POST['nit'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $correo=$_POST['correo'];

    $query="INSERT INTO clientes (`codCliente`, `nit`, `nombre`, `apellido`, `direccion`) VALUES ('$codcliente','$nit','$nombre','$apellido','$correo')";
    $resultado=mysqli_query($conn, $query);
    if (!$resultado){
        die ("Error");
    }
    header("location:clientes.php");
}

?>