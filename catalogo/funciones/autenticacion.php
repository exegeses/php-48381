<?php

    ###################
    ### autenticación de usuarios

    function login()
    {
        $usuEmail = $_POST['usuEmail'];
        $usuPass  = $_POST['usuPass'];
        $link     = conectar();
        $sql      = "SELECT idUsuario, usuNombre, usuApellido, usuPass
                        FROM usuarios
                        WHERE usuEmail = '".$usuEmail."'";
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error( $link ) );
        $cantidad = mysqli_num_rows( $resultado );
        // si cantidad == 0 -> usuario mal
        // si cantidad == 1 -> usuario ok
        if ( $cantidad == 0 ){
            //redirección a formLogin.php
            header('location: formLogin.php?error=1');
        }
        else{
            //obtenemos datos de la consulta
            $usuario = mysqli_fetch_assoc( $resultado );
            //verificar contraseña
            if ( !password_verify( $usuPass, $usuario['usuPass'] ) ){
                //redirección a formLogin.php
                header('location: formLogin.php?error=1');
            }
            else{
                /* acá ya sabemos que se logueó bien */
                
            }
        }
    }

    function logout()
    {

    }

    function autenticar()
    {

    }