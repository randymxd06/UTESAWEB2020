<?php

if ($_POST) {

    $foto = $_FILES['foto'];
    $rnd = rand(0, 9999999999);

    if ($foto['error'] == 0) {
        move_uploaded_file($foto['tmp_name'], "images/{$rnd}.jpg");
        $datos = $_POST;
        file_put_contents("datos/{$rnd}.txt", serialize($datos));
    }
}

include_once "partes/parte_head.php"

?>

<h3>Formulario para subir imagenes</h3>

<form action="" method="post" enctype="multipart/form-data">

    <div class="row">

        <div class="col-md-6">
                
            <div style="margin-top: 10px;">
                <span class="lead">Foto:</span>
                <input class="form-control" type="file" name="foto" id="foto" required>
            </div>

            <div style="margin-top: 10px;">
                <span class="lead">Nombre:</span>
                <input class="form-control" type="text" name="nombre" id="nombre" required>
            </div>

            <div style="margin-top: 10px;">
                <span class="lead">Teléfono:</span>
                <input class="form-control" type="text" name="telefono" id="telefono" required>
            </div>

            <div style="margin-top: 10px;">
                <span class="lead">Comentario:</span>
                <textarea class="form-control" name="comentario" id="comentario" required></textarea>
            </div>

            <button style="margin-top: 10px;" type="submit" class="btn btn-lg btn-secondary">Guardar</button>

        </div>

    </div>

</form>


<?php include_once "partes/parte_footer.php" ?>