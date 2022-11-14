
<?php
    require_once('views/header.php');
?>

    


    <div class="container text-center">

        <div class="container-md tablero row cont-form-busq">
            <div class="row justify-content-center">
                <!--<div class="col col-md-3 costado-busq"></div>-->
                
                <div class="form-busq col col-md-6">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Buscar Pokemon" aria-label="Buscar Pokemon" aria-describedby="buscar-poke">
                        <button class="btn btn-outline-secondary" type="button" id="buscar-poke">Buscar Pokemon</button>
                    </div>
                </div>
                
                <!--<div class="col col-md-3 costado-busq"></div>-->
            </div>
        </div>

        <div class="tablero row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center">


        

<?php
        include 'views/carta.php';
?>

<?php
        //include '../carta.php';
?>

<?php
        //include '../carta.php';
?>




        </div>
    </div>



<?php require_once ('views/footer.php'); ?>

