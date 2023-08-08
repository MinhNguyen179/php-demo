<?php
global $conn;
$user_name = "root";
$password = "Muaxuan179";
$database = "php-todo";
$host_name = "localhost";
// Create connection
$conn = new mysqli($host_name, $user_name, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>