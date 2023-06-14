<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <label>Username:</label>
        <input type="text" name="username"><br>
        <label>Age:</label>
        <input type="text" name="age"><br>
        <label>Email:</label>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
</body>

</html>

<?php
/* if (isset($_POST["login"])) {
    $username = filter_input(
        INPUT_POST,
        "username",
        FILTER_SANITIZE_SPECIAL_CHARS
    );
    $age = filter_input(
        INPUT_POST,
        "age",
        FILTER_SANITIZE_NUMBER_INT
    );
    $email = filter_input(
        INPUT_POST,
        "email",
        FILTER_SANITIZE_EMAIL
    );
    echo "Hello {$username}";
    echo "You are {$age} old";
    echo "Your email is {$email}";
} */

if (isset($_POST["login"])) {
    $age = filter_input(INPUT_POST, "age",
        FILTER_VALIDATE_INT);
        if(empty($age)) {
            echo "That number wasn't valid";
        } else {
            echo "You are $age years old";
        }
}

?>