<?php

$db_host="localhost";
$db_nombre="usuario";
$db_usuario="root";
$db_contra="";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if(mysqli_connect_error()){
    echo "La conexion fallo";
    exit();
}
mysqli_select_db($conexion,$db_nombre) or die ("No se encontro la base de datos");
?>