<?php
session_start();
$des = $_GET['description'];
$id = $_GET['id'];
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
                                <?php echo "minh dep trai vcl con day la noi dung: $des" ?>
                                <tr>
                                    <td>
                                        <a href ="edit.php?id = <?php echo $id ?>" style="color:white" class="btn btn-info btn float-right">
                                            Edit
                                        </a>
                                    </td>
                                    <td>
                                        <a href ="" style="color:white" class="btn btn-danger float-right">
                                            Delete
                                        </a>
                                    </td>
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