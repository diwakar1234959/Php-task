<?php
    session_start();
    if ($_POST["username"] === "admin" && $_POST["password"] === "adminpassword") {
        $_SESSION["is_admin"] = true;
        $_SESSION["admin_username"] = $_POST["username"];
        header("Location: admin_dashboard.php");
        exit();
    }
?>