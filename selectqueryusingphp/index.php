<?php
    include("database.php");


    $sql = "SELECT * FROM users";
    $result = mysqli_query($connection, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<br>" . $row["id"] . "<br>";
                echo "<br>" . $row["user"] . "<br>";
                echo "<br>" . $row["register_date"] . "<br>";
            };
            
        
        } else {
            echo "No User Found";
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