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

// Query to get all table names
//$query = "SHOW TABLES";
//$result = $conn->query($query);

// Fetch table names
//if ($result->num_rows > 0) {
//    while($row = $result->fetch_row()) {
//        echo "Table: " . $row[0] . "<br>";
//    }
//} else {
//    echo "0 tables found";
//}

//// Close connection
//$conn->close();
?>