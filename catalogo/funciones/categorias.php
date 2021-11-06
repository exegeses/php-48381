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
    {
        $catNombre = $_POST['catNombre'];
        $link      = conectar();
        $sql = "INSERT INTO categorias 
                            ( catNombre )
                         VALUE 
                            ( '".$catNombre."' )";
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error( $link ) );
        return $resultado;
    }
    function modificarCategoria()
    {}
    function eliminarCategoria()
    {}
