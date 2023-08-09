<?php
session_start();
include "dbconn.php";
if (isset($_POST['uname'])&&isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    if (empty($uname)){
        header("Location:index.php?error=User name is required!");
        exit();
    }else if (empty($pass)) {
        header("Location:index.php?error=Password is required!");
        exit();
    }else{
//        $pass = md5($pass);
        // I commented this line because some password is not encrypted already when created account,
        // so if you want to create new user and user, just un comment the line above.
        $userQuery = "SELECT * FROM users WHERE user_name = '$uname' AND password = '$pass'";
        $userResult = $conn -> query($userQuery);
        if (mysqli_num_rows($userResult) == 1){
            $row = mysqli_fetch_assoc($userResult);
            if($row['user_name'] ===$uname && $row['password'] ===$pass) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: home.php");
                exit();
            }else{
                header("Location:index.php?error=Incorrect username or password");
                exit();
            }
        }else{
            header("Location: index.php?error=Incorrect username or password");
            exit();
        }
    }
}else{
    header("Location:index.php");
    exit();
}
