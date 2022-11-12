<?php
    //require_once '../../config/config.php';
    //define('URL', 'http://localhost/cartas_pokemon/');
    //require_once constant('URL').'views/header.php'; 
    //require_once 'http://localhost/cartas_pokemon/config/config.php';
?>


<!DOCTYPE html>
<html lang="es" style="font-size: 10px;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartas de Pokemones</title>
    <link rel="stylesheet" href="http://localhost/cartas_pokemon/views/css/normalize.css">
    <link rel="stylesheet" href="http://localhost/cartas_pokemon/views/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/cartas_pokemon/views/css/style.css" >
    <!--<link rel="stylesheet" href="<?php //echo constant('URL'); ?>views/css/default.css">-->
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
                <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Buscar Pokemon</a>
                </li>
                <!--
                <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
                </li>
                -->
            </ul>
            </div>
        </div>
    </nav>




    <div class="container text-center">
        <div class="tablero row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center">

<?php
        //include '../carta.php';
?>

<?php
        //include '../carta.php';
?>

<?php
        //include '../carta.php';
?>




        </div>
    </div>



        <!-- Remove the container if you want to extend the Footer to full width. -->
        <div class="container_ col-12">
        <!-- Footer -->
        <footer class="text-center text-lg-start text-white bg-dark">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4">
                    Kyosfera
                    </h6>
                    <p>
                    Esta página es parte de mi portfolio. En este caso consumimos la API de Pokeapi para obtener los datos del Pokemon.
                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4">Lenguajes</h6>
                    <p>
                        PHP
                    </p>
                    <!--
                    <p>
                    <a class="text-white">MDWordPress</a>
                    </p>
                    <p>
                    <a class="text-white">BrandFlow</a>
                    </p>
                    <p>
                    <a class="text-white">Bootstrap Angular</a>
                    </p>
                    -->
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4">
                    Enlaces útiles
                    </h6>
                    <p>
                    <a class="text-white" href="https://pokeapi.co/">Pokeapi</a>
                    </p>
                    <p>
                    <a class="text-white" href="https://www.linkedin.com/in/leandro-quipildor-791b6132/">My LinkedIn</a>
                    </p>
                    <!--
                    <p>
                    <a class="text-white">Shipping Rates</a>
                    </p>
                    <p>
                    <a class="text-white">Help</a>
                    </p>
                    -->
                </div>

                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4">Contacto</h6>
                    <p><i class="fas fa-home mr-3"></i> San Justo, Buenos Aires, Argentina</p>
                    <p><i class="fas fa-envelope mr-3"></i> leandro_1980@live.com.ar</p>
                    <p><i class="fas fa-phone mr-3"></i> Celular: 11 5592 9086</p>
                    <!--<p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>-->
                </div>
                <!-- Grid column -->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->

            <hr class="my-3">

            <!-- Section: Copyright -->
            <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                <!-- Grid column -->
                <div class="col-md-7 col-lg-8 text-center text-md-start">
                    <!-- Copyright -->
                    <div class="p-3">
                    © 2022 Copyright:
                    <a class="text-white" href="#"
                        >Kyosfera</a
                        >
                    </div>
                    <!-- Copyright -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end iconos-font-awe">
                    <!-- Facebook -->
                    <a
                    class="btn btn-outline-light btn-floating m-1"
                    class="text-white" target="_blank"
                    role="button" href="https://www.facebook.com/leandro.quipildor"
                    ><i class="fab fa-facebook-f"></i
                    ></a>

                    <!-- LinkedIn -->
                    <a
                    class="btn btn-outline-light btn-floating m-1"
                    class="text-white" target="_blank"
                    role="button" href="https://www.linkedin.com/in/leandro-quipildor-791b6132/"
                    ><i class="fa-brands fa-linkedin"></i></a>

                    <!-- Google -->
                    <a
                    class="btn btn-outline-light btn-floating m-1"
                    class="text-white" target="_blank"
                    role="button" href="https://wa.me/5491155929086?text=Hola,%20estoy%20viendo%20tu%20página%20que%20consume%20la%20PokeApi"
                    ><i class="fa-brands fa-whatsapp"></i></i
                    ></a>

                    <!-- Instagram -->
                    <a
                    class="btn btn-outline-light btn-floating m-1"
                    class="text-white" target="_blank"
                    role="button" href="https://www.instagram.com/leandroquipildor/"
                    ><i class="fab fa-instagram"></i
                    ></a>
                </div>
                <!-- Grid column -->
                </div>
            </section>
            <!-- Section: Copyright -->
            </div>
            <!-- Grid container -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- End of .container -->









        <script src="http://localhost/cartas_pokemon/views/js/bootstrap.bundle.min.js"></script>
        <script src="http://localhost/cartas_pokemon/views/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/55d8f7505d.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
        
    </body>

</html>
<?php //require_once '../footer.php'; ?>

