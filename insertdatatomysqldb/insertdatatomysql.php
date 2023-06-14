<?php
    include("database.php");

    $username = "Patrickius";
    $password = "rock3";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(user, password) 
            VALUES('$username', '$hash')";

   try { 
    mysqli_query($connection, $sql);
    echo "<br>User is now registered";
   } catch(mysqli_sql_exception) {
    echo "<br>Could not register user";
   }

    mysqli_close($connection);
?>
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

?>