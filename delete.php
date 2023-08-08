<?php
include "dbconn.php";
$taskId= $_GET['id'];
$query = "DELETE FROM todos WHERE id = $taskId";
msqli_query($conn,$query);
header("Location:todos.php");