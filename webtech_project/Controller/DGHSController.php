<?php
session_start();
require_once("../Model/DGHSModel.php");

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $result = dghsLogin($user, $pass);
    
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['dghs'] = $user;
        header("Location: ../View/dghsdashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid Gov Credentials'); window.location.href='../View/dghslogin.php';</script>";
    }
}
?>