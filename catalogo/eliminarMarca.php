<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $chequeo = eliminarMarca();
    $css     = 'danger';
    $mensaje = 'No se pudo eliminar la marca.';
    if( $chequeo ){
        $css     = 'success';
        $mensaje = 'Marca eliminada correctamente.';
    }
    
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Baja de una marca</h1>

        <div class="alert alert-<?= $css ?> col-8 mx-auto">
            <?= $mensaje ?>
            <br>
            <a href="adminMarcas.php" class="btn btn-light">
                Volver a panel
            </a>
        </div>

 </main>

<?php  include 'includes/footer.php';  ?>