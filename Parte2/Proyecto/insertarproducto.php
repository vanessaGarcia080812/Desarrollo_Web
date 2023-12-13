<?php
$id = $_POST["id_productos"];
$sec = $_POST["seccion"];
$prod = $_POST["producto"];
$org = $_POST["origen"];
$imp = $_POST["importado"];
$prec = $_POST["precio"];

require("conexion.php");

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

if (mysqli_connect_errno()) {
    echo "LA CONEXION FALLO";
    exit();
}

mysqli_select_db($conexion, $db_nombre) or die("No se encontro la base de datos");

$consulta = "INSERT INTO productos (id_productos, seccion, producto, origen, importado, precio) 
VALUES ('$id', '$sec', '$prod', '$org', '$imp', '$prec')";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado == false) {
    echo "Error de ejecucion: " . mysqli_error($conexion);
} else {
    echo "El producto fue almacenado con los siguientes Datos: <br><br>";
    echo "id_productos: " . "$id" . "<br>";
    echo "seccion: " . "$sec" . "<br>";
    echo "producto: " . "$prod" . "<br>";
    echo "origen: " . "$org" . "<br>";
    echo "importado: " . "$imp" . "<br>";
    echo "precio: " . "$prec" . "<br>";
}

mysqli_close($conexion);
?>
