<?php

    ####### CRUD de marcas

    function listarMarcas()
    {
        $link = conectar();
        $sql  = "SELECT idMarca, mkNombre 
                    FROM marcas";
        $resultado = mysqli_query( $link, $sql );
        return $resultado;
    }

    /*
     *
     *  verMarcaPorID()
     *  agregarMarca()
     *  modificarMarca()
     *  eliminarMarca()
     * */