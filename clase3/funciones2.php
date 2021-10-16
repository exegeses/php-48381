<?php

    /**
     * declarar una función que divida dos números
     */

    function dividir( $dividendo, $divisor )
    {

        if( is_numeric($dividendo) && is_numeric($divisor) ){

            if( $divisor != 0 ){
                $resultado = $dividendo / $divisor;
                return $resultado;
            }
            else{
                $mensaje = 'el divisor NO PUEDE ser 0';
                return $mensaje;
            }
        }
        else{
            $mensaje = 'Ambos deben ser números';
            return $mensaje;
        }

    }

    //llamado a ejecución
    echo dividir( 25, 3 );
    echo '<hr>';
    echo dividir('manzana', 2);
    echo '<hr>';
    echo dividir(8, 2);
    echo '<hr>';
    echo dividir(8, 0);

