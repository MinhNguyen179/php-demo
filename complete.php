<?php
include "dbconn.php";
session_start();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "";
//echo $id = $_GET['ID']; // check if id is taken or not
if (isset($_GET['ID'])) { // id cua task
    $id = (int)$_GET['ID']; //lay ra id cua task
    $sql = "UPDATE todos SET completed = 1 WHERE id = $id";//update task ma co id = $id
    $result2 = mysqli_query($conn, $sql);

    header("Location: todos.php?success=You have completed successfully");
    exit();
}
?>