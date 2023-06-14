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
$foods = array("apple", "orange", "banana", "coconut");

//$foods[0] = "pineapple";
//array_push($foods, "pineapple");
//array_pop($foods);
//array_shift($foods);
//$reversed_foods = array_reverse($foods);
echo count($foods) . "<br>";
foreach ($foods as $food) {
    echo $food . "<br>";
}

?>