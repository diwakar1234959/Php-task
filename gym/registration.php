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
    require('db.php');
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $gender   = $_REQUEST['gender'];
        $phno     =$_REQUEST['phno'];
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        // $subscription =$_REQUEST['subscription'];
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("d-m-Y H:i:s");
        $query    = "INSERT into `users` (username,gender,phno,email, password, create_datetime)
                     VALUES ('$username','$gender','$phno','$email', '" . md5($password) . "','$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required /><br><br>
        <label for="Gender">Gender:</label>
        <input type="radio" class="login-input" name="gender" value="Male" required>
        <label for="Male" value="Male">Male</label>
        <input type="radio" class="login-input" name="gender" value="Female" required>
        <label for="Female" value="Female">Female</label><br><br>
        <input type="number" class="login-input" name="phno" placeholder="Phone Number"><br><br>
        <input type="text" class="login-input" name="email" placeholder="Email Adress"><br><br>
        <!-- <label for="subscription">Subscription:</label>
        <select name="subscription">
            <option>Select Your Option</label>
            <option value="Annual">Annual</option>
            <option value="Half-yearly">Half-yearly</option>
            <option value="Quartely">Quartely</option>
    </select><br><br> -->
        <input type="password" class="login-input" name="password" placeholder="Password"><br><br>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>