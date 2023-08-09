<?php
include "dbconn.php";
session_start();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$sql = "";
//echo $id = $_GET['ID']; // check if id is taken or not
if (isset($_GET['ID'])) { // id of the task if exists
    $id = (int)$_GET['ID']; //take the task id
    $sql = "UPDATE todos SET completed = 1 WHERE id = $id";//update task with id = $id
    $result2 = mysqli_query($conn, $sql);
// Redirect back to the original page
    header("Location: /todos.php/?page=$page&per-page=5");
    exit;


    exit();
}
?>