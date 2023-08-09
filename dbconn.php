<?php
global $conn;
$user_name = "YOUR_USER_NAME";
$password = "YOUR_PASSWORD";
$database = "YOUR_DATABASE_NAME";
$host_name = "YOUR_HOST_NAME";
// Create connection
$conn = new mysqli($host_name, $user_name, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>