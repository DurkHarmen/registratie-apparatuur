<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "uitleensysteem";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))
{

    die("connectie is mislukt");
}
