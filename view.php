<?php
session_start();
$description = $_GET['description'];
$taskId = $_GET['id'];
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
                    <div class = "card-header">This is the description of your task!</div>
                    <div class = "card-body">
                        <ul class = "list-group">
                            <li class = "list-group-item flex">
                                <?php echo $description ?>
                                <tr>
                                    <td>
                                        <a href="edit.php?id=<?php echo $taskId ?>" style="color:white" class="btn btn-info btn float-right">
                                            Edit
                                        </a>
                                    </td>
                                    <td>
                                        <a href ="delete.php?id=<?php echo $taskId ?>" style="color:white" class="btn btn-danger float-right mr-3">
                                            Delete
                                        </a>
                                    </td>
<!--                                    <td>-->
<!--                                    </td>-->
                                </tr>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href ="todos.php" style="color:white" class="btn btn-primary float-right mt-4">
                    Back
                </a>
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