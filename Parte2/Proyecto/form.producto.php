<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <title>Gestión de Productos - Actividad del Proyecto</title>
</head>
<body>
    <h1 class="titulo">GESTIÓN DE PRODUCTOS - ACTIVIDAD DEL PROYECTO</h1>
    <div class="main-content">
        <form class="form-tittle-row" method="post" action="insertarproducto.php">
            <div class="form-tittle-row">
                <h2>Agregar productos</h2>
            </div>

            <div class="form-row">
                <label for="id_productos">Código del producto</label>
                <input type="text" name="id_productos" id="id_productos" required>
            </div>

            <div class="form-row">
                <label for="seccion">Sección del producto (ferretería, juguetería, etc)</label>
                <input type="text" name="seccion" id="seccion" required>
            </div>

            <div class="form-row">
                <label for="producto">Nombre del producto</label>
                <input type="text" name="producto" id="producto" required>
            </div>

            <div class="form-row">
                <label for="origen">Origen del producto</label>
                <input type="text" name="origen" id="origen" required>
            </div>

            <div class="form-row">
                <label for="importado">¿Es importado?</label>
                <select name="importado" id="importado" required>
                    <option value="VERDADERO">VERDADERO</option>
                    <option value="FALSO">FALSO</option>
                </select>
            </div>

            <div class="form-row">
                <label for="precio">Precio del producto</label>
                <input type="text" name="precio" id="precio" required>
            </div>
            
            <div class="form-row">
                <input type="submit" name="enviar" id="enviar" value="Enviar">
                <input type="reset" name="borrar" id="borrar" value="Borrar datos del formulario">
            </div>
        </form>
    </div>
</body>
</html>
