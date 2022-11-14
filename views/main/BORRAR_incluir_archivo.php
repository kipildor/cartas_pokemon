<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina 2 incluida</h1>
    <p>
        <?php
            //include '../../config/incluir_archivo_config.php';
            //include ('localhost/cartas_pokemon/config/incluir_archivo_config.php');
            echo __FILE__;
            echo __DIR__;
        ?>
    </p>
</body>
</html>