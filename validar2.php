<?php

$usuario=$_GET['usuario'];
$contraseña=$_GET['contrasenia'];
if ($usuario=="admin" and $contraseña=="mensajes" ){
    header ("location:mensajes.php");
}else
{ 
 header ("location:clientes.php");  
   
}



?>