<?php
include "dbconn.php";
session_start();
$taskId= $_SESSION['task_id'];
$data = $conn ->query(" SELECT * FROM todos WHERE id = $taskId");
$data = $data->fetch_array(MYSQLI_ASSOC);
if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Update Status</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <h2 class = "text-center my-5">THIS IS YOUR TODO LIST!!</h2>
        <div class = "row justify-content-center">
            <div class = "col-md-10">
                <div class ="card card-default">
                    <div class = "card-header">Update the status of your task!</div>
                    <div class = "card-body">
                        <ul class = "list-group">
                            <li class = "list-group-item flex">
                                <tr>
                                    <input type="hidden" name="todo_id" value="$taskId">
                                    <form action="update.php" method="POST">
                                        <div class="form-group">
                                            <input name="title" placeholder="Title" id="" class="form-control" value = "<?php echo $data['title']?>" >
                                        </div>
                                        <div class="form-group">
                                            <textarea name="description" placeholder="Description" id="" cols="90" rows="10" class="form-control"><?php echo $data['description']?></textarea>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-success"> Finish Update</button>
                                        </div>
                                    </form>
                                        <a href ="" style="color:white" class="btn btn-danger float-right mr-3">
                                            Delete
                                        </a>
                                        <a href ="view.php?id=<?php echo $data['id']?>&description=<?php echo $data['description']?>" style="color:white" class="btn btn-primary float-right mr-3">
                                            Back
                                        </a>
                                </tr>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
    <?php
}else{
    header("Location: index.php");
    exit();
}
?>



