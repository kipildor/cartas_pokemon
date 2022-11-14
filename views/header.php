<!DOCTYPE html>
<html lang="en" style="font-size: 10px;">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartas de Pokemones</title>
    <?php require_once('config/config.php'); ?>
    
    <link rel="stylesheet" href="<?php echo FOLDER_PATH; ?>/views/css/normalize.css">
    <link rel="stylesheet" href="<?php echo FOLDER_PATH; ?>/views/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo FOLDER_PATH; ?>/views/css/style.css" >
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Cartas de Pokemon</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                <a class="nav-link" href="<?php echo FOLDER_PATH; ?>">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo FOLDER_PATH; ?>/buscarPokemon">Buscar Pokemones</a>
                </li>
                
            </ul>
            </div>
        </div>
    </nav>