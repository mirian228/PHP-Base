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

$grade = "A";

switch ($grade) {
    case "A":
        echo "You did great";
        break;
    case "B":
        echo "You did good";
        break;
    case "C":
        echo "You did okay";
        break;
    case "D":
        echo "You did poorly";
        break;
    case "F":
        echo "You did failed";
        break;
    default:
        echo "Such grade doesn't exist";
}


$date = date("l");
echo "<br>";

switch($date) {
    case "Monday":
        echo "It's Monday";
    break;
    case "Tuesday":
        echo "It's Tuesday";
    break;
    case "Wednesday":
        echo "It's Wednesday";
    break;
    case "Thursday":
        echo "It's Thursday";
    break;
    case "Friday":
        echo "It's Friday";
    break;
    case "Saturday":
        echo "It's Saturday";
    break;
    case "Sunday":
        echo "It's Sunday";
    break;
    default:
        echo "Not valid weekday";
}

?>