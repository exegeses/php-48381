<?php

    function listarUsuarios()
    {
        $link = conectar();
        $sql  = "SELECT idUsuario, usuNombre, usuApellido, usuEmail 
                    FROM usuarios";
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error($link) );
        return $resultado;
    }

    function agregarUsuario()
    {
        $usuNombre = $_POST['usuNombre'];
        $usuApellido = $_POST['usuApellido'];
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];// clave enviada sin hash
        $pwHash  = password_hash( $usuPass, PASSWORD_DEFAULT );
        $link    = conectar();
        $sql     = "INSERT INTO usuarios
                            ( usuNombre, usuApellido, usuEmail, usuPass, usuEstado )
                            VALUE 
                            ( '".$usuNombre."', '".$usuApellido."', '".$usuEmail."', '".$pwHash."', 1 )";
        $resultado = mysqli_query( $link, $sql )
                                or die( mysqli_error($link) );
        return $resultado;
    }

    function verUsuarioPorID()
    {
        $idUsuario = $_GET['idUsuario'];
        $link = conectar();
        $sql  = "SELECT idUsuario, usuNombre, usuApellido, usuEmail 
                    FROM usuarios
                    WHERE idUsuario = ".$idUsuario;
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error($link) );
        $usuario   = mysqli_fetch_assoc( $resultado );
        return $usuario;
    }

    function modificarUsuario()
    {
        $usuNombre  = $_POST['usuNombre'];
        $usuApellido= $_POST['usuApellido'];
        $usuEmail   = $_POST['usuEmail'];
        $idUsuario  = $_POST['idUsuario'];
        $link = conectar();
        $sql  = "UPDATE usuarios 
                    SET usuNombre = '".$usuNombre."',
                        usuApellido = '".$usuApellido."',
                        usuEmail = '".$usuEmail."'
                    WHERE idUsuario = ".$idUsuario;
        $resultado = mysqli_query( $link, $sql )
                    or die( mysqli_error($link) );
        return $resultado;
    }

    function modificarClave()
    {
        //clave actual sin encriptar
        $usuPass = $_POST['usuPass'];
        /** obtenemos clave encriptada en tabla usuarios **/
        $link = conectar();
        $sql  = "SELECT usuPass 
                    FROM usuarios   
                    WHERE idUsuario = ".$_SESSION['idUsuario'];
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        $datoUsuario = mysqli_fetch_assoc($resultado); //$datoUsuario['usuPass']
        if( password_verify( $usuPass, $datoUsuario['usuPass'] ) ){
            //si verifica la contraseña
            if( $_POST['newPass'] == $_POST['newPass2'] ){ // si nueva clave es igual a repite clave
                //encripramos
                $pwHash = password_hash( $_POST['newPass'], PASSWORD_DEFAULT );
                /* modificamos clave */
                $sql = "UPDATE usuarios 
                            SET usuPass = '".$pwHash."'
                           WHERE idUsuario = ".$_SESSION['idUsuario'];
                $resultado = mysqli_query( $link, $sql )
                                 or die( mysqli_error($link) );
                return $resultado;
            }
            // no coinciden clave nueva con repite clave
            header( 'location: formModificarClave.php?error=3' );
            return;
        }
        // no conicide clave actual con la clave en tanla usuarios
        header( 'location: formModificarClave.php?error=4' );
        return;
    }