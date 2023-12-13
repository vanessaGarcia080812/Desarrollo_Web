<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies actividad</title>
</head>
<body>
    <?php
    if (isset($_COOKIE["micoquis"])) {
        echo $_COOKIE["micoquis"]."<br>";
    }else {
        echo "Lo siento, usted no ha creado una cookies";
    }
    ?>
</body>
</html>