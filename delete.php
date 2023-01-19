
<?php
    
    $conn = mysqli_connect("localhost", "root", "root", "uitleen_systeem");

  
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $query = "DELETE FROM uitleningen WHERE id = $id";
    mysqli_query($conn, $query);

    
    mysqli_close($conn);
header('location:werwijderdatabase.php')
?>