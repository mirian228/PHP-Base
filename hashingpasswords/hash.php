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
$password = "pizza123";
$hash = password_hash($password, PASSWORD_BCRYPT);

echo $hash;

if (password_verify("hamburger666", $hash)) {
    echo "Thats correct pass";
} else {
    echo "incorrect pass";
}
?>