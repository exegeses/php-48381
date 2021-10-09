<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Proceso de datos</title>
</head>
<body>
    <h1>Proceso de datos desde el form</h1>
<?php
    $numero = $_POST['numero'];
    if( $numero < 100 ){
        echo '<img src="images/ok.png">';
    }else{
        echo '<img src="images/error.png">';
    }
?>
    <hr>
<?php
    $numero = $_POST['numero'];
    if( $numero < 100 ){
?>
        <img src="images/ok.png">
<?php
    }else{
?>
        <img src="images/error.png">
<?php
    }
?>
    <hr>
<?php
    $numero = $_POST['numero'];
    $img = 'error';
    if( $numero < 100 ){
        $img = 'ok';
    }
?>
    <img src="images/<?= $img ?>.png">


</body>
</html>