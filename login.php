<?php
session_start();
include("includes/dbh.php");
include("function.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password) && !is_numeric($username)){
        //read from to database
        $user_id = random_num(20);
 $sql = "select * from users where user_name = '$username' limit 1";
$result = mysqli_query($conn,$sql);
if($result){
    if($result && mysqli_num_rows($result)>0){
        $user_data = mysqli_fetch_assoc($result);
        if($user_data['password'] === $password){
            $_SESSION["user_id"] = $user_data['user_id'];
            header("Location:index.php");
            die;
        } else {
            echo "Wrong username or password";
        }
    }  
}
 

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
    <title>Login</title>
</head>
<body>
    <div id="box">
        <form action="" method="post">
     <div id="log">Login</div>
     <Input id="text" type="text" name="username"></Input><br><br>
     <input id="text"  type="password" name="password"></input><br><br>
     <input  id="button"  type="submit" value="Login"><br><br>
     <a href="signup.php">signup</a>
        </form>
    </div>
</body>
</html>