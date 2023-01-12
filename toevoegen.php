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
<select name="Beschikbaarheid" >
    <option> Beschikbaar </option> 
    <option> Niet beschikbaar </option>
    <option> Kapot </option>
</select>   
 
<br><br><br><br><input type="submit" name="submit" value="toevoegen" > 
</form>


</div>
</body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    /*$naam = $_POST["naam"];
    $naam = $_POST["serienummer"];
    $naam = $_POST["model"];
    $naam = $_POST["type"];
    $naam = $_POST["Beschikbaarheid"];

    if(!empty($Naam))
    if(!empty($Serienummer))
    if(!empty($model))
    if(!empty($type))
    if(!empty($beschikbaarheid))
    if (isset($_POST["Naam"])) */{

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
            
            header("Location: file-upload-download/uploads/index.php");
                                    die;
            }else 
                                    {
                                        echo"uw heeft niet alles ingevuld";
                                    }
                                
        
            }
        }

}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
    <style>
    form {
  width: 30%;
  margin: 100px auto;
  padding: 30px;
  border: 1px solid #555;
}
input {
  width: 100%;
  border: 1px solid #f1e1e1;
  display: block;
  padding: 5px 10px;
}
button {
  border: none;
  padding: 10px;
  border-radius: 5px;
}
table {
  width: 60%;
  border-collapse: collapse;
  margin: 100px auto;
}
th,
td {
  height: 50px;
  vertical-align: center;
  border: 1px solid black;
}
</style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="index.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
  </body>
</html>