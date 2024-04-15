<?php
include ("auth_session.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Dashboard - client area</title>
        <style>
            body {
            background: #3e4144;
                }
            .form {
            margin: 50px auto;
            width: 300px;
            padding: 30px 25px;
            background: white;
                  }

            </style>
</head>
<body>
    <div class="form">
        <p>Hey,<?php echo $_SESSION['username']; ?></p>
        <p> You are now in dashboard page</p>
        <p><a href="logout.php">Logout</a></p>
</div>
</body>
</html>