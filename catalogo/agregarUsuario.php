<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $chequeo = agregarUsuario();
    $css     = 'danger';
    $mensaje = 'No se pudo agregar el usuario.';
    if( $chequeo ){
        $css     = 'success';
        $mensaje = 'Usuario agregado correctamente.';
    }
    
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Alta de un usuario</h1>

        <div class="alert alert-<?= $css ?> col-8 mx-auto">
            <?= $mensaje ?>
            <br>
            <a href="adminUsuarios.php" class="btn btn-light">
                Volver a panel
            </a>
        </div>

 </main>

<?php  include 'includes/footer.php';  ?>