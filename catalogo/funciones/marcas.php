<?php

    ###################
    ### CRUD de marcas

    function listarMarcas()
    {
        $link = conectar();
        $sql  = "SELECT idMarca, mkNombre
                    FROM marcas";
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error( $link ) );
        return $resultado;
    }
    function verMarcaPorID()
    {}
    function agregarMarca()
    {
        $mkNombre = $_POST['mkNombre'];
        $link = conectar();
        $sql  = "INSERT INTO marcas 
                        ( mkNombre ) 
                    VALUES 
                       ( '".$mkNombre."' )";
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error( $link ) );
        return $resultado;
    }
    function modificarMarca()
    {}
    function eliminarMarca()
    {}
