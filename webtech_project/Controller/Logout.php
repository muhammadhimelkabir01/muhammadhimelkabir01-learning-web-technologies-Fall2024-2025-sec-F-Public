<?php
session_start();
session_destroy();
header("Location: ../View/pharmacistlogin.php");
exit();
?>