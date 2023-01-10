<?php
session_start();

    include("connections.php");
    include("functions.php");

   
    if($_SERVER['REQUEST_METHOD'] ==  "POST")
    {
        //iets is gepost
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $Email = $_POST['Email'];
        if(!empty(user_name) && !empty(password) && !empty(Email) && !is_numeric($user_name))
        {

            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password,Email) values ('$user_id','$user_name','$password','$Email')";


            mysqli_query($query);

            header("Location: login.php");
            die;
        }else
        {
            echo "Geef geldige info bitch";
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Account aanmaken</title>
</head>
<body>
<div id="box">
    <form method="post">
        <div>Account aanmaken</div>
        <input type="text" name="user_name"><br><br>
        <input type="email" name="Email"><br><br>
        <input type="password" name="password"><br><br>

        <input type="submit" value="Aanmaken"><br><br>

        <a href="login.php">Klik om in te loggen</a><br><br>
    </form>
</div>
</body>
</html>