<!DOCTYPE html>
<html lanh="en">
    <head>
    <style>
        body{
            border:2px solid black;
            margin-top:100px;
            margin-left:400px;
            margin-right:400px;
            background-color:#ADD8E6;
        }
        .fm{
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
    <div class="body">
<?php 

                require_once "db.php";
                $sql_query = "SELECT * FROM users WHERE id = ". $_GET["id"];
        
                if ($result = $con->query($sql_query)) {
                    while ($row = $result->fetch_assoc()) { 
                        $id = $row['id'];
                        $username = $row['username'];
                        $gender = $row['gender'];
                        $phno = $row['phno'];
                        $email = $row['email'];
                        // $subscription = $row['subscription'];
                        
            ?>
<form class="fm" action="up_data.php?id=<?php echo $id;?>" method="post"> 
<h1>Update Form</h1><br>
        <input type="text" class="login-input" name="username" placeholder="Username" value="<?php echo $username ?>" required /><br><br>
        <label for="Gender">Gender:</label>
        <input type="radio" class="login-input" name="gender" value="Male" <?php if($gender == "Male"){ echo "checked"; } ?> required>
        <label for="Male" value="Male">Male</label>
        <input type="radio" class="login-input" name="gender" value="Female" <?php if($gender == "Female"){ echo "checked"; } ?> required>
        <label for="Female" value="Female">Female</label><br><br>
        <input type="number" class="login-input" name="phno" placeholder="Phone Number" value="<?php echo $phno ?>"><br><br>
        <input type="text" class="login-input" name="email" placeholder="Email Adress" value="<?php echo $email ?>"><br><br>
        <!-- <label for="subscription">Subscription:</label>
     -->
        <!-- <select name="subscription" >
            <option>Select Your Option</label>
            <option value="Silver"<?php if($subscription == "Silver"){ echo "Selected"; } ?>>Silver</option>
            <option value="Gold"<?php if($subscription == "Gold"){ echo "Selected"; } ?>>Gold</option>
            <option value="Platinum"<?php if($subscription == "Platinum"){ echo "Selected"; } ?>>Platinum</option>
    </select><br><br> -->
    <input type="submit" name="submit" value="Submit" class="submit" ><br><br>      
</form>
<?php
                    }
                }
?>
</body>
    </html>
