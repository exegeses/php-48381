<?php
    //mostrar fecha: 09/10/2021
    $fecha = date('d/m/Y');
    $diaSemana = date('w');
    /* 0 para Domingo */
    /* 1 para Lunes */
    /* 2 para Martes */
    /* 3 para Miércoles */
    /* 6 para Sábado */
    /* if/elseif */
    /* swich() */
    $semana = [
                'Domingo', 'Lunes',
                'Martes', 'Miércoles',
                'Jueves', 'Viernes',
                'Sábado'
              ];

    echo $semana[$diaSemana],' ', $fecha;