<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O/L</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="papers.css">
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
                        
                        <div class="image-section">
                            <h1 id="title">O/L</h1>
                            <table class="table table-bordered" id="table">
                                <tr>
                                    <th>#</th>
                                    <th colspan="2">2017</th>
                                    <th colspan="2">2018</th>
                                    <th colspan="2">2019</th>
                                    <th colspan="2">2020</th>
                                </tr>
                                <tr>
                                    <td>Buddhism</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/1kfymEuzSl8eZ5TflYGTPa_M67soy2fSc/view?usp=sharing">Sinhala</a></td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/1FcRC63EUurvjux4ul_GbQp2gL0jc9JZo/view?usp=sharing">Sinhala</a></td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                </tr>
                                <tr>
                                    <td>History</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/1LCilTIlXmnsZY4rtFWnhk0wjxCLMFezW/view?usp=sharing">Sinhala</a></td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/1bVWMgvOLabANEI4HFlON_Ej2hupvcmOZ/view?usp=sharing">Sinhala</a></td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                </tr>
                                <tr>
                                    <td>Mathematics</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/1lcYiF25AOMYfGweUPR8rsx8pFSii9EGk/view?usp=sharing">Sinhala</a></td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/1xd9dMOLO-efhtY0Fy7pnLmxRnMxxobEp/view?usp=sharing">Sinhala</a></td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                </tr>
                                <tr>
                                    <td>Science</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/16wJ_4iUo71wrdFM0g7d4wfFbOz2Gjb4L/view?usp=sharing">Sinhala</a></td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/1k1Wn5SQraec-y8slQKBtrayG9FpXs4KI/view?usp=sharing">Sinhala</a></td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                </tr>
                                <tr>
                                    <td>Sinhala</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/1MahAngWW75U_kG6ca3h5ymclB9dalCuj/view?usp=sharing">Sinhala</a></td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/1O2ueG9jDOTJq7TSKOcB8z1TGc1NxoKNG/view?usp=sharing">Sinhala</a></td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                </tr>
                                <tr>
                                    <td>Commerce</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/1pZ1IP0Wa_sPAhsvuocvZitDtoFqtGObP/view?usp=sharing">Sinhala</a></td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/1LVQF9zqHqR0ln_cIL5JUDvlp9rZYHrn5/view?usp=sharing">Sinhala</a></td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                </tr>
                                <tr>
                                    <td>Geography</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/1KvATjU4Tmh-THfLylPl_aEMllPKbf1et/view?usp=sharing">Sinhala</a></td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                </tr>
                            </table>
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