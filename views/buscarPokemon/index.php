
<?php
    require_once('views/header.php');
    //$benja2 = "mon";
?>

    


    <div class="container text-center">

        <div class="container-md tablero row cont-form-busq">
            <div class="row justify-content-center">
                <!--<div class="col col-md-3 costado-busq"></div>-->
                
                <div class="form-busq col col-md-6">
                    <form action="<?php echo FOLDER_PATH; ?>/buscarPokemon" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Buscar Pokemon (Hasta el <?php echo CANT_POKE; ?>)" aria-label="Buscar Pokemon" aria-describedby="poke" name="poke">
                            <button class="btn btn-outline-secondary" type="submit" id="poke">Buscar Pokemon</button>
                        </div>
                    </form>
                </div>
                
                <!--<div class="col col-md-3 costado-busq"></div>-->
            </div>
        </div>

        <div class="tablero row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center">
        <!--<h1><?php //echo $pokemonRecibido->getNombre(); ?></h1>-->

        

<?php
        include 'views/carta.php';
?>

<?php
        //include '../carta.php';
        //print_r($pokemonRecibido->tipos());
?>

<?php
        //include '../carta.php';
?>




        </div>
    </div>



<?php require_once ('views/footer.php'); ?>

