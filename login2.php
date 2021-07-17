<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div>
        <br>
        <br>
        <br>
    <h1>Log In</h1>
    <form action="includes/login.inc.php" method="POST">
        <table>
            <tr>
                <td>User ID or Email:</td>
                <td><input type="text" name="uid" placeholder="Username/Email..."></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pwd" placeholder="Password..."></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Log In</button></td>
            </tr>
        </table>
        <a href="index.php">Home</a>
    </form>
    <?php
    if(isset($_GET["error"]))
    {
        if($_GET["error"] == "emptyinput")
        {
            echo "<p>Fill in all fields</p>";
        }
        else if($_GET["error"] == "wronglogin")
        {
            echo "<p>Incorrect login information</p>"; 
        }
    }
    ?>
</div>
</body>
</html>