<?php
$db_server = "localhost:4306";
$db_user = "root";
$db_password = "";
$db_name = "businessdb";
$connection = "";
try {
$connection = mysqli_connect(
    $db_server,
    $db_user,
    $db_password,
    $db_name
);
} catch(mysqli_sql_exception) {
    echo "No server detected";
}
if($connection) {
    echo "CONNECTION EXISTS";
} else {
    echo "NO CONNECTION";
}

 // 1. MySQLi Extension
 // 2. PDO(PHP Data Objects)

 ?>
