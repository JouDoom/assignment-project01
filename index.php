<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Jou Doom</title>
</head>

<body>
    <form method="GET">
        <input type="text" name="person">
        <button>SUBMIT</button>

    </form>

<?php
    $students = $_GET['person'] ;   
    echo $students. " is a student of SAGU Foundation";

?>
  
</body>

</html>