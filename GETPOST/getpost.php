<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in" />
    </form>
    <br>
    <br>
    <form action="index.php" method="GET">
        <label>Quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>

</html>
<?php

$item = "pizza";
$price = 5.99;
$quantity = $_GET["quantity"];
$total = null;

$total = $quantity * $price;
echo "{$_POST["username"]} <br>";
echo $_POST["password"];
echo "You have ordered {$quantity} x {$item}s<br> ";
echo "Your total is: \${$total}";
// $_GET $_POST = special variables used to collect data
// from an HTML form data is sent to the file in the action attribute
// of <form> .  <form action="some_file.php" method="get>

// $_GET = Data is appended to the url
// NOT SECURE
// chart limit
// GET Requests can be cached
// Better for a search page

//$_POST = Data is packaged inside the body of the HTTP Request
// MORE SECURE
// No data limit
// cannot bookmark
// POST Requests are not cached
// Better for submiting credentials




?>