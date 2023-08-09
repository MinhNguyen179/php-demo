<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){?>
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
            <div class = "col-md-5.5">
                <div class ="card card-default">
                    <div class = "card-header">Create task everyday!</div>
                    <form action="create.php" method="GET">
                        <div class="form-group">
                            <input name="title" placeholder="Type your task title here..." class="form-control">
                        </div>
                        <input type="hidden" name="id" value="<?php echo $_SESSION['id']?>">
                        <div class="form-group">
                            <textarea name="description" placeholder="Type your task description here..." id="des" cols="90" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success"> Finish Create</button>
                        </div>
                        <a href ="todos.php" style="color:white" class="btn btn-primary float-right mr-3">
                            Back
                        </a>
                    </form>
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
