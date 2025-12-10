<?php
// Error massage will show here
$nameErr = $emailErr = $dateErr = $genderErr = $hobbyErr = $bgErr = "";
$name = $email = $day = $month = $year = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
    if (empty($_POST["name"])) {
        $nameErr = "Name cannot be empty";
    } else {
        $name = $_POST["name"];

        if (!preg_match("/^[A-Za-z][A-Za-z .-]*$/", $name)) {
            $nameErr = "Name must start with a letter and contain only letters, ., -";
        }

        if (str_word_count($name) < 2) {
            $nameErr = "Name must contain at least two words";
        }
    }

    // Task 2
    if (empty($_POST["email"])) {
        $emailErr = "Email cannot be empty";
    } else {
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Task 3
    $day = $_POST["day"];
    $month = $_POST["month"];
    $year = $_POST["year"];

    if (empty($day) || empty($month) || empty($year)) {
        $dateErr = "Date fields cannot be empty";
    } else {
        if ($day < 1 || $day > 31) $dateErr = "Day must be 1-31";
        elseif ($month < 1 || $month > 12) $dateErr = "Month must be 1-12";
        elseif ($year < 1953 || $year > 1998) $dateErr = "Year must be 1953-1998";
    }

    // Task 4
    if (empty($_POST["gender"])) {
        $genderErr = "Please select one option";
    }

    // Task 5
    if (empty($_POST["hobby"])) {
        $hobbyErr = "Select at least two hobbies";
    } else {
        if (count($_POST["hobby"]) < 2) {
            $hobbyErr = "Select at least two options";
        }
    }

    // Task 6
    if (empty($_POST["bg"])) {
        $bgErr = "Select a blood group";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Validation Lab</title>
</head>
<body>

<h2>PHP Form Validation - All Tasks</h2>
<form method="post">

    <!-- Task 1 -->
    <h3>1. Name</h3>
    <input type="text" name="name">
    <span style="color:red;"><?php echo $nameErr; ?></span><br><br>

    <!-- Task 2 -->
    <h3>2. Email</h3>
    <input type="text" name="email">
    <span style="color:red;"><?php echo $emailErr; ?></span><br><br>

    <!-- Task 3 -->
    <h3>3. Date of Birth</h3>
    DD: <input type="number" name="day" style="width:60px;">
    MM: <input type="number" name="month" style="width:60px;">
    YYYY: <input type="number" name="year" style="width:80px;">
    <span style="color:red;"><?php echo $dateErr; ?></span><br><br>

    <!-- Task 4 -->
    <h3>4. Gender</h3>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Other"> Other
    <span style="color:red;"><?php echo $genderErr; ?></span><br><br>

    <!-- Task 5 -->
    <h3>5. Hobbies</h3>
    <input type="checkbox" name="hobby[]" value="Reading"> Reading
    <input type="checkbox" name="hobby[]" value="Sports"> Sports
    <input type="checkbox" name="hobby[]" value="Music"> Music
    <span style="color:red;"><?php echo $hobbyErr; ?></span><br><br>

    <!-- Task 6 -->
    <h3>6. Blood Group</h3>
    <select name="bg">
        <option value="">--Select--</option>
        <option>A+</option>
        <option>A-</option>
        <option>B+</option>
        <option>B-</option>
        <option>O+</option>
        <option>O-</option>
        <option>AB+</option>
        <option>AB-</option>
    </select>
    <span style="color:red;"><?php echo $bgErr; ?></span><br><br>

    <input type="submit" value="Submit">

</form>

</body>
</html>
