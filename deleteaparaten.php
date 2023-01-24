
<?php

    
    $conn = mysqli_connect("localhost", "root", "root", "uitleen_systeem");

  
    $ID = mysqli_real_escape_string($conn, $_POST['ID']);

    $query = "DELETE FROM apparatuur WHERE ID = $ID";
    mysqli_query($conn, $query);

    
    mysqli_close($conn);
header('location:verwijderaparaten.php')
?>