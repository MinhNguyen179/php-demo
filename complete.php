<?php
$user_name = "root";
$password = "Muaxuan179";
$database = "php-todo";
$host_name = "localhost";
$user = $_SESSION['id'];
$conn = new mysqli($host_name, $user_name, $password, $database);

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $statement = $conn->prepare("UPDATE todos SET completed = 1 WHERE id = {$user}");
    $statement->bindParam(":id", $id, PDO::PARAM_INT);
    $statement->execute();
}

header("Location: /todos.php"); // Redirect back to the todo list
exit();
?>