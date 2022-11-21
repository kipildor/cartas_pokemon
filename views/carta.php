
            <div class="contenedor-card_ col justify-content-center">
                <div class="card" style="background-image: '<?php echo FOLDER_PATH; ?>/views/images/marmol_violeta.jpg';">
                    
                    <div class="card_encabezado">
                        <div class="card_encabezado_nombre"><?php echo $pokemonRecibido->getNombre(); ?></div>
                        <div class="card_encabezado_derecha">
                            <div class="card_encabezado_hp"><?php echo $pokemonRecibido->getHp(); ?> HP</div>
                            
<?php
    foreach($pokemonRecibido->getTipos() as $filaTipo){

                            echo'<div class="card_encabezado_imgtipo">
                                <img src="'. FOLDER_PATH . $filaTipo->getUrlImgTipo() .'" class="encabezado_imgtipo" alt="Imagen tipo '.$filaTipo->getDescripcion().'">
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
                        
<?php
    $contadorDeAtaques = 0;
    if($pokemonRecibido->getAtaque_1()->getIdAtaque() > 0){
                    echo '<div class="card_habilidad_individual col-12">
                            <div class="card_habilidad_bloqueSup col-12 row">
                                <div class="card_habilidad_nombre col-10 col-sm-9 col-xs-8">' .
                                    $pokemonRecibido->getAtaque_1()->getNombre() .
                                '</div>

                                <div class="card_habilidad_poder col-2 col-sm-3 col-xs-4">
                                    35
                                </div>
                            </div>

                            <div class="card_habilidad_descripcion col-12">' .
                                $pokemonRecibido->getAtaque_1()->getDescripcion() .
                            '</div>
                        </div>';
        $contadorDeAtaques++;
    }

    if($pokemonRecibido->getAtaque_2()->getIdAtaque() > 0){

        if($contadorDeAtaques > 0){
            echo '<hr>';
        }
                    echo '<div class="card_habilidad_individual col-12">
                            <div class="card_habilidad_bloqueSup col-12 row">
                                <div class="card_habilidad_nombre col-10 col-sm-9 col-xs-8">' .
                                    $pokemonRecibido->getAtaque_2()->getNombre() .
                                '</div>

                                <div class="card_habilidad_poder col-2 col-sm-3 col-xs-4">
                                    35
                                </div>
                            </div>

                            <div class="card_habilidad_descripcion col-12">' .
                                $pokemonRecibido->getAtaque_2()->getDescripcion() .
                            '</div>
                        </div>';
        $contadorDeAtaques++;
    }

?>

                    </div>

                </div>
            </div>

