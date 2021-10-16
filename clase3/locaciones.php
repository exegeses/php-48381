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
    for( $n = 0; $n < $cantidad; $n++  ){
?>
        <article>
            <img src="locaciones/<?= $locaciones[$n] ?>.jpg">
            <h2>Nombre</h2>
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