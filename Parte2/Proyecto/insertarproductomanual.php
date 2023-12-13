<?php
require ("conexion.php");

$conexion= mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if (mysqli_connect_errno()){
    echo "LA CONEXION FALLO"; 
    exit (); 
}

mysqli_select_db($conexion,$db_nombre) or die ("lo siento no se encontro la base de datos");

$consulta= "INSERT INTO productos (id_productos, seccion, producto, origen, importado, precio) 
VALUES ('ar50', 'JUGUETERIA', 'balon ', 'Brasil', 'VERDADERO', 80000)"; 

$resultado=mysqli_query($conexion,$consulta);

mysqli_close($conexion);

?>