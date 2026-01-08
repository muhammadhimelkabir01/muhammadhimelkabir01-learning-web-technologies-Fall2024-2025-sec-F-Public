<?php
session_start();
if (!isset($_SESSION['dghs'])) {
    header("Location: dghslogin.php");
    exit();
}
require_once("../Model/DGHSModel.php");
$stats = getHospitalStats(); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>DGHS Dashboard</title>
    <link rel="stylesheet" href="../style.css">

    <style>
        body {
            font-family: sans-serif; 
        }
        fieldset {
            width: 70%; 
            margin: 0 auto; 
            min-width: 600px;
            border: 1px solid #ddd;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            text-align: center; 
            padding: 12px;
            border: 1px solid #ddd; 
        }
       
        th:first-child, td:first-child {
            text-align: left; 
            padding-left: 15px;
        }
     
        .audit-btn {
            background-color: #A52A2A; 
            color: white; 
            padding: 5px 15px; 
            border: none; 
            cursor: pointer;
            border-radius: 4px;
        }
        .logout-btn {
            width: 200px; 
            background-color: #f44336;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h1 class="dotted" style="text-align: center;">National Health Dashboard</h1>
    
    <div style="text-align: center;">
        <fieldset>
            <legend style="color:red; font-weight: bold;">Hospital Compliance Monitoring</legend>
            
            <table>
                <tr style="background-color: #eee;">
                    <th>Region/District</th>
                    <th>Registered Hospitals</th>
                    <th>Compliance Status</th>
                    <th>Action</th>
                </tr>
                
                <?php foreach($stats as $row) { ?>
                <tr>
                    <td><?php echo $row['district']; ?></td>
                    <td><?php echo $row['hospitals']; ?></td>
                    <td style="font-weight: bold; color: <?php echo ($row['status']=='Good')?'green':'red'; ?>;">
                        <?php echo $row['status']; ?>
                    </td>
                    <td><button class="audit-btn">Audit</button></td>
                </tr>
                <?php } ?>
            </table>
            
            <br><br>
            <a href="../Controller/Logout.php"><button class="logout-btn">Logout</button></a>
        </fieldset>
    </div>
</body>
</html>