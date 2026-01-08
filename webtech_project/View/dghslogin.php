<!DOCTYPE html>
<html>
<head><title>DGHS Login</title><link rel="stylesheet" href="../style.css"></head>
<body>
<h1 class="dotted" align="center">Govt. Access (DGHS)</h1>
<form action="../Controller/DGHSController.php" method="post" align="center">
    <fieldset>
        <legend style="color:red;">Official Login</legend>
        <table class="tablelayout">
            <tr><td>Username:</td><td><input type="text" name="username" placeholder="dghs_admin"></td></tr>
            <tr><td>Password:</td><td><input type="password" name="password"></td></tr>
            <tr><td></td><td><button type="submit" name="login">Login</button></td></tr>
        </table>
    </fieldset>
</form>
</body>
</html>