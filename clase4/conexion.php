<?php

    function conectar()
    {
        $link = mysqli_connect(
            'localhost',
            'root',
            'root',
            'catalogo'
        );
        return $link;
    }