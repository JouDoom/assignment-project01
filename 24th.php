<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

/*
$GLOBALS
$_POST
$_GET
$_COOKIE
$_SESSION
*/

$X = 5;

function something() {
    $y = 10;
    echo $GLOBALS['x'];
}

something ();


echo $_POST['name'];

?>

<form method="POST">
    <input type="hidden" name="name" value="value">
    <button type="submit">PRESS ME!</button>
</form>

    
</body>
</html>