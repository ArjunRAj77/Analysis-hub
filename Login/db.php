<?php
$servername = "us-cdbr-east-05.cleardb.net";
$username = "b781a5b1926da3";
$password = "a1efd39a";
$dbname = "heroku_4fef4b01f5dd94d";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>