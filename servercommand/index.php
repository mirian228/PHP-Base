<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <label>Username:</label>
        <br>
        <input type="text" name="username">
        <input type="submit">

    </form>
</body>

</html>
<?php
/*    foreach($_SERVER as $key => $value) {
        echo "{$key} = {$value} <br>";
    } */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "HELLO";
}
?>