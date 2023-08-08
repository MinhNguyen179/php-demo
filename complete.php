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
    $statement = $conn->prepare("UPDATE todos SET completed = 1 WHERE id = ? AND user_id = ?");
    $statement->bind_param("ii", $id, $user_id); // Bind the todo ID and user ID as integers
    $statement->execute();
    $statement->close();
}

header("Location: /todos.php"); // Redirect back to the todo list
exit();

?>