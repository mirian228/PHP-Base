<?php
//Strings
$name = "Mirian Surmanidze";
$food = "pizza";
$email = "fake@gmail.com";
// Integer
$age = 21;
$users = 2;
$quantity = 3;
// Float
$gpa = 2.5;
$price = 4.99;
$tax_rate = 5.1;
// Boolean
$employed = true;
$online = false;
$for_sale = true;

$total = null;

echo "Hello {$name}<br>";
echo "You like {$food}<br>";
echo "Your email is {$email}<br>";

echo "You are {$age} years old<br>";
echo "There are {$users} users online<br>";
echo "You would like to buy {$quantity} items<br>";

echo "Your gpa is {$gpa}<br>";
echo "Your pizza is \${$price}<br>";
echo "The sales tax rate is: {$tax_rate}%<br>";

echo "Online status: {$online}<br>";

echo "You have ordered {$quantity} x {$food}<br>";
$total = $quantity * $price;
echo "Your total is \${$total}<br>"
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <button>order pizza</button>

</body>

</html>