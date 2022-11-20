
            <div class="contenedor-card_ col justify-content-center">
                <div class="card">
                    
                    <div class="card_encabezado">
                        <div class="card_encabezado_nombre"><?php echo $pokemonRecibido->getNombre(); ?></div>
                        <div class="card_encabezado_derecha">
                            <div class="card_encabezado_hp"><?php echo $pokemonRecibido->getHp(); ?> HP</div>
                            
<?php
    foreach($pokemonRecibido->getTipos() as $filaTipo){

                            echo'<div class="card_encabezado_imgtipo">
                                <img src="'. FOLDER_PATH . $filaTipo->getUrlImgTipo() .'" class="encabezado_imgtipo" alt="Imagen tipo fuego">
                            </div>';
                            
    }
?>
                        </div>
                    </div>

                    <div class="container card_img_pokemon_contenedor">
                        <div class="card_img_pokemon_contenedor_2">
                           <img src="<?php echo $pokemonRecibido->getUrlImg(); ?>" 
                                alt="<?php echo $pokemonRecibido->getNombre(); ?>" class="card_img_pokemon">
                        </div>
                    </div>

                    <div class="card_contenedor_habilidades col-12">
                        <div class="card_habilidad_individual col-12">
                            <div class="card_habilidad_bloqueSup col-12 row">
                                <div class="card_habilidad_nombre col-10 col-sm-9 col-xs-8">
                                    solar-power
                                </div>

                                <div class="card_habilidad_poder col-2 col-sm-3 col-xs-4">
                                    35
                                </div>
                            </div>

                            <div class="card_habilidad_descripcion col-12">
                                Si hay sol, baja los PS, pero <br> potencia el At. Esp.
                            </div>
                        </div>

                        <hr>

                        <div class="card_habilidad_individual col-12">
                            <div class="card_habilidad_bloqueSup col-12 row">
                                <div class="card_habilidad_nombre col-10 col-sm-9 col-xs-8">
                                    solar-power
                                </div>

                                <div class="card_habilidad_poder col-2 col-sm-3 col-xs-4">
                                    35
                                </div>
                            </div>

                            <div class="card_habilidad_descripcion col-12">
                                Si hay sol, baja los PS, pero <br> potencia el At. Esp.
                            </div>
                        </div>

                    </div>

                </div>
            </div>

