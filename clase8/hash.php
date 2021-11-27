<?php

    $clave = 'asdfg';
    $pwHash = password_hash( $clave, PASSWORD_DEFAULT );
    echo $pwHash;
    echo '<br>';
    $pwHash = password_hash( $clave, PASSWORD_DEFAULT );
    echo $pwHash;
