
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vann</title>
</head>
<body>
    <?php
    require("conexion.php");

    echo "<table>";
    echo "<tr><th> ID PRODUCTO </th>";
    echo "<th> SECCION </th>";
    echo "<th> PRODUCTO </th>";
    echo "<th> ORIGEN </th>";
    echo "<th> IMPORTADO </th>";
    echo "<th> PRECIO </th></tr>";

    $resultado = mysqli_query($conexion, "SELECT * FROM productos");
    while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
        echo "<td>".$fila['id_productos']."</td>";
        echo "<td>".$fila['seccion']."</td>";
        echo "<td>".$fila['producto']."</td>";
        echo "<td>".$fila['origen']."</td>";
        echo "<td>".$fila['importado']."</td>";
        echo "<td>".$fila['precio']."</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
</body>
</html>