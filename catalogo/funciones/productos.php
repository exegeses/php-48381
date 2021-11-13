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

    function subirArchivo()
    {
        // si no enviaron archivo
        $prdImagen = 'noDisponible.jpg';

        // enviaron archivo y está todo ok
        if( $_FILES['prdImagen']['error'] == 0 ){
            $dir = 'productos/';
            $tmp = $_FILES['prdImagen']['tmp_name'];
            $orig = $_FILES['prdImagen']['name'];
            //renombramos archivo  time()
            $extension = pathinfo( $orig, PATHINFO_EXTENSION );
            $prdImagen = time().'.'.$extension;
            //movemos ar archivo
            move_uploaded_file( $tmp, $dir.$prdImagen );
        }
        return $prdImagen;
    }

    function agregarProducto()
    {
        //capturamos datos enviados por el form
        $prdNombre      = $_POST['prdNombre'];
        $prdPrecio      = $_POST['prdPrecio'];
        $idMarca        = $_POST['idMarca'];
        $idCategoria    = $_POST['idCategoria'];
        $prdPresentacion= $_POST['prdPresentacion'];
        $prdStock       = $_POST['prdStock'];
        //subimos imagen *
        $prdImagen      = subirArchivo();
        //guardamos en tabla productos
        $link = conectar();
        $sql  = "INSERT INTO productos
                    VALUE 
                        ( 
                         DEFAULT,
                        '".$prdNombre."',
                        ".$prdPrecio.",
                        ".$idMarca.",
                        ".$idCategoria.",
                        '".$prdPresentacion."',
                        ".$prdStock.",
                        '".$prdImagen."'
                        )";
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error( $link ) );
        return $resultado;
    }