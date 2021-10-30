<?php

    #############################
    ### CRUD de categorías

    function listarCategorias()
    {
        $link   = conectar();
        $sql    = "SELECT idCategoria, catNombre 
                      FROM categorias";
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error( $link ) );
        return $resultado;
    }
    function verCategoriaPorID()
    {}
    function agregarCategoria()
    {}
    function modificarCategoria()
    {}
    function eliminarCategoria()
    {}
