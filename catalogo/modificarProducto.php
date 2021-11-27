<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $chequeo = modificarProducto();
    $css     = 'danger';
    $mensaje = 'No se pudo modificar el producto.';
    if( $chequeo ){
        $css     = 'success';
        $mensaje = 'Producto modificado correctamente.';
    }
    
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Modificación de un producto</h1>

        <div class="alert alert-<?= $css ?> col-8 mx-auto">
            <?= $mensaje ?>
            <br>
            <a href="adminProductos.php" class="btn btn-light">
                Volver a panel
            </a>
        </div>

 </main>

<?php  include 'includes/footer.php';  ?>