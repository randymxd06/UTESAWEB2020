<?php include_once "partes/parte_head.php" ?>

    <div class="container mt-1">
        <h1 style="text-align: center; background: darkgray"><p class="animate__fadeIn animate__animated animate__fast animate__delay-1s"><span style="color: rgb(66, 115, 184)">Bande</span><span style="color: white">ra Domi</span><span style="color: rgb(230, 46, 0)">nicana</span></p></h1>
    </div>

    <div class="container borde_bandera animate__fadeInDown animate__animated">

        <div class="row">
            <div class="col col-md-5 bg-primary color borde_bandera" onclick="window.location='azul.php'"></div>
            <div class="col col-md-2" onclick="window.location='blanco.php'"></div>
            <div class="col col-md-5 bg-danger color borde_bandera" onclick="window.location='rojo.php'"></div>
        </div>
        <div class="row">
            <div class="col blanco col-md-5" onclick="window.location='blanco.php'"></div>
            <div class="col blanco col-md-2 escudo" onclick="window.location='escudo.php'"></div>
            <div class="col blanco col-md-5" onclick="window.location='blanco.php'"></div>
        </div>
        <div class="row">
            <div class="col col-md-5 bg-danger color borde_bandera" onclick="window.location='rojo.php'"></div>
            <div class="col col-md-2" onclick="window.location='blanco.php'"></div>
            <div class="col col-md-5 bg-primary color borde_bandera" onclick="window.location='azul.php'"></div>
        </div>
        
    </div>

<?php include_once "partes/parte_footer.php" ?>