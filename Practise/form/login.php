<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title> 
    
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #ADD8E6;
}
.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
  background-image: url("admin.jpg");
  background-size: 420px 320px;
  background-repeat: no-repeat;
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  background: #4070f4;
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 42px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 15px;
  font-weight: 300;
  color: #333;
  border: 1.5px solid #4070f4;
  border-bottom-width: 1.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: black;
}
/* form .policy{
  display: flex;
  align-items: center;
} */
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #4070f4;
  cursor: pointer;
}
.input-box.button input:hover{
  background: black;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #4070f4;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
  color:black;
}
        </style>
   </head>
<body>
    <?php
    require ('db.php');
    session_start();
    if(isset($_POST['username'])){
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);
        // print_r($username);
        // $email = stripslashes($_REQUEST['email']);
        // $email = mysqli_real_escape_string($conn,$email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn,$password);
        // print_r($password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "SELECT * FROM `users` WHERE username='$username'AND password='" . md5($password) . "'";
        $result   = mysqli_query($conn, $query) or die(mysql_error());
        $rows =mysqli_num_rows($result);
        if ($_POST["username"] != "" && $_POST["password"] != "") {
          $_SESSION["logged_in"] = true;
           header("Location:index.php");
        } else {
            echo "<div class='form'>
            <h3>Incorrect Username/password.</h3><br/>
            <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
            </div>";
        }
    } else {
    ?>
    
  <div class="wrapper">
    <h2>Login</h2>
    <form class="form" action="#" method="post" name="login">
      <div class="input-box">
        <input type="text" name="username" placeholder="User name" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Login">
      </div>
      <div class="text">
        <h3>Don't have an account? <a href="registration.php">Register now</a></h3>
      </div>
    </form>
    <?php
    }
    ?>
  </div>
</body>
</html>
