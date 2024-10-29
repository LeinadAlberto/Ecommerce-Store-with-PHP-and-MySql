<?php 

/* =========================================
        DATOS DE LAS REDES SOCIALES 
=========================================== */
$url = "socials";
$method = "GET";
$fields = array(); 

$socials = CurlController::request($url, $method, $fields);

if ($socials->status == 200) {

    $socials = $socials->results;

}

?>

<div class="container-fluid topColor">

    <div class="container">

        <div class="d-flex justify-content-between">

            <!-- Enlaces de Redes Sociales -->
            <div class="p-2">

                <div class="d-flex justify-content-center">

                    <?php foreach ($socials as $key => $value): ?>

                        <div class="p-2">

                            <a href="<?php echo $value->url_social; ?>" target="_blank">

                                <i class="<?php echo $value->icon_social; ?> <?php echo $value->color_social; ?>"></i>

                            </a>

                        </div>

                    <?php endforeach ?>

                </div><!-- /.d-flex -->

            </div><!-- /.p-2 -->

            <!-- Enlaces de Ingresar y Crear cuenta -->
            <div class="p-2 small">

                <div class="d-flex justify-content-center">

                    <div class="p-2">

                        <a href="#" class="text-white">

                            Ingresar

                        </a>

                    </div>

                    <div class="p-2">

                        |

                    </div>

                    <div class="p-2">

                        <a href="#" class="text-white">

                            Crear cuenta

                        </a>

                    </div>

                </div>

            </div>

        </div><!-- /.d-flex -->

    </div><!-- /.container -->

</div>