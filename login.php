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
        $insert = $con->query("
        INSERT INTO
        users
        (
        Email,
        password
        ) VALUES
        (
        '".$con->real_escape_string($Email)."',
        '".$con->real_escape_string($password)."'   
        )
        ");

        //read from database
        
        $query = "select * from users where Email = '$Email' limit 1";


        $result = mysqli_query($con, $query);
        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                 $user_data = mysqli_fetch_assoc($result);
                 
                 if($user_data['password'] === $password)
                 {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                 }
             }
        }
        
        echo "Verkeerde Email of Wachtwoord";
    }else
    {
        echo "Verkeerde Email of Wachtwoord";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Inloggen</title>
    <style>
.wrapper{
    padding-left: 40%;
    padding-top: 10%;


        }
    </style>
</head>
<body>
<div class="wrapper">
    <div id="box">
        <form method="post">
            <div>Login</div>
            <input type="email" placeholder="Email" name="Email"><br><br>
            <input type="password" placeholder="Wachtwoord" name="password"><br><br>

            <input type="submit" value="Login"><br><br>

            <a href="signup.php">Klik om een account aan te maken</a><br><br>
        </form>
    </div>
</div>
</body>
</html>
