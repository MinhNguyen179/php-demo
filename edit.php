<?php
include "dbconn.php";
session_start();
$taskId= $_SESSION['task_id'];
$data = $conn ->query(" SELECT * FROM todos WHERE id = $taskId");
$data = $data->fetch_array(MYSQLI_ASSOC);
$minh = $data['description'];
//echo "$minh";
if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>SIGN UP</title>
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
                                    <input type="hidden" name="todo_id" value="{{$todo->id}}">
                                    <div class="form-group">
                                        <input type="text" placeholder="Name" class="form-control" name="name" value ="<?php echo $data['title']?>">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="description" placeholder="Description" id="" cols="90" rows="10" class="form-control" value = "<?php $data['description']?>">
                                        </textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-success"> Finish Update</button>
                                    </div>
                                    <a href ="" style="color:white" class="btn btn-danger float-right mr-3">
                                        Delete
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



