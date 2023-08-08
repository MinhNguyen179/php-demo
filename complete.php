<?php
$user_name = "root";
$password = "Muaxuan179";
$database = "php-todo";
$host_name = "localhost";

$conn = new mysqli($host_name, $user_name, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "";
//echo $id = $_GET['ID'];
if (isset($_GET['ID'])) { // id cua task
    $id = (int)$_GET['ID']; //lay ra id cua task
    $sql = "UPDATE todos SET completed = 1 WHERE id = $id";//update task ma co id = $id
    $result2 = mysqli_query($conn, $sql);

    header("Location: todos.php?success=You have completed successfully");
    exit();
}
?>