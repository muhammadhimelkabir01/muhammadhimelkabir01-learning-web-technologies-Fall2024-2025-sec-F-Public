<?php
require_once('db.php');

function dghsLogin($username, $password) {
    global $conn;
    $sql = "SELECT * FROM dghs_users WHERE username='{$username}' AND password='{$password}'";
    return mysqli_query($conn, $sql);
}

function getHospitalStats() {

    return [
        ['district' => 'Dhaka', 'hospitals' => 120, 'status' => 'Good'],
        ['district' => 'Chittagong', 'hospitals' => 85, 'status' => 'Warning'],
        ['district' => 'Sylhet', 'hospitals' => 40, 'status' => 'Good']
    ];
}
?>