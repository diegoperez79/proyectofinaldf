<?php

$usuario=$_GET['usuario'];
$contraseña=$_GET['contrasenia'];
if ($usuario=="admin" and $contraseña=="mensajes" ){
    header ("location:inicio.html");
}else{
    echo '<script language=javascript>';
    echo 'alert("Usuario o Contraseña incorrecta")';
    echo '</script>';
}

?>