<?php
session_start();
include("includes/dbh.php");
include("function.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password) && !is_numeric($username)){
        //save to database
        $user_id = random_num(20);
 $sql = "insert into users(user_id,user_name,password) values ('$user_id','$username','$password')";
 mysqli_query($conn,$sql);
 header("Location:login.php");
 die;

    }else {
        echo "Please enter valid information";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Signup</title>
</head>
<body>
    <div id="box">
        <form action="" method="post">
     <div id="log">Signup</div>
     <Input id="text" type="text" name="username"></Input><br><br>
     <input id="text"  type="password" name="password"></input><br><br>
     <input  id="button"  type="submit" value="signup"><br><br>
     <a href="login.php">Login</a>
        </form>
    </div>
</body>
</html>