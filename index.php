<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel ="stylesheet" href ="style.css" type = "text/css">
    <title>Todo Apps</title>
</head>
<body>
    <form action="login.php" method = "POST">
        <h1><strong>Welcome to Todo List App</strong></h1>
        <p  style="text-align: center; margin-top: 30px"><i>"Manage your tasks efficiently and never miss a deadline."</i></p>
        <div>
            <?php if (isset($_GET['error'])){ ?>
                <p class = "error"><?php echo $_GET['error'];?></p>
            <?php }?>
        </div>
        <h2>Login Page</h2>
        <label>User Name</label>
        <input type = "text" name = "uname" placeholder="Username...">
        <label>Password</label>
        <input type = "password" name = "password" placeholder="Password...">
        <button type="submit" class = "submit-button" >Submit</button>
        <a href="signup.php" class="submit-button">Create an account</a>
    </form>
</body>
</html>
