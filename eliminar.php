<?php
include('db.php');

if(isset($_GET['ref'])){
    $ref = $_GET['ref'];

    $query = "DELETE FROM productos WHERE ref = $ref";
    $result = mysqli_query($conn,$query);
    
    header("Location: tabla.php");
}

?>