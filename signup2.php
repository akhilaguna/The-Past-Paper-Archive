<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
<div>
        <br>
        <br>
        <br>
    <h1>Sign Up</h1>
    <form action="includes/signup.inc.php" method="POST">
        <table>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="name" placeholder="Full name..."></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" placeholder="Email..."></td>
            </tr>
            <tr>
                <td>User ID:</td>
                <td><input type="text" name="uid" placeholder="Username..."></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pwd" placeholder="Password..."></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="pwdrepeat" placeholder=" Re-enter Password..."></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Sign Up</button></td>
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
        else if($_GET["error"] == "invaliduid")
        {
            echo "<p>Choose a proper username</p>"; 
        }
        else if($_GET["error"] == "invalidemail")
        {
            echo "<p>Choose a proper email</p>"; 
        }
        else if($_GET["error"] == "passwordsdontmatch")
        {
            echo "<p>Passwords don't match</p>"; 
        }
        else if($_GET["error"] == "stmtfailed")
        {
            echo "<p>Something went wrong. Please try again</p>"; 
        }
        else if($_GET["error"] == "usernametaken")
        {
            echo "<p>Username already exists, chosse a different one</p>"; 
        }
        else if($_GET["error"] == "none")
        {
            echo "<p>Sign Up Successful</p>"; 
        }

    }
    ?>
</div>
</body>
</html>