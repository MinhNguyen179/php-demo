<?php
include "dbconn.php";
$des = $_POST['description'];
$tit = $_POST['title'];
$id = $_POST['id'];
$query = "UPDATE todos SET title = '$tit', description = '$des' WHERE id = $id";
mysqli_query($conn, $query) or die(mysqli_error($conn));
header("Location:Todos.php?Success=Task has been updated!")
?>
