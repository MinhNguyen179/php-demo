<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel ="stylesheet" href ="style.css" type = "text/css">
    <title>HOME</title>
</head>
<body>
    <h1>Hello <?php echo $_SESSION['name'] ?></h1>
    <div> This is your to do list, click here to check </div>
    <a href="logout.php">Logout</a>
</body>
</html>
<?php
}else{
    header("Location: index.php");
    exit();
}
?>

