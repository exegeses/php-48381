<?php

    // declaración
    function negrita( $frase )
    {
        $resultado =  '<b>'. $frase. '</b><br>';
        return $resultado;
    }
    function sumar($numero1, $numero2)
    {
        $resultado = $numero1 + $numero2;
        return $resultado;
    }


    // llamado a ejecución
    echo negrita('Nuevo Texto');
    echo negrita('PHP y mySQL');
    echo negrita('otro texto');
    echo '<hr>';
    echo sumar( 2,5 );
    echo '<hr>';
    echo negrita( sumar(10,5) );