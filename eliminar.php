<?php 

include("bd.php");

if (isset($_GET['id'])){
$id=$_GET['id'];
$query="DELETE FROM clientes WHERE codcliente=$id";
$result=mysqli_query($conn, $query);
if (!$result) {
die("Error");
}
header("location:clientes.php");
}
?>