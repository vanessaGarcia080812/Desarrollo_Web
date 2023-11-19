<?php
$mibusqueda=isset($_GET["buscar"]);
$mipagina=$_SERVER["PHP_SELF"]; 
function ejecutar_consulta($laconsulta){
   include("conexion.php");
   $consulta= mysqli_query($conexion,"SELECT * FROM productos WHERE producto LIKE '%$laconsulta%'");
?>
         <!DOCTYPE html>
         <html lang="en">
         <head>
         <section>Datos encontrados</section>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title></title>
         </head>
         <body>
         <?php
         echo "<table>";
               echo "<tr><th>ID_PRODUCTO</th>";
               echo "<th>SECCION</th>";
               echo "<th>PRODUCTO</th>";
               echo "<th>ORIGEN</th>";
               echo "<th>IMPORTADO</th>";
               echo "<th>PRECIO</th></tr>";

            while ($fila = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
               echo "<tr>";
               echo "<td>".$fila['id_productos']."</td>";
               echo "<td>".$fila['seccion']."</td>";
               echo "<td>".$fila['producto']."</td>";
               echo "<td>".$fila['origen']."</td>";
               echo "<td>".$fila['importado']."</td>";
               echo "<td>".$fila['precio']."</td>";
               echo "</tr>";
               ?>
         </body>
         </html>
<?php
}
}

if($mibusqueda!=NULL){
   ejecutar_consulta($mibusqueda);
}else 
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>vann</title>
</head>
<body>
   <section>Busqueda producto por nombre </section>

<form class="form-search" method='get' action="<?php echo $mipagina; ?>">
   <label>Buscar:<input type='text' name= 'buscar'></label>
   <input type='submit' name='search' value='Enviar'>
   </form>
</body>
</html>

<?php 
}
?>