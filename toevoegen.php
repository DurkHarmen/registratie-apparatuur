<?php
include("database.php");
?>
<html>
<doc html>
<head>
<style>
div{
    float:center;
    height: 200%;
    text-align: center;
}
</style>
</head>
<body>
    <div>
        <form method="POST" name="form1">
<br><br><br><br><input type="Naam" placeholder="Naam" name="Naam" required>
<br><br><input type="number" placeholder="Serienummer" name="Serienummer" required>
<br><br><input type="Model" placeholder="Model" name="Model" required>
<br><br><input type="Type" placeholder="Type" name="Type" required>
<br><br>
<select name="Beschikbaarheid" required>
    <option> Beschikbaar </option> 
    <option> Niet beschikbaar </option>
    <option> Kapot </option>
</select>   
<br><br><br><br><input type="submit" name="submit" value="toevoegen" required> 
</form>


</div>
</body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST["Naam"])) {

        if (isset($_POST['Serienummer'])) {
            //puts data into DB
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $insert = $conn->query("
            INSERT INTO
            apparatuur
            (
                naam,
                serienummer,
                model,
                type,
                Beschikbaarheid
                ) VALUES
            (
            '".$conn->real_escape_string($_POST['Naam'])."',
            '".$conn->real_escape_string($_POST['Serienummer'])."',
            '".$conn->real_escape_string($_POST['Model'])."',
            '".$conn->real_escape_string($_POST['Type'])."',
            '".$conn->real_escape_string($_POST['Beschikbaarheid'])."'
            )
            ");
        
            header("Location: database.php");
                
        
            }
        }

}
}

?>