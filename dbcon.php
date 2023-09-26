<?php
$server = "db";
$user = "lampserver";
$pass = "pokemon";
$dbname = "lampserver";

# create a connection
$conn = new mysqli($server, $user, $pass, $dbname);

# check connection
if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}

echo "Connection Successful";
?>
