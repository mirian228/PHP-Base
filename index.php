<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>  
        <h3>Login Form</h3>
        <form action="index.php" method="POST">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name = "login" value="Login">
        </form>

</body>

</html>

<?php
    // isset() = Returns true if a variable is declared and not null
    // empty() = Returns true if a variable is not declared, false, null, ""

   // $username = "Mirian";

    //echo isset($username);

   /*  if(isset($username)) {
        echo "This variable is set";
    } else {
        echo "This variable is not set";
    }

    if(empty($username)) {
        echo "<br>This variable is empty";
    } else {
        echo "<br>This variable is not empty";
    }
 */

    foreach($_POST as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)) {
            echo "username is missing";
        }  else if(empty($password)){
            echo "password is missing";
        } else {
            echo "Hello {$username}";
        }
    }


   /*  if(isset($_POST["username"]) && isset($_POST["password"])) {
        echo "Login succesfull";
    } else {
        echo "You should fill credentials";
    } */

?>