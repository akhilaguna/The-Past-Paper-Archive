<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A/L</title>
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
                        <div class="content-section">
                            <h1 id="title">A/L</h1>
                            <table class="table table-bordered" id="table">
                                <tr>
                                    <th>#</th>
                                    <th colspan="2">2017</th>
                                    <th colspan="2">2018</th>
                                    <th colspan="2">2019</th>
                                    <th colspan="2">2020</th>
                                </tr>
                                <tr>
                                    <td>Biology</td>
                                    <td><a href="https://drive.google.com/file/d/1Espm-ieGiq5o7Gjm8RFhg6OIvkQcd1-d/view?usp=sharing" target="_blank">Sinhala</a></td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/1wwB7RZyvpH2wa5o3mHgBeSDiUW0ZzkXn/view?usp=sharing" target="_blank">Sinhala</a></td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/1ob5Emn_XrUBq66omLn4re8xsfuqpRNU7/view?usp=sharing" target="_blank">Sinhala</a></td>
                                    <td><a href="https://drive.google.com/file/d/1VrHnpsMhBTdBWijp9063NxG-PoZ3TEq8/view?usp=sharing" target="_blank">English</a></td>
                                    <td><a href="https://drive.google.com/file/d/1ND6YeF1K-6V9VUHr4PFGcbiWOO2DtpvR/view?usp=sharing" target="_blank">Sinhala</a></td>
                                    <td><a href="https://drive.google.com/file/d/1vsZTpk0gPMEzE8Muthp-_4f1Iu4buhmV/view?usp=sharing" target="_blank">English</a></td>
                                </tr>
                                <tr>
                                    <td>Mathematics</td>
                                    <td><a href="https://drive.google.com/file/d/1zIPhZqndhoyUVWHIyfMTxM5en44ObScq/view?usp=sharing" target="_blank">Sinhala</a></td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/1l5IWOCaGbPzpcIAtf_9fAsGZW_b_7yA1/view?usp=sharing" target="_blank">Sinhala</a></td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/1V-WEdHcsUVpmpUH_tgaE1Uwz3w7Bimcp/view?usp=sharing" target="_blank">Sinhala</a></td>
                                    <td><a href="https://drive.google.com/file/d/1FXQ8XETDnkDFEsamvL5SH-tN3Dw6pImG/view?usp=sharing" target="_blank">English</a></td>
                                    <td><a href="https://drive.google.com/file/d/1kzzPN5Ltr5icJC47cK0R0Et3wuYcNvkM/view?usp=sharing" target="_blank">Sinhala</a></td>
                                    <td><a href="https://drive.google.com/file/d/1tevJlSN10XNR2OCb-EII2I8grHr5k2rD/view?usp=sharing" target="_blank">English</a></td>
                                </tr>
                                <tr>
                                    <td>Chemistry</td>
                                    <td><a href="https://drive.google.com/file/d/1fUQ8yoSgcFUR3w7kuOZhbNr5QAWXowDo/view?usp=sharing" target="_blank">Sinhala</a></td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/14FRGMNyORIKYWt1sVDeBi3U5iSc5V-oU/view?usp=sharing" target="_blank">Sinhala</a></td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/1_MYAx4SaaFeroKvUOfNRhA_GmRLVGXIE/view?usp=sharing" target="_blank">Sinhala</a></td>
                                    <td><a href="https://drive.google.com/file/d/1Hj-Oz8FjiKr9YqKA27ML-1rzI01iQw-c/view?usp=sharing" target="_blank">English</a></td>
                                    <td><a href="https://drive.google.com/file/d/12fWDJkHPYswJM3mfAEodha6RdrgZHS0g/view?usp=sharing" target="_blank">Sinhala</a></td>
                                    <td><a href="https://drive.google.com/file/d/1cmSKxT0k6BiMJKdZsccYu40mQkCwXb8M/view?usp=sharing" target="_blank">English</a></td>
                                </tr>
                                <tr>
                                    <td>Physics</td>
                                    <td><a href="https://drive.google.com/file/d/19v4ZtaahKpxGegDFgNN6c3LTD5qlaePM/view?usp=sharing" target="_blank">Sinhala</a></td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/172GkRNzQrwfSuRIExdM04OSlrBbdFvLw/view?usp=sharing" target="_blank">Sinhala</a></td>
                                    <td>English</td>
                                    <td><a href="https://drive.google.com/file/d/1C3AX6r-futN-SlFgErruMBMm5iStojkZ/view?usp=sharing" target="_blank">Sinhala</a></td>
                                    <td><a href="https://drive.google.com/file/d/1JKcueEENY6iE0n13ymZ2yXPZo4wDH31u/view?usp=sharing" target="_blank">English</a></td>
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