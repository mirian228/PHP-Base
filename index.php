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

$capitals = array("USA"=>"Washington D.C", 
            "Japan"=>"Kyoto", 
            "South Korea"=>"Seoul", 
            "India"=>"New Delhi");

//$capitals["China"] = "Beijing";
//array_pop($capitals);
//array_shift($capitals);
$keys = array_keys($capitals);
// $values = array_values($capitals);
//$capitals = array_flip($capitals);

echo $capitals["USA"] . "<br>";
echo $capitals["Japan"] . "<br>";

    foreach($capitals as $key => $value) {
        echo "<br>";
        echo "{$key} = {$value} <br>";
    }

    echo "<br>";

    foreach($keys as $key) {
        echo "{$key} <br>";
    }

?>