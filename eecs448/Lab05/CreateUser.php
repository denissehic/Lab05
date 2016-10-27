<?php
error_reporting(E_ALL);
$username = $_POST["username"];
$servername = "mysql.eecs.ku.edu";
$dbusername = "dsehic";
$password = "Password123!";
$db_name = "dsehic";
$mysqli = new mysqli($servername, $dbusername, $password, $db_name);
//check conection to database
if ($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$query = "INSERT INTO Users (user_id) VALUES('$username')";
if (empty($username)) {
  echo "Username field cannot be left empty";
}
else if ($mysqli->query($query)===TRUE) {
  echo "New user created!";
} else {
  echo "User not created";
}
//close connection
$mysqli->close();
 ?>
