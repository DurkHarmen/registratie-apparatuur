<?php
$conn = mysqli_connect("localhost", "root", "root", "uitleen_systeem");


if (isset($_POST['submit'])) {
  
  $id = $_POST['id'];
  $naam = $_POST['naam'];
  $serienummer = $_POST['serienummer'];
  $model = $_POST['model'];
  $type = $_POST['type'];
  $beschikbaarheid = $_POST['beschikbaarheid'];
  
  
  $sql = "UPDATE producten SET naam='$naam', serienummer='$serienummer', model='$model', type='$type', beschikbaarheid='$beschikbaarheid' WHERE id='$id'";
  mysqli_query($conn, $sql);
  
  
  
}


$id = $_GET['ID'];
$sql = "SELECT ID, naam, serienummer, model, type, beschikbaarheid FROM producten WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result);


mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Product</title>
</head>
<body>
  <h1>Edit Product</h1>
  <form action="" method="post">
    <label for="select_product">Select Product:</label>
    <select name="id" id="select_product">
      <?php
      
      $conn = mysqli_connect("localhost", "root", "root", "uitleen_systeem");
      $sql = "SELECT ID, naam, serienummer, model, type FROM producten";

      
      $result = mysqli_query($conn, $sql);
      while ($product = mysqli_fetch_assoc($result)) {
        echo "<option value='" . $product['ID'] . "'>" . $product['naam'].  " " . $product['serienummer']. " ". $product['model']. "    " . $product['type'] ."</option>";
      }


      mysqli_close($conn);
      ?>
    </select>
    <br>
    <label for="naam">Naam:</label>
    <input type="text" name="naam" id="naam" value="">
    <br>
    <label for="serienummer">Serienummer:</label>
    <input type="text" name="serienummer" id="serienummer" value="">
    <br>
    <label for="model">Model:</label>
    <input type="text" name="model" id="model" value="">
    <br>
    <label for="type">Type:</label>
    <input type="text" name="type" id="type" value="">
    <br>
    <label for="beschikbaarheid">Beschikbaarheid:</label>
<select name="beschikbaarheid" id="beschikbaarheid">
  <option value="beschikbaar" <?php if($product['beschikbaarheid'] == 'beschikbaar') echo 'selected'; ?>>Beschikbaar</option>
  <option value="niet beschikbaar" <?php if($product['beschikbaarheid'] == 'niet beschikbaar') echo 'selected'; ?>>Niet Beschikbaar</option>
  <option value="kapot" <?php if($product['beschikbaarheid'] == 'kapot') echo 'selected'; ?>>Kapot</option>
</select>
    <br>
    <input type="submit" name="submit" value="Update">
  </form>
</body>
</html>
