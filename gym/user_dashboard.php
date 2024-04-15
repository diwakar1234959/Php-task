<!DOCTYPE html>
<head>
<script src="https://kit.fontawesome.com/bc0d876b43.js" crossorigin="anonymous"></script>
    <title>User Details</title>
    <style>
        body {
            background-color: #ADD8E6;
            margin-top: 100px;
            margin-left: 300px;
            margin-right: 300px;
        }

        .table {
            text-align: center;
        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            border: 1px solid black;
        }

        tr:hover {
            background-color: coral;
        }
        a{
            text-decoration:none;

        }
    </style>
</head>
<body>
<div class="table">
    <h1>User Details</h1>
    <button><a href="logout.php">Logout</a></button><br><br>
    <?php
    require_once "db.php";

    session_start();

    
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }

    $username = $_SESSION['username'];
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        ?>
        <table>
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Phone No</th>
                <th>Email</th>
                <th>Subscription</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['phno']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['subscription']; ?></td>
                <td><a href="up.php?id=<?php echo $row["id"]; ?>" class="edit">
                <i class="fa-solid fa-pen" style="color: black;"></i>
						</a></td>
            </tr>
            </tbody>
        </table>
        <?php
    } else {
        echo "User details not found.";
    }

    mysqli_close($con);
    ?>
</div>
</body>
</html>
