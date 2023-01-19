<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #dddddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #dddddd;
    text-align: center; 
}

form {
    display: inline-block;
}

input[type='submit'] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type='submit']:hover {
    background-color: #45a049;
}

        </style>
</head>
<body>
    


    
</body>
</html>
<?php
$conn = mysqli_connect("localhost","root","root","uitleen_systeem");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

     $result = mysqli_query($conn, "SELECT naam, email, product, datumUitleen, datumRetour, id FROM uitleningen");
     echo "<table>";
     echo "<tr>";
     echo "<th>Naam</th>";
     echo "<th>Email</th>";
     echo "<th>Product</th>";
     echo "<th>Datum Uitleen</th>";
     echo "<th>Datum Retour</th>";
     echo "<th>ingeleverd</th>";
     echo "</tr>";
     
     while($row = mysqli_fetch_assoc($result)) {
         echo "<tr>";
         echo "<td>" . $row['naam'] . "</td>";
         echo "<td>" . $row['email'] . "</td>";
         echo "<td>" . $row['product'] . "</td>";
         echo "<td>" . $row['datumUitleen'] . "</td>";
         echo "<td>" . $row['datumRetour'] . "</td>";
         echo "<td> <form method='post' action='delete.php'>
                <input type='hidden' name='id' value='".$row['id']."'>
                <input type='submit' value='ingeleverd'>
                </form> </td>";
         echo "</tr>";
     }
     echo "</table>";
 
     mysqli_close($conn);
 ?>
