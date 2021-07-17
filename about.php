<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="about.css">
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
                    <div class="section">  
                        <div class="container">
                            <div class="content-section">
                                <div class="title">
                                    <h1>About Us</h1>
                                </div>
                                <div class="content">
                                    <p><br><br> A significant problem us as students faced when doing our A/Ls was the difficulty in finding past papers
                                         and exam questions on the internet. The only reliable option was to buy printed copies of books that had compiled around
                                        10 years’ worth of papers. Even then some of the papers didn’t have the answer scripts, or the answer scripts were made 
                                        by someone other than the professors making the paper. <br><br>
                                        So, the challenge the five of us as a team have given ourselves is to design and develop a website that will give students,
                                        teachers and other interested parties the ability to access all of the available A/L past papers with their 
                                        original answer scripts at one place. They will be able to simply select the year, subject and relevant 
                                        medium (Sinhala/English) and acquire the desired paper and answers.  
                                    </p>
                                </div>
                            </div>
                            <div class="image-section">
                                <br>
                                <br>
                                <br>
                                <br>
                                <img src="images/sangga-rima-roman-selia-LWfFfA5U5z8-unsplash.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
</body>

</html>