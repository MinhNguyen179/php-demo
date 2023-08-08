<?php
$user_name = "root";
$password = "Muaxuan179";
$database = "php-todo";
$host_name = "localhost";
$user_id = $_SESSION['id']; // Assuming the user ID is stored in the session

$conn = new mysqli($host_name, $user_name, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $user_id = (int)$_GET['user_id'];
    $sql = "UPDATE todos SET completed = 1 WHERE id = $user_id";
    $result2 = mysqli_query($conn, $sql);
    header("Location: todos.php?success=You have completed successfully");
    exit();
}
header("Location: /todos.php");
exit();

?>