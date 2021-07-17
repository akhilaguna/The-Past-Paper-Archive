<?php
if(isset($_POST['submit']))
{
 $name = $_POST['name'];
 $email = $_POST['email'];
 $username = $_POST['uid'];
 $pwd = $_POST['pwd'];
 $pwdrepeat = $_POST['pwdrepeat'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat) !== false)
    {
        header("Location: ../signup.php?erro=emptyinput");
        exit();
    }
    if(invalidUid($username) !== false)
    {
        header("Location: ../signup.php?erro=invaliduid");
        exit();
    }
    if(invalidEmail($email) !== false)
    {
        header("Location: ../signup.php?erro=invalidemail");
        exit();
    }
    if(pwMatch($pwd, $pwdrepeat) !== false)
    {
        header("Location: ../signup.php?erro=passwordsdontmatch");
        exit();
    }
    if(uidExists($conn, $username, $email) !== false)
    {
        header("Location: ../signup.php?erro=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

}
else
{
    header("Location: ../index.php");
    exit();
}