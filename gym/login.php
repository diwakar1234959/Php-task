<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
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
    if(isset($_SESSION['username']) || isset($_SESSION['admin_username'])) {
       
    echo "Sorry, another user is already logged in. Please log out to continue.";
    exit();
    }
    if (isset($_POST['username'])) {
        // print_r($_POST);
        $username = stripslashes($_REQUEST['username']); 
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($_POST["username"] === "admin" && $_POST["password"] === "adminpassword") {
            $_SESSION["is_admin"] = true;
            $_SESSION["admin_username"] = $_POST["username"];
            header("Location: dashboard.php");
            exit();
        }
        if ($rows >= 1) {
            $_SESSION['username'] = $username;
            header("Location: package.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    }  else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/><br><br>
        <input type="password" class="login-input" name="password" placeholder="Password"/><br><br>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Registration</a></p>
  </form>
<?php
    }
?>
</body>
</html>