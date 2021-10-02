<?php

    $numero = 137;
    $texto = 'cadena de caractéres';
    const NOMBRE = 'Rick';
    //define('NOMBRE', 'Rick');
    const APELLIDO = 'Sanchez';
    //define('APELLIDO', 'Sanchez');
    $precio = 5000;
    $sql = "SELECT prdNombre, prdPrecio 
                WHERE prdPrecio < ".$precio;
?>
<br>
<?php
    //echo NOMBRE.' '.APELLIDO;
    echo NOMBRE, ' ', APELLIDO;
?>
<hr>
<?php
    //unset($numero);  //unset() sirve para eliminar variables
    echo 'el númnero es: ', $numero;
