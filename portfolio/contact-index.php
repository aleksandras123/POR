<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<!-- JS -->
<script
src="https://code.jquery.com/jquery-3.3.1.js"
integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
    <script type="text/javascript" src="java.js"></script>
    <script type="text/javascript" src="parallax.js"></script>

    <title>CONTACT</title>
</head>
    <body>
        <header class="contact-header">
            <nav>
                  <div class="menu-icon">
                        <i class="fa fa-bars fa-2x"></i>
                  </div>
                  <a href="index.php">
                      <div class="logo">
                        <div class="form">
                            <h1>AP</h1>
                        </div>
                    </div>
                </a>
                  <div class="">
                        <ul>
                              <li><a href="index.php">Home</a></li>
                              <li><a href="skills.php">Skills</a></li>
                              <li><a href="projects.php">Projects</a></li>
                              <li><a href="contact-index.php">Contact</a></li>
                        </ul>
                  </div>
            </nav>
            <div class="navbar navbar-inverse navbar-fixed-bottom">
                <div class="container">
                    <p class="navbar-text pull-left">© 2018 Aleksandras Petrovicevas</p>
                    <div class="nav-bar-icons pull-right">
                        <a href="https://github.com/aleksandras123" class="navbarIcon"><i class="fa fa-github navbar-text" aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/in/aleksandras-petrovi%C4%8Devas/" class="navbarIcon"> <i class="fa fa-linkedin navbar-text" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="centeredTitle contactHeight">
                <div class="contact-title">
                    <h1 class="skillTitleStyle projectTitleStyle">CONTACT<span> /ME</span></h1>
                    <form class="" action="contact.php" method="POST" role="form">
                        <div class="skill-items">
                            <div class="col-xs-12 col-sm-4">
                                <div class="contact-item">
                                    <div class="contact-circle">
                                        <div class="contact-icon">
                                            <i class="glyphicon glyphicon-user"></i>
                                        </div>
                                    </div>
                                    <h1 class="contact-h1">NAME</h1>
                                    <input type="text" style="width:100%;" name="name" value="" required>
                                </div>
                            </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="contact-item">
                                <div class="contact-circle">
                                    <div class="contact-icon">
                                        <i class="glyphicon glyphicon-envelope"></i>
                                    </div>
                                </div>
                                <h1 class="contact-h1">EMAIL</h1>
                                <input type="email" style="width:100%;" name="email" value="" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="contact-item">
                                <div class="contact-circle">
                                    <div class="contact-icon">
                                        <i class="glyphicon glyphicon-paperclip"></i>
                                    </div>
                                </div>
                                <h1 class="contact-h1">SUBJECT</h1>
                                <input type="text" style="width:100%;" name="subject" value="" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="contact-item">
                                <div class="contact-circle">
                                    <div class="contact-icon">
                                        <i class="glyphicon glyphicon-align-justify"></i>
                                    </div>
                                </div>
                                <h1 class="contact-h1">MESSAGE</h1>
                                <textarea name="message" rows="8" required cols="80"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="contact-item">
                                <button type="submit" class="btn btn-secondary" style="width:50%;" name="submit">SEND MESSAGE</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </header>
    </body>
</html>
