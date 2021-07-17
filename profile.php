<?php
    session_start();
    include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fixed.css">
</head>

<body data-spy="scroll" data-target="#navbarResponsive">
    <div id="home">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a href="index.html" class="navbar-brand"><img src="images/PPA-edit.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"> 
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="team.php" class="nav-link">Team</a>
                </li>
                <?php
                            if(isset($_SESSION["useruid"]))
                            {
                                echo "<li class='nav-item'><a href='profile.php' class='nav-link'>Profile</a></li>";
                                echo "<li class='nav-item'><a href='includes/logout.inc.php' class='nav-link'>Logout</a></li>";
                            }
                            else
                            {
                                echo "<li class='nav-item'><a href='login.php' class='nav-link'>Login</a></li>";
                                echo "<li class='nav-item'><a href='signup.php' class='nav-link'>Signup</a></li>";  
                            }
        		?>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
        </nav>
        <!--Start landing page-->
        <div class="landing">
            <div class="home-wrap">
                <div class="home-inner">
                    <img src="images/humberto-chavez-InrNz281-S8-unsplash.png" alt="" id="bimg">
                </div>
            </div>
        </div>    
            <div class="caption text-center">
            <h3>Account Details</h3>
                <?php
                    $user = $_SESSION["userid"];
                    $sql = "SELECT usersName, usersEmail, usersUid FROM users WHERE usersId = $user;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    if($resultCheck > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo $row['usersName'] . "<br>";
                            echo $row['usersEmail'] . "<br>";
                            echo $row['usersUid'] . "<br>";
                        }
                    }
                ?>
                <br>
                <form action="update.php">
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </form>
                <form action="delete.php" method="POST">
                    <br>
                    <button type="submit" name="delete" class="btn btn-primary">Delete</button>
                </form>
            </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
</body>

</html>