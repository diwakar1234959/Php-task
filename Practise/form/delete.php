<?php
require_once "conn.php";
    $id = $_GET["id"];
    echo"$id";  
    $query = "DELETE FROM results WHERE id = '$id'";
    if ($conn->query($query)==TRUE){
        header("location: index.php");
    } else {
         echo "Something went wrong".$conn->query($query);
    }
?> 