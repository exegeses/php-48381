<?php

    $n = 1;
    while ( $n < 15 ){
        echo $n,'<br>';
        $n++; //$n = $n + 1;
    }
?>
<hr>
<?php
    $birras = [
        'Patagonia',
        'Grolsch',
        'Andes',
        'Quilmes',
        'Stella Artois',
        'Palermo',
        'Guinness',
        'Warsteiner',
        'Amstel'
    ];
    $cantidad = count($birras);
    //$n = 0;
    $i = 0;
    while( $i < $cantidad ){
        echo $birras[$i], '<br>';
        $i++;
    }

?>
<hr>
    <ul>
<?php
    $i = 0;
    while( $i < $cantidad ){
        echo '<li>', $birras[$i], '</li>';
        $i++;
    }
?>
    </ul>
<hr>
    opción que tal vez vaya
    <ul>
        <?php
            $i = 0;
            while( $i < $cantidad ){
        ?>
        <li><?= $birras[$i] ?></li>
        <?php
                $i++;
            }
        ?>
    </ul>
