<?php

//DB defines
$dbservername = "mysql";
$dbusername = "dbowner";
$dbpassword = "password123!";
$dbname = "menagerie";


// Create connection

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname); // Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get every user
$sql = "SELECT * FROM users";

//Execute
$result = mysqli_query($conn, $sql);

//Display any data in rows
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "username: " . $row["username"]. " - password: " . $row["password"]. " email: ". $row["email"]. "<br>";
  }
} else {
  echo "0 results";}

  //close connection to DB
mysqli_close($conn);
?>
