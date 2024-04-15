<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <style>
        body{
            border:2px solid black;
            margin-top:100px;
            margin-left:400px;
            margin-right:400px;
            background-color:#ADD8E6;
        }
        .form{
            padding:10px;
            text-align:center;

        }
        a{
            text-decoration:none;
            border:1px solid black;
            background-color:red;
            color:black;
            font-weight:bold;
        }
        </style>
</head>
<body>
<?php
session_start();
    require('db.php');
    if (empty( $_SESSION["admin_username"])) {
        header("Location: login.php");
        exit();
         }
       
    if (isset($_REQUEST['package'])) {
        $package = $_REQUEST['package'];
        $price = $_REQUEST['price'];
        $duration = $_REQUEST['duration'];
        $query    = "INSERT into `packages` (package,price,duration)
                     VALUES ('$package','$price','$duration')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            header("Location: package_index.php");
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='package_reg.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Package</h1>
        <input type="text" class="login-input" name="package" placeholder="Package" required /><br><br>
        <input type="number" class="login-input" name="price" placeholder="Price"><br><br>
        <input type="text" class="login-input" name="duration" placeholder="Duration"><br><br>
        <input type="submit" name="submit" value="submit" class="login-button">
    </form>
<?php
    }
?>
</body>
</html>