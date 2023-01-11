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
                <label for="product">camera
                </label>
                <select name="product" id="camera">
                    <option value="panasonic">panasonic</option>
                    <option value="cannon">cannon</option>
                    <option value="sony">sony</option>
                    <option value="gopro">gopro</option>
                </select>
            <br></br>
            <label for="product">monitor
                </label>
                <select name="product" id="monitor">
                    <option value="monitor 1">monitor 1</option>
                    <option value="monitor 2">monitor 2</option>
                    <option value="monitor 3">monitor 3</option>
                    <option value="monitor 4">monitot</option>
                    <br></br>
                    
                    <label for="product">lader</label>
                <select name="product" id="lader">
                    <option value="monitor 1">lader 1</option>
                    <option value="monitor 2">lader 2</option>
                    <option value="monitor 3">lader 3</option>
                    <option value="monitor 4">lader 4</option>
                    <br></br>

                    <label for="product">laptop</label>
                <select name="product" id="laptop">
                    <option value="laptop 1">laptop 1</option>
                    <option value="laptop 2">laptop 2</option>
                    <option value="laptop 3">laptop 3</option>
                    <option value="laptop 4">laptop 4</option>
                    <br></br>
                    
           
           

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
