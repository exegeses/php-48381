<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $chequeo = agregarMarca();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Alta de una marca</h1>

        <div class="alert alert-success col-8 mx-auto">
            Marca agregada correctamente.
            <br>
            <a href="adminMarcas.php" class="btn btn-light">
                Volver a panel
            </a>
        </div>

        <div class="alert alert-danger col-8 mx-auto">
            No se pudo agregar la marca.
            <br>
            <a href="adminMarcas.php" class="btn btn-light">
                Volver a panel
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>