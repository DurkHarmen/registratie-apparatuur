
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial;
        }
        .form-container {
            width: 600px;
            margin: 0 auto;
        }
        .form-field {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type=text], input[type=email], input[type=date], select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>uitleen Systeem</h1>

    <div class="form-container">
        <form action="" method="post">
            <div class="form-field">
                <label for="naam">Naam:</label>
                <input type="text" name="naam" id="naam" required />
            </div>
            <div class="form-field">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required />
            </div>
            <div class="form-field">
                <label for="product">product
                </label>
                <?php
                $conn = mysqli_connect("localhost","root","root","uitleen_systeem");

                //check if the connection was successful
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                $sql = "SELECT ID, naam, serienummer, model, type, beschikbaarheid FROM producten";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    //start creating the dropdown menu
    echo '<select name="product">';
    //loop through the results
    while($row = mysqli_fetch_assoc($result)) {
        echo '<option>' . " -naam: "  . $row['naam']. " -serienummer: " .$row['serienummer']. " -model: ".$row['model']. " -type:" . $row['type']. '</option>';
    }
    //end creating the dropdown menu
    echo '</select>';
} else {
    echo "0 results";
}

//close the connection

?>

            
                    
           
           

            </div>
            <div class="form-field">
                <label for="datumUitleen">Uitleen Datum:</label>
                <input type="date" name="datumUitleen" id="txtDate" min="<?php echo date("Y-m-d"); ?>" required/>
            </div>
            <div class="form-field">
                <label for="datumRetour">Retour Datum:</label>
                <input type="date" name="datumRetour" id="datumRetour" max="<?php echo date("Y-m-d", strtotime("+14 days"));?>" required />
            </div>
            <input type="submit" value="Verzenden">
        </form>
    </div>

    <?php
     
     $conn = new mysqli("localhost", "root", "root", "uitleen_systeem");
    

      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = array(
            "naam" => $_POST['naam'],
            "email" => $_POST['email'],
            "product" => $_POST['product'],
            "datumUitleen" => $_POST['datumUitleen'],
            "datumRetour" => $_POST['datumRetour']
        );

        $sql = "INSERT INTO uitleningen (naam, email, product, datumUitleen, datumRetour) VALUES ('".$data['naam']."', '".$data['email']."', '".$data['product']."', '".$data['datumUitleen']."', '".$data['datumRetour']."')";
        mysqli_query($conn, $sql);

        echo '<h2>Bedankt voor het lenen van het product, ' . $data['naam'] . '!</h2>';
        echo '<p>U heeft het product ' . $data['product'] . ' geleend op ' . $data['datumUitleen'] . ', en moet teruggebracht worden op ' . $data['datumRetour'] . '.</p>';
        echo '<p>We hebben een bevestigingsmail verzonden naar ' . $data['email'] . '.</p>';
    }
    
?>