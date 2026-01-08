<?php
session_start();
require_once("../Model/PharmacistModel.php");

if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        echo "<script>alert('Fields cannot be empty'); window.location.href='../View/pharmacistlogin.php';</script>";
        exit();
    }

    if (pharmacistLogin($email, $password)) {
        $_SESSION['pharmacist'] = true;
        header("Location: ../View/pharmacistdashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid Credentials'); window.location.href='../View/pharmacistlogin.php';</script>";
    }
}

// === AJAX HANDLER (JSON) ===
if (isset($_POST['action']) && $_POST['action'] == 'verify_prescription') {
    $pid = $_POST['prescription_id'];
    $data = getPrescriptionData($pid);

    if ($data) {
        echo json_encode(["success" => true, "data" => $data]);
    } else {
        echo json_encode(["success" => false, "message" => "ID Not Found"]);
    }
    exit;
}
?>