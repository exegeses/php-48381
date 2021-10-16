<?php
    $locaciones =
        [
            'Cambodia'=>'angkor',
            'Turquía'=>'azul',
            'Rusia'=>'basil',
            'Dubai'=>'burj',
            'Italia'=>'colosseo',
            'Chile'=>'easter',
            'Francia'=>'eiffel',
            'Egipto'=>'gizah',
            'Vietnam'=>'ha-long',
            'USA'=>'liberty',
            'Peru'=>'machu',
            'Australia'=>'opera',
            'Tailandia'=>'palace',
            'Jordania'=>'petra',
            'España'=>'sagrada',
            'Grecia'=>'santorini',
            'India'=>'taj',
            'China'=>'wall'
        ];
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
    foreach ( $locaciones as $locacion => $imagen ){
?>
        <article>
            <img src="locaciones/<?= $imagen ?>.jpg">
            <h2><?= $locacion ?></h2>
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