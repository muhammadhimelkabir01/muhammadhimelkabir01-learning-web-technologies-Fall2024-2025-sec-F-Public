<!DOCTYPE html>
<html>
<head>
    <title>Pharmacist Login</title>
    <link rel="stylesheet" href="../style.css">
    <script>
        function validateLoginForm() {
            let email = document.forms["loginForm"]["email"].value;
            let password = document.forms["loginForm"]["password"].value;

            if (email == "") { alert("Email needed"); return false; }
            if (password.length < 5) { alert("Password too short"); return false; }
            return true;
        }
    </script>
</head>
<body>
<h1 class="dotted" align="center">Pharmacist Login</h1>
<form name="loginForm" align="center" action="../Controller/PharmacistController.php" method="post" onsubmit="return validateLoginForm()">
    <fieldset>
        <legend style="color:red;">Pharmacist Access</legend>
        <table class="tablelayout">
            <tr><td>Email:</td><td><input type="text" name="email" placeholder="pharma@bdhr.com"></td></tr>
            <tr><td>Password:</td><td><input type="password" name="password"></td></tr>
            <tr><td></td><td><button type="submit" name="login">Login</button></td></tr>
        </table>
    </fieldset>
</form>
</body>
</html>