<?php

//DB defines
$dbservername = "mysql";
$dbusername = "dbowner";
$dbpassword = "password123!";
$dbname = "menagerie";

// Form data
$username= $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname); // Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()); 
}

// Prepare the query
$sql = "INSERT INTO users (username,password,email) VALUES ('$username','$password','$email')"; 

echo $sql; //for good measure

//Execute
if (mysqli_query($conn, $sql)){
    echo "New record created successfully";} 
    else {echo "Error: " . $sql . "<br>" . mysqli_error($conn); }

//Close connection to DB
mysqli_close($conn);
?>
