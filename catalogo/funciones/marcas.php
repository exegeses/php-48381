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
    {}
    function modificarMarca()
    {}
    function eliminarMarca()
    {}
