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
    {
        $idMarca = $_GET['idMarca'];
        $link    = conectar();
        $sql     = "SELECT idMarca, mkNombre
                        FROM marcas
                        WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error( $link ) );
        $marca = mysqli_fetch_assoc( $resultado );
        return $marca;
    }

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
