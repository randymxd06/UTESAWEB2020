<?php 
    $tmp = $_GET['f'];
    $foto = "images/{$tmp}";
    if(!is_file($foto)){
        header("location:./");
    }
    $tmp = str_replace('.jpg','.txt', $tmp);
    $dato = "datos/{$tmp}";
    $dato = unserialize(file_get_contents($dato));
    include_once "partes/parte_head.php";
?>

<h3>Visualizador de imagenes</h3>
    
<fieldset>

    <legend>Datos</legend>

    <div class="lead">
        Nombre: <?php echo $dato['nombre']; ?>
    </div>

    <div class="lead">
        Teléfono: <?php echo $dato['telefono']; ?>
    </div>

    <div class="lead">
        Comentario: <?php echo $dato['comentario']; ?>
    </div>

</fieldset>

<img width="750px" height="420px" src="<?php echo $foto; ?>" alt="image">

<?php include_once "partes/parte_footer.php" ?>