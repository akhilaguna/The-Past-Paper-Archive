<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="=device-, initial-scale=1.0">
    <title>Team</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="team.css">
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
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="images/akhila.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Akhila</h5>
                                  <p class="card-text">
                                      <ul>
                                          <li>20447</li>
                                          <li>BSc (Hons) Software Engineering (UGC)</li>
                                          <li>aigunawardena@students.nsbm.ac.lk</li>
                                      </ul>
                                  </p>
                                  <a href="https://github.com/akhilaguna" class="btn btn-primary">GitHub</a>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="images/osanda.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Osanda</h5>
                                  <p class="card-text">
                                    <ul>
                                        <li>20956</li>
                                        <li>BSc (Hons) Software Engineering (UGC)</li>
                                        <li>ohwalawage@students.nsbm.ac.lk</li>
                                    </ul>
                                  </p>
                                  <a href="https://github.com/Osandahimsara" class="btn btn-primary">GitHub</a>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="images/hiruni.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Hiruni</h5>
                                  <p class="card-text">
                                    <ul>
                                        <li>20452</li>
                                        <li>BSc (Hons) Computer Science (UGC)</li>
                                        <li>whkeshika@students.nsbm.ac.lk</li>
                                    </ul>
                                  </p>
                                  <a href="https://github.com/hirunikeshika9600" class="btn btn-primary">GitHub</a>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="images/Kaushi.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Kaushalya</h5>
                                  <p class="card-text">
                                    <ul>
                                        <li>18006</li>
                                        <li>Web and Mobile Application Development (VU)</li>
                                        <li>jgksandamini@students.nsbm.ac.lk</li>
                                    </ul>
                                  </p>
                                  <a href="https://github.com/jgksandamini" class="btn btn-primary">GitHub</a>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="images/sanu.JPG" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Sanjana</h5>
                                  <p class="card-text"><ul>
                                    <li>18079</li>
                                    <li>Web and Mobile Application Development (VU)</li>
                                    <li>klsmeenakshi@students.nsbm.ac.lk</li>
                                </ul></p>
                                  <a href="https://github.com/sanjanameenakshi" class="btn btn-primary">GitHub</a>
                                </div>
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