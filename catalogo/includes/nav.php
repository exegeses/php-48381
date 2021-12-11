<header class="bg-dark mb-3 shadow-sm border-bottom border-light">
<nav class="site-header sticky-top py-2">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
        <a href="index.php" class="mt-1 border-bottom-0">
            <i class="fab fa-meetup fa-3x"></i>
        </a>


        <a class="py-2" href="adminMarcas.php">Marcas</a>
        <a class="py-2" href="adminCategorias.php">Categorías</a>
        <a class="py-2" href="adminProductos.php">Productos</a>
        <a class="py-2" href="adminUsuarios.php">Usuarios</a>

<?php
        if( isset( $_SESSION['login'] ) ){
?>
        <div class="dropdown">
        <button class="btn btn-dark dropdown-toggle px-3" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $_SESSION['usuNombre'] ?> <?= $_SESSION['usuApellido'] ?>
        </button>
            <div class="dropdown-menu bg-dark bg-opacity-75" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item bg-dark py-2" href="logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    Salir de sistema
                </a>
                <a class="dropdown-item bg-dark py-2" href="">Modificar Perfil</a>
                <a class="dropdown-item bg-dark py-2" href="formModificarClave.php">Cambiar contraseña</a>
            </div>
        </div>
<?php
        }else{
?>
    <!-- botón login -->
        <button class="btn btn-dark px-3">
            <a href="formLogin.php" class="border-bottom-0"><i class="fas fa-sign-in-alt"></i> Ingresar</a>
        </button>
<?php
        }
?>
    </div>
</nav>
</header>