<?php

function check_login($con)
{
   
    if(isset($_SESSION['user_id']))
    {
       
        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
   
    //redirect to login
    header("Location: login.php");
    die;
}

function random_num($lenght)
{
    $text = "";
    if($lenght < 5)
    {
        $lenght = 5;
    }
    $len = rand(4,$lenght);
    for ($i=0; $i < $len; $i++){
        $text .= rand(0, 9);
    }

    return $text;
}
function validate($password, $Email)
{
    $errors = array();
    
    // validatieregels voor het wachtwoord
    if(strlen($password) < 2)
        $errors['wachtwoord'] = 'U heeft geen wachtwoord ingevuld.';
    
    // validatieregels voor het mailadres
    if(!strlen($Email))
        $errors['email'] = 'U heeft geen email adres ingevuld.';
    else if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
        $errors['email'] = 'U heeft een ongeldig email adres ingevuld.';
    
    // geef de array met foutmeldingen terug
    return $errors;
}
