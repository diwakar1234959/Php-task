<?php

    require_once "db.php";
    
    if(isset($_POST["submit"])){
  
    if(isset($_GET["id"]) && isset($_POST["username"]) && isset($_POST["gender"]) && isset($_POST["phno"]) && isset($_POST["email"]) && isset($_POST["subscription"])){
        $id = $_GET['id'];
        $username = $_POST['username'];
        $gender = $_POST['gender'];
        $phno = $_POST['phno'];
        $email = $_POST['email'];
        $subscription = $_POST['subscription'];
        

              

        
        $sql = "UPDATE users SET `username`= '$username',`gender`= '$gender', `phno`= '$phno', `email`= '$email', `subscription`= '$subscription' WHERE id= $id";


        if ($con->query($sql)==TRUE) {
            header("location: user_dashboard.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    
    }
}
  
?>