<?php

    $nombres = ['Juan','Lucas','Mateo','Marcos'];
    echo $nombres[2];
?>
<hr>
<?php
    $marcas = [
                'Hermes', 'UniQlo',
                'Fender', 'Patagonia',
                'Grolsh', 'Andes',
                'Nike', 'Quilmes'
    ];
?>
<pre>
<?php
    print_r($marcas);
?>
</pre>
<hr>
<?php
    $birras = [
                3 => 'Patagonia',
                'Grolsch',
                'Andes',
                'Quilmes',
                10 => 'Stella Artois',
                'Palermo',
                'Guinness',
                'Warsteiner'
    ];
    echo '<pre>';
    print_r($birras);
    echo '</pre>';
?>
<hr>
<?php
    $autos = [
                'Aston Martin'=>'Leggera',
                'BMW'=>'325i',
                'Audi'=>'Q7',
                'Ferrari'=>'Assa',
                'Pontiac'=>'GTO',
                'Fiat'=>'600'
        ];
    echo '<pre>';
    print_r($autos);
    echo '</pre>';

    echo $autos['Audi'];
?>
