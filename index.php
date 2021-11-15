<?php
session_start();
include("includes/dbh.php");
include("function.php");
$user_data = check_login($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming for life</title>
</head>
<body>
    <a href="logout.php">logout</a>
    <h1>This is for the gamers</h1>
    <br>
    hello,<?php echo $user_data['user_name'];?>
</body>
</html>