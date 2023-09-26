<?php
$server = "";
$user = "";
$pass = "";
$dbname = "";

# create a connection
$conn = new mysqli($server, $user, $pass, $dbname);

# check connection
if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}

echo "Connection Successful";
?>
