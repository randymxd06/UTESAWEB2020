<!-- Nombre del título de la página -->
<?php $pagina = "Página Principal" ?>

<?php include_once "partes/partes_head.php" ?>



<!-- Este container es para centrar la página -->
<div class="container">

    <!-- Este row es para contener el menú y el contenido de las páginas -->
    <div class="row mt-3 mr-5" >

        <?php include_once "partes/partes_menu.php" ?>

        <!-- Este col es para mostrar el contenido de las páginas -->
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">

            <div class="container animate__fadeInDown animate__animated">

                <div class="row">
                    <div title="Recinto Mao" class="col col-md-4"><a href="mao.php"><img class="w-100" style="border-radius: 9px; border-style: solid; border-color: black" src="images/mao.jpg" alt="Foto Mao"></a></div>
                    <div class="col col-md-4"></div>
                    <div title="Recinto Moca" class="col col-md-4"><a href="moca.php"><img class="w-100" style="border-radius: 9px; border-style: solid; border-color: black" src="images/moca.jpg" alt="Foto Moca"></a></div>
                </div>

                <div class="row">
                    <div class="col col-md-4"></div>
                    <div title="Recinto Santiago de los Caballeros" class="col col-md-4"><a href="santiago.php"><img class="w-100" style="border-radius: 9px; border-style: solid; border-color: black" src="images/santiago.jpg" alt="Foto Santiago"></a></div>
                    <div class="col col-md-4"></div>
                </div>

                <div class="row">
                    <div title="Recinto Santo Domingo" class="col col-md-4"><a href="santo_domingo.php"><img class="w-100" style="border-radius: 9px; border-style: solid; border-color: black" src="images/santo_domingo.jpg" alt="Foto Santo Domingo"></a></div>
                    <div class="col col-md-4"></div>
                    <div title="Recinto Puerto Plata" class="col col-md-4"><a href="puerto_plata.php"><img class="w-100" style="border-radius: 9px; border-style: solid; border-color: black" src="images/puerto_plata.jpg" alt="Foto Puerto Plata"></a></div>
                </div>

            </div>

        </div>

        <div class="col-md-1">

        </div>

    </div>

</div>





<?php include_once "partes/partes_footer.php" ?>