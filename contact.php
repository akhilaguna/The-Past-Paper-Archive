<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="contact.css">
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
                    <div class="section">
                        <div class="container">
                            <section class="mb-4">
                                <h2 class="h1-responsive font-weight-bold text-center my-5">Contact Us</h2>
                                <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help.
                                </p>
                                <div class="row">
                                    <div class="col-md-9 mb-md-0 mb-5">
                                        <form id="contact" action="contactform.php" method="POST">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" name="name" class="form-control">
                                                    <label for="name">Your Name</label>
                                                </div>

                                                <div class="col-md-6">
                                                    <input type="text" name="email" class="form-control">
                                                    <label for="email">Your Email</label>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col -md-6">
                                                    <input type="text" name="subject" class="form-control">
                                                    <label for="subject">Subject</label>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="md-from">
                                                        <textarea type="text" name="message" rows="3" class="form-control md-textarea"></textarea>
                                                        <label for="message">Your Message</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center text-md-left">
                                                <button class="btn btn-primary" type="subject" name="submit">Send</button>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="col-md-3 text-center text-primary">
                                        <ul class="list-unstyled mb-0">
                                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                                <p>NSBM, Homagama, Sri Lanka</p>
                                            </li>

                                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                                <p>+9411 222 1122</p>
                                            </li>

                                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                                <p><a href="mailto:thepastpaperarchive@gmail.com">thepastpaperarchive@gmail.com</a></p>
                                            </li>

                                        </ul>
                                    </div>
                            </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>

</html>