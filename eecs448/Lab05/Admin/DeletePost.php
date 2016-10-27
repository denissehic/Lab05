<?php
$deletePost = $_POST["deleteArray"];
$servername = "mysql.eecs.ku.edu";
$dbusername = "dsehic";
$password = "Password123!";
$db_name = "dsehic";
$mysqli = new mysqli($servername, $dbusername, $password, $db_name);
//check conection to database
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
for ($i=0; $i <count($deletePost) ; $i++) {
  $query = "DELETE FROM Posts WHERE post_id ='".$deletePost[$i]."'";
  if($mysqli->query($query)){
    echo "Post with ID of ".$deletePost[$i] ." deleted successfully<br>";
  }
  else {
    echo "Failed to delete<br>";
  }
}
 ?>
