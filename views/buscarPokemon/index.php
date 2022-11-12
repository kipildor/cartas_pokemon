<?php
define('URL', 'http://localhost/poke04/');
?>


<!DOCTYPE html>
<html lang="es" style="font-size: 10px;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartas de Pokemones</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>views/css/normalize.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>views/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>views/css/style.css" >
    
</head>
<body>




<?php //require 'views/header.php'; ?>

    <div id="main">
        <h1 class="center">Sección de Consulta</h1>
        <div id="respuesta" class="center"></div>
        <div class="center"><?php //echo $this->mensaje; ?></div>

        <form action="" method="POST">

            <p>
                <label for="pokenum">N° de Pokemon</label><br>
                <input type="text" name="pokenum" id="" required>
            </p>
            <!--
            <p>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" id="" required>
            </p>
            <p>
                <label for="apellido">Apellido</label><br>
                <input type="text" name="apellido" id="" required>
            </p>
-->
            <p>
            <input type="submit" value="Buscar Pokemon">
            </p>

        </form>

        
        
    </div>


    <div class="container">
        <div class="card col-md-12">
            <div class="card_encabezado">
                <div class="card_encabezado_nombre">Charmander</div>
                <div class="card_encabezado_derecha">
                    <div class="card_encabezado_hp">60 HP</div>
                    <div class="card_encabezado_imgtipo">
                        <img src="./images/tipo_fuego.png" class="encabezado_imgtipo" alt="Imagen tipo fuego">
                    </div>
                </div>
            </div>

            <div class="container card_img_pokemon_contenedor">
                <!--<div class="card_img_pokemon_contenedor_2">-->
                    <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/4.png" 
                        alt="Charmander" class="card_img_pokemon">
                <!--</div>-->
            </div>

            <div class="card_contenedor_habilidades col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card_habilidad_individual col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card_habilidad_bloqueSup col-lg-12 col-md-12 col-sm-12 col-xs-12 row">
                        <div class="card_habilidad_nombre col-lg-10 col-md-10 col-sm-9 col-xs-8">
                            solar-power
                        </div>

                        <div class="card_habilidad_poder col-lg-2 col-md-2 col-sm-3 col-xs-4">
                            35
                        </div>
                    </div>

                    <div class="card_habilidad_descripcion col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        Si hay sol, baja los PS, pero <br> potencia el At. Esp.
                    </div>
                </div>

                <hr>

                <div class="card_habilidad_individual col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card_habilidad_bloqueSup col-lg-12 col-md-12 col-sm-12 col-xs-12 row">
                        <div class="card_habilidad_nombre col-lg-10 col-md-10 col-sm-9 col-xs-8">
                            solar-power
                        </div>

                        <div class="card_habilidad_poder col-lg-2 col-md-2 col-sm-3 col-xs-4">
                            35
                        </div>
                    </div>

                    <div class="card_habilidad_descripcion col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        Si hay sol, baja los PS, pero <br> potencia el At. Esp.
                    </div>
                </div>

            </div>

        </div>
    </div>


<?php //require 'views/footer.php'; ?>

<div id="footer">
            © Kyosfera 2022
        </div>

        <script src="<?php echo constant('URL'); ?>views/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo constant('URL'); ?>views/js/bootstrap.min.js"></script>
        
    </body>

</html>