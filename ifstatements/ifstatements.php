<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="GET">
        <label>Age:</label>
        <input type="text" name="age"><br>
        <input type="submit" value="submit">


    </form>
</body>

</html>

<?php

$age = $_GET["age"];

if ($age >= 18 && $age <= 100) {
    echo "You may enter this site";
} elseif($age == 0) {
    echo "Age can't be 0";
} elseif($age < 0) {
    echo "Age can't be negative";
} else if($age > 100) {
    echo "You are too old to enter this site";
} 

else {
    echo "You are under 18";
}

$adult = true;



?>