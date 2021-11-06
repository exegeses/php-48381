<?php

    ######################
    ### CRUD de productos

    function listarProductos()
    {
        $link = conectar();
        $sql = "SELECT idProducto, prdNombre, prdPrecio,
                        mkNombre, catNombre,
                        prdPresentacion, prdStock, prdImagen 
                    FROM productos
                    JOIN marcas
                        ON marcas.idMarca = productos.idMarca
                    JOIN categorias 
                        ON categorias.idCategoria = productos.idCategoria";
        /*
         * $sql = "SELECT idProducto, prdNombre, prdPrecio,
                        mkNombre, catNombre,
                        prdPresentacion, prdStock, prdImagen
                    FROM productos, marcas, categorias
                    WHERE marcas.idMarca = productos.idMarca
 						AND categorias.idCategoria = productos.idCategoria"
         * */
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error( $link ) );
        return $resultado;
    }