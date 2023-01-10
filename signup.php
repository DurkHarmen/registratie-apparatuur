<?php
session_start();

    include("connections.php");
    include("functions.php");

   
    if($_SERVER['REQUEST_METHOD'] ==  "POST")
    {
        //iets is gepost
        $password = $_POST['password'];
        $Email = $_POST['Email'];
        if(!empty($password) && !empty($Email))
        {

            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,password,Email) values ('$user_id','$password','$Email')";


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
        <input type="email" placeholder="Email" name="Email"><br><br>
        <input type="password" placeholder="Wachtwoord" name="password"><br><br>

        <input type="submit" value="Aanmaken"><br><br>

        <a href="login.php">Klik om in te loggen</a><br><br>
    </form>
</div>
</body>
</html>