<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>inicio cargado</h1>

    <h2>Datos de inicio</h2>

    <?php
        var_dump($datos);

        $array = array (1,2,3,4);

        foreach ($array as $a) {
            echo("<ul>");
                echo("<li>" .$a. "</li>");
            echo("</ul>");
        }

    ?>

   

</body>
</html>