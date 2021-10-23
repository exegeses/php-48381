<?php
    /* vamos a genear un listado de marcas */
    /* código spaghetti */
    $link = mysqli_connect(
            'localhost',
            'root',
            'root',
            'catalogo'
    );
    $sql = "SELECT idMarca, mkNombre 
                    FROM marcas";
    $resultado = mysqli_query( $link, $sql );
    //echo $resultado; no se puede imprimir un objeto

    while ( $marca = mysqli_fetch_assoc($resultado) ){
        echo $marca['idMarca'], ' ', $marca['mkNombre'], '<br>';
    }
