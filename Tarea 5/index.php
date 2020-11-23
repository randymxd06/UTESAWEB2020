<?php
$info = json_encode($_POST);

if (!is_dir('datos')) {
    mkdir('datos');
}

$t = time();
file_put_contents("datos/{$t}.dat", $info);
?>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <title>Página Principal</title>
</head>

<body>

    <div class="container">

        <form method="post">

            <table>

                <div class="row mt-3">

                    <div class="col-md-6">
                        <label class="lead" for="nombre"><b>Nombre:</b></label>
                        <input title="Aquí se escribe tu nombre" class="form-control" type="text" name="nombre" placeholder="Escribe tu nombre" required>
                    </div>

                    <div class="col-md-6">
                        <label class="lead" for="apellido"><b>Apellido:</b></label>
                        <input title="Aquí se escribe tu apellido" class="form-control" type="text" name="apellido" placeholder="Escribe tu apellido" required>
                    </div>

                </div>

                <div class="row mt-3">

                    <div class="col-md-6">
                        <label class="lead" for="cedula"><b>Cédula:</b></label>
                        <input title="Aquí va tu cédula, sólo se permiten 11 caracteres, escribelo sin guiones (-), Ejemplo: 40211052582" class="form-control" type="text" name="cedula" maxlength="11" placeholder="Escribe tu cédula" required>
                    </div>

                    <div class="col-md-6">
                        <label class="lead" for="direccion"><b>Dirección:</b></label>
                        <input title="Aquí se escribe tu dirección, Ejemplo: Villa Olimpica, Santiago de los Caballeros" class="form-control" type="text" name="direccion" placeholder="Escribe tu dirección" required>
                    </div>

                </div>

                <div class="row mt-3">

                    <div class="col-md-6">
                        <label class="lead" for="fechaNacimiento"><b>Fecha de Nacimiento:</b></label>
                        <input title="Aquí se escribe tu fecha de nacimiento, tambien puedes elegirlo, Ejemplo: 08/11/1999" class="form-control" type="date" name="fechaNacimiento" required>
                    </div>

                    <div class="col-md-6">
                        <label class="lead" for="sexo"><b>Sexo:</b></label>
                        <input title="Aquí debes escribir m (masculino) o f (femenino)" class="form-control" type="text" name="sexo" maxlength="1" placeholder="Escribe tu sexo" required pattern="m|f">
                    </div>

                </div>

                <div class="row mt-3">

                    <div class="col-md-6">
                        <label class="lead" for="tipoSangre"><b>Tipo de Sangre:</b></label>
                        <input title="Aquí debes escribir tu tipo de sangre, Ejemplo: O+, O-, A, B, AB, etc" class="form-control" type="text" name="tipoSangre" maxlength="2" placeholder="Escribe tu tipo de sangre" required>
                    </div>

                    <div class="col-md-6">
                        <label class="lead" for="email"><b>Email:</b></label>
                        <input title="Aquí debes escribir tu correo electrónico, Ejemplo: juanperez15nz@hotmail.com" class="form-control" type="email" name="email" placeholder="Escribe tu email" required>
                    </div>

                </div>

                <div class="row mt-3">

                    <div class="col-md-6">
                        <label class="lead" for="telefono"><b>Teléfono:</b></label>
                        <input title="Aquí debes poner tu número de télefono, puede ser con guiones o sin guiones (-), Ejemplo: 8495852507, 849-585-2507" class="form-control" type="text" name="telefono" placeholder="Escribe tu número de teléfono" required>
                    </div>

                    <div class="col-md-6">
                        <label class="lead" for="celular"><b>Celular:</b></label>
                        <input title="Aquí debes poder el número de tu celular, puede ser con guiones o sin guiones (-), Ejemplo: 8495852507, 849-585-2507" class="form-control" type="text" name="celular" placeholder="Escribe el número de tu celular" required>
                    </div>

                </div>

                <div class="row mt-3">

                    <div class="col-md-6">
                        <label class="lead" for="estadoCivil"><b>Estado Civil:</b></label>
                        <input title="Aquí debes poner tu estado civil, Ejemplo: soltero/a, casado/a, etc" class="form-control" type="text" name="estadoCivil" placeholder="Escribe tu estado civil" required>
                    </div>

                    <div class="col-md-6">
                        <label class="lead" for="colorFavorito"><b>Color Favorito:</b></label>
                        <input title="Aquí debes poner tu color favorito, Ejemplo: rojo, azul, verde, blanco, etc" class="form-control" type="text" name="colorFavorito" placeholder="Escribe tu color favorito" required>
                    </div>

                </div>

                <div class="row mt-3">

                    <div class="col-md-6">
                        <label class="lead" for="equipoPelota"><b>Equipo de Pelota Favorito:</b></label>
                        <input title="Aquí debes poner tu equipo de pelota favorito, Ejemplo: Aguilas Cibaeñas, Tigres del Licey, Boston, Orioles, etc" class="form-control" type="text" name="equipoPelota" placeholder="Escribe tu equipo de pelota favorito" required>
                    </div>

                    <div class="col-md-6">
                        <label class="lead" for="notas"><b>Promedio de Notas del Bachillerato:</b></label>
                        <input title="Aquí debes poner tu promedio de notas de cuando estabas o el actual en el bachiller, recordando que el promedio se saca sumando todas las notas y dividiendolas entre la cantidad de notas, Ejemplo: 81, 70, 100, etc" class="form-control" type="text" name="notas" maxlength="3" placeholder="Escribe tu promedio de notas del bachiller" required>
                    </div>

                </div>

                <div class="col-md-12 mt-3">
                    <label class="lead" for="comentario"><b>Comentario:</b></label>
                    <textarea class="form-control" title="Aquí puedes escribir un comentario, esto es opcional" name="comentario" id="comentario" cols="30" rows="10" placeholder="Escribe un comentario (Esto es opcional)"></textarea>
                </div>

            </table>

            <button class="btn btn-lg btn-outline-secondary mt-3" type="submit">Guardar</button>

        </form>

    </div>

    <hr/>

    <div class="container-fluid">

        <table class="table table-dark table-striped table-hover" id="tbldatos">

            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cedula</th>
                    <th>Dirección</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Sexo</th>
                    <th>Tipo de Sangre</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Celular</th>
                    <th>Estado Civil</th>
                    <th>Color Favorito</th>
                    <th>Equipo de Pelota Favorito:</th>
                    <th>Promedio de Notas del Bachillerato:</th>
                    <th>Comentario:</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if (is_dir('datos')) {
                    $archivos = scandir('datos');
                    foreach ($archivos as $arc) {
                        $ruta = "datos/{$arc}";
                        if (is_file($ruta)) {
                            $info = file_get_contents($ruta);
                            $info = json_decode($info);
                            echo "<tr>";
                            foreach ($info as $campo) {
                                echo "<td>
                                {$campo}
                                </td>";
                            }
                            echo "<tr>";
                        }
                    }
                }

                ?>
            </tbody>
            
        </table>

    </div>



</body>

</html>