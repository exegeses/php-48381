<?php
    $marcas = [
                'Hermes', 'Armani', 'Boss',
                'Zara', 'UniQlo', 'Puma'
                ];

    //foreach ( $coleccion as $clave => $auxiliar )
    foreach ( $marcas as $clave => $marca ){
        echo $clave, ': ', $marca, '<br>';
    }