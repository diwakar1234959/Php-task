<?php

?>

<!DOCTYPE html>
<head>
    <script src="https://kit.fontawesome.com/bc0d876b43.js" crossorigin="anonymous"></script>
    <title>Admin</title>
    <style>
        body{
            background-color:#ADD8E6;
            margin-top:50px;
            margin-left:170px;
            margin-right:200px;
            margin-bottom:100px;
        }
        .table{
            text-align:center;
        }
        table {
   border: 1px solid black;
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  border: 1px solid black;
}
a{
    text-decoration:none;
}

/* tr:hover {
    background-color: coral;
} */
        </style>
</head>
<body>
    <div class="table">
        <h1>Gym User Table</h1>
        <button><a href="logout.php">Logout</a></button><br><br>
        <button><a href='package_index.php' class='edit'>Package Management</a></button><br><br>
    <?php
    session_start();
    require_once "db.php";

    if (empty( $_SESSION["admin_username"])) {
    header("Location: login.php");
    exit();
     }
   
    $sql = "SELECT * FROM users";
    if($result = mysqli_query($con, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo '<table>';
                echo "<thead>";
                    echo "<tr>";
                        echo "<th>Id</th>";
                        echo "<th>Name</th>";
                        echo "<th>Gender</th>";
                        echo "<th>Phone No</th>";
                        echo "<th>Email</th>";
                        echo "<th>Subscription</th>";
                        echo "<th>Price</th>";
                        echo "<th>Date&Time</th>";
                        echo "<th>Status</th>"; 
                        // echo "<th>Package</th>";
                        echo "<th>Edit</th>";
                        echo "<th>View</th>";
                        echo "<th>Delete</th>";
                        
                        
                    echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['gender'] . "</td>";
                        echo "<td>" . $row['phno'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['subscription'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . $row['create_datetime'] . "</td>";
                        echo "<td>";
                        echo ($row['status'] == 1) ? "Paid" : "<button><a href='status_reg.php?id=".$row["id"]."' class='edit'>Not Paid</a></button>";
                        echo "</td>";

                        

                        // echo "<td></td>";
                        echo "<td><a href='up.php?id=" . $row["id"] . "' class='edit'><i class='fa-solid fa-pen' style='color: black;'></i></a></td>";
                        echo "<td><a href='view.php?id=" . $row["id"] . "' class='edit'><i class='fa-solid fa-eye' style='color: black;'></i></a></td>";
                        echo "<td><a href='delete.php?id=" . $row["id"] . "' class='edit'><i class='fa-solid fa-trash' style='color: black;'></i></a></td>";
                        echo "</tr>";
                }
                echo"</tbody>";
            echo"</table>";
            mysqli_free_result($result);
        }else{
            echo "No records found";
        }
    }else{
        echo "Please try again";
    }

    
    mysqli_close($con);
?>

                                </div>
</body>
</html>