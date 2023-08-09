<?php
include "dbconn.php";
$title = $_GET['title'];
$userId = $_GET['id'];
$description = $_GET['description'];
echo $userId;
if (empty($title)){
    header("Location:insert.php?error=Title is required!");
    exit();
}else if (empty($description)) {
    header("Location:insert.php?error=Description is required!");
    exit();
}else{
    $query = $query = "INSERT INTO todos (user_id, title, description, completed, created_at, updated_at) VALUES ($userId,'$title','$description',0,NOW(),NOW())";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    header("Location:Todos.php?Success=Task has been created!");
}
?>
