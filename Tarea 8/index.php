    <?php include_once "partes/parte_head.php" ?>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Galería
                    <small>Fotos subidas por nuestros usuarios</small>
                </h1>
            </div>
        </div>

        <div class="row">

            <?php 
            
            $files = scandir("images");

            foreach($files as $file){

                $ruta = "images/{$file}";
                
                if(is_file($ruta)){
                    echo "
                        <div class='col-md-3 portfolio-item'>
                            <a href='detalle.php?f={$file}'>
                                <img style='height: 150px; width: 300px' class='img-responsive' src='{$ruta}' alt='image'>
                            </a>
                        </div>
                        ";
                }
                
            }
            
            ?>

        </div>

        <?php include_once "partes/parte_footer.php" ?>