<?php

    require 'conexion.php';
    $link = conectar();
    $sql = "SELECT idMarca, mkNombre FROM marcas";

    $resultado = mysqli_query($link, $sql);

    //$marca = mysqli_fetch_array($resultado);
    //$marca = mysqli_fetch_row($resultado);
    $marca = mysqli_fetch_assoc($resultado);

    echo '<pre>';
    print_r($marca);
    echo '</pre>';
