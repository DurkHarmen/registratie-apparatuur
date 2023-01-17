<?php
//connect to the database
$conn = mysqli_connect("localhost","root","root","uitleen_systeem");

//check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//write the query
$sql = "SELECT ID, naam, serienummer, model, type, beschikbaarheid FROM producten";

//run the query
$result = mysqli_query($conn, $sql);

//check if the query was successful
if (mysqli_num_rows($result) > 0) {
    //start creating the dropdown menu
    echo '<select>';
    //loop through the results
    while($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' .$row['ID'] .$row['naam']. '">' .$row['serienummer'] .$row['naam']. '</option>';
    }
    //end creating the dropdown menu
    echo '</select>';
} else {
    echo "0 results";
}

//close the connection

?>