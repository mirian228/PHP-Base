<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
</body>

</html>

<?php
    $username = "Mirian Surmanidze";
    $phone = 123-4567-88;
    $username = strtolower($username);
    echo $username . "<br>";
    $username = strtoupper($username);
    echo $username . "<br>";
    $username = trim($username);
    echo $username . "<br>";
    $username = str_pad($username, 20, "0");
    echo $username . "<br>";
    //$phone = str_replace("-", "", $phone);
    //echo $phone . "<br>"
    $equals = strcmp($username, "Mirian Surmanidze");
    echo $equals . "<br>";
    $count = strlen($username);
    echo $count;
?>