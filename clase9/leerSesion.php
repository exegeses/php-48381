<?php

    session_start();
    echo $_SESSION['nombre'];

    if ( isset( $_SESSION['numerox'] ) ){
        echo $_SESSION['numerox'];
    }