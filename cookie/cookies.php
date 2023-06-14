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
// cookie = Information about a user stored in a user's web-browser
// targeted advertisments, browsing preferences, and other 
// non-sensitive data

setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
setcookie("fav_drink", "coffee", time() + (86400 * 3), "/");
setcookie("fav_dessert", "icecream", time() + (86400 * 4), "/");

    foreach($_COOKIE as $key => $value) {
        echo "{$key} = {$value}<br>";
    }

    if(isset($_COOKIE["fav_food"])) {
        echo "BUY SOME {$_COOKIE["fav_food"]}";
    } else {
        echo "Idk your favorite food";
    }
?>
