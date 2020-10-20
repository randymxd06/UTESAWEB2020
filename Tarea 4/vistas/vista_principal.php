<?php include_once "partes/parte_head.php" ?>

<body>

<div class="container mt-4 mb-4" style="width: 580px; border-color: gray; border-style: solid;">
        
        <form class="row g-3 needs-validation mt-2 mb-2" novalidate>

            <div class="row">

              <div class="col-md-6 mt-4">
                <label for="nombre" class="form-label lead"><b>Nombre</b></label>
                <input type="text" class="form-control" id="nombre" required placeholder="Escribe tu nombre">
                <div id="divNombre" class="">
                  <span id="spanNombre"></span>
                </div>
              </div>
  
              <div class="col-md-6 mt-4">
                <label for="apellido" class="form-label lead"><b>Apellido</b></label>
                <div class="input-group">
                  <input type="text" class="form-control" id="apellido" required placeholder="Escribe tu apellido">
                  <div id="divApellido" class="">
                    <span id="spanApellido"></span>
                  </div>
                </div>
              </div>

            </div>
            
            <div class="col-md-12 mt-4">
              <label for="cedula" class="form-label lead"><b>Cedula</b></label>
              <div class="input-group">
                <input type="text" class="form-control" id="cedula" required placeholder="Escribe tu cédula">
                <div id="divCedula" class="">
                  <span id="spanCedula"></span>
                </div>
              </div>
            </div>

            <div class="row">

              <div class="col-md-6 mt-4">
                <label for="edad" class="form-label lead"><b>Edad</b></label>
                <select class="form-select" id="edad" name="edad" required>
                  <option selected disabled value="">Selecciona tu edad</option>
                  <?php 
                    for($i = 1; $i < 101; $i++){
                        echo "<option value=\"{$i}\">{$i}</option>";
                    }
                  ?>
                </select>
                <div id="divEdad" class="">
                  <span id="spanEdad"></span>
                </div>
              </div>
  
              <div class="col-md-6 mt-4">
                <label for="telefono" class="form-label lead"><b>Teléfono</b></label>
                <input class="form-control" type="text" name="telefono" id="telefono" placeholder="Escribe tu número de teléfono">
                <div id="divTelefono" class="">
                  <span id="spanTelefono"></span>
                </div>
              </div>

            </div>

            
            
            <div class="col-12 mb-3 mt-4">
              <button class="btn btn-secondary form-control" type="button" id="btnGuardar">Guardar</button>
            </div>

        </form>

    </div>

<hr>

<?php include_once "partes/parte_footer.php" ?> 