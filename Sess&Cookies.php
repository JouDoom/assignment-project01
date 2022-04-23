<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jou Doom - PHP</title>

</head>

<body>
 
<?php

/*
$_COOKIE
$_SESSION
*/

setcookie("name", "Daniel", time() - 86400);

$_SESSION['name'] = "12";

?>

</body>

</html>