<?php

    //capturar lo que envió el form
    $prdImagen = $_FILES['prdImagen'];
    echo '<pre>';
    print_r($prdImagen);
    echo '</pre>';
    //echo $_FILES['prdImagen']['name'];

    $dir = 'productos/';
    $tmp = $_FILES['prdImagen']['tmp_name'];
    $orig = $_FILES['prdImagen']['name'];
    //renombramos archivo  time()
    $extension = pathinfo( $orig, PATHINFO_EXTENSION );
    $prdImagen = time().'.'.$extension;
    //movemos ar archivo
    move_uploaded_file( $tmp, $dir.$prdImagen );