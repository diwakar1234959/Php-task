<?php

    require_once "db.php";
    session_start();
    if(isset($_POST["submit"])){
  
    if(isset($_GET["id"]) && isset($_POST["username"]) && isset($_POST["gender"]) && isset($_POST["phno"]) && isset($_POST["email"])){
        $id = $_GET['id'];
        $username = $_POST['username'];
        $gender = $_POST['gender'];
        $phno = $_POST['phno'];
        $email = $_POST['email'];
        $subscription = $_POST['subscription'];

        if($_SESSION['username'] == $username) {
          $redirectPage = "user_dashboard.php"; 
      } else {
          $redirectPage = "dashboard.php"; 
      }

              

        
        $sql = "UPDATE users SET `username`= '$username',`gender`= '$gender', `phno`= '$phno', `email`= '$email' WHERE id= $id";


        if ($con->query($sql)==TRUE) {
            header("location: $redirectPage");
            exit();
        } else {
            echo "Something went wrong. Please try again later.";
        }
    
    }
}
  
?>