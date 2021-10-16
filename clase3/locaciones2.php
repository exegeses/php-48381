<?php
    $locaciones =
        [
            'angkor', 'azul', 'basil', 'burj',
            'colosseo', 'easter', 'eiffel',
            'gizah', 'ha-long', 'liberty',
            'machu', 'opera', 'palace', 'petra',
            'sagrada', 'santorini', 'taj',
            'wall'
        ];
$locaciones3 =
    [
        'Angkor Wat, Angkor',
        'Mezquita azul, Estambul',
        'Catedral de San Basilio, Moscu',
        'Burj Khalifa, Dubai',
        'El Coliseo, Roma', 'Isla de Pascua, Chile',
        'Tour Eiffel, París',
        'Gran Pirámide de Guiza, Guiza',
        'Hạ Long Bay, Quang Ninh, Vietnam',
        'Estatua de la Libertad, New York',
        'Machu Picchu, Perú',
        'Opera House, Sydney', 'Grand Palace, Bangkok', 'petra',
        'La Sagrada Familia, Barcelona',
        'Santorini, Archipiélago de las Cícladas ',
        'Taj Mahal, Agra',
        'La Gran Muralla, Jinshanling'
    ];
    $cantidad = count($locaciones);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Locaciones</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <main>

<?php
        for( $n = 0; $n < $cantidad; $n++ ){
?>
        <article>
            <img src="locaciones/<?= $locaciones[$n] ?>.jpg">
            <h2><?= $locaciones3[$n] ?></h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi at atque beatae, corporis deserunt dolorem eius eveniet ex harum, magni obcaecati qui ratione veritatis.
            </p>
        </article>
<?php
        }
?>

    </main>
</body>
</html>