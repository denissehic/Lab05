<?php
$username = $_POST["username"];
$content = $_POST["content"];
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
$sQuery = "SELECT * FROM Users WHERE user_id='$username'";
$insertQuery = "INSERT INTO Posts (content, author_id) VALUES('$content','$username') ";
$userResult = $mysqli->query($sQuery);
if (empty($content)) {
  echo "Post cannot be left empty.";
}
else if ($userResult->num_rows === 0) {
  echo "User ID does not exist";
} else {
  if ($mysqli->query($insertQuery)) {
    echo "New post Created";
  } else {
    echo "Post not created";
  }
  $userResult->free();
}
//close connection
$mysqli->close();
 ?>
