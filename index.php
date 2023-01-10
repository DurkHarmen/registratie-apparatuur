<?php 
session_start();

include("connections.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Uitleen systeem</title>
</head>
<body>
<a href="logout.php">Uitloggen</a>
<h1>index test</h1>


<br>
hoi, Username
</body>
</html>