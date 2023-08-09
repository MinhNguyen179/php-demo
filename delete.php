<?php
include "dbconn.php";
$taskId= $_GET['id'];
$query = "DELETE FROM todos WHERE id = $taskId";
mysqli_query($conn, $query) or die(mysqli_error($conn));
header("Location:todos.php?Success=Task has been deleted!");
?>