<?php
include("database.php");
?>
<html>
    <head> 
        <style>
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }
            td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
              }
            </style>
    </head>
    <body> 
 <!--    <table>
        <tr>
        <th>ID  </th>
    <th>Naam</th>
    <th>Serienummer</th>
    <th>Model</th>
    <th>Type</th>
    <th>Beschikbaarheid</th>
</tr>
<tr>
    <td> AOC 24B2XH 24 inch </td>
    <td> Samsung LS24R350 24 Inch </td>
    <td> Canon EOS 2000D </td>
</tr>
<tr>
    <td> CAMUX HD7-S Action camera </td>
    <td> </td>
    <td></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td></td>
</tr>
</table>
    </body>
</html>-->
<?php
/*$sql = "SELECT ID, naam, serienummer, model, type FROM apparatuur";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["ID"]. " - naam: " . $row["naam"]. " - serienummer: ". $row["serienummer"]. " - model: " . $row["model"]. " - type: " . $row["type"]. "<br>";
  }
} else {
  echo "0 results";
}*/
$sql = "SELECT ID, naam, serienummer, model, type, beschikbaarheid FROM apparatuur ";
$result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function
echo "<br>";
echo "<table border='1'>";
while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
    echo "<tr>";
    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
    }
    echo "</tr>";
}
echo "</table>";
$conn->close();
        