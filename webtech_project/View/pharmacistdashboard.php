<?php
session_start();
if (!isset($_SESSION['pharmacist'])) { header("Location: pharmacistlogin.php"); exit(); }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pharmacist Dashboard</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h1 class="dotted" align="center">Pharmacist Dashboard</h1>
<form align="center">
    <fieldset>
        <legend style="color:red;">Actions</legend>
        <table class="tablelayout">
            <tr><td>Verify Prescription </td><td><a href="verify_prescription.php"><button type="button">Go</button></a></td></tr>
            <tr><td></td><td><a href="../Controller/Logout.php"><button type="button">Logout</button></a></td></tr>
        </table>
    </fieldset>
</form>
</body>
</html>