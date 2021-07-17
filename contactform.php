<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $messege = $_POST['messege'];

    $mailTo = "thepastpaperarchive@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have recieved an email from ".$name.".\n\nSubject: ".$subject."\n\nMessege: ".$messege;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}

?>