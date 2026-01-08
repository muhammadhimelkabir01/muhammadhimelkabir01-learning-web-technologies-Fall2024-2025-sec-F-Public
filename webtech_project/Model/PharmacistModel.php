<?php
require_once('db.php');

function pharmacistLogin($email, $password) {
    global $conn;
    $sql = "SELECT * FROM pharmacists WHERE email='{$email}' AND password='{$password}'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        return true;
    }
    return false;
}


function getPrescriptionData($pid) {
    global $conn;
    $sql = "SELECT * FROM prescriptions WHERE prescription_code='{$pid}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        return [
            "status" => $row['status'],
            "doctor" => $row['doctor_name'],
            "patient" => $row['patient_name'],
            "drug" => $row['medicine_list']
        ];
    } else {
        return null;
    }
}
?>