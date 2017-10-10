<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cavite Undiscovered Places</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="icon" type="image/png" href="img/logoCUP.png" />
    <link rel="stylesheet" href="assets/css/intro.css">
    <style type="text/css">
        <style type="text/css">
     .modal-header, h4, .close {
      background-image: url("img/bg.jpg");
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  body {
    background-image: url("img/bg1.jpg");
    background-size:contain;
    background-attachment: fixed;

  }

    </style>
</head>

<body>
    <div>
        <div class="header-blue">
            <nav class="navbar navbar-default navigation-clean-search">
                <div class="container">
                    <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Cavite Undiscovered places</a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="active" role="presentation"><a href="#">Home</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Explore <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a href="travguide.php">Travel Guide</a></li>
                                    <li role="presentation"><a href="about.php">About</a></li>
                                    <li role="presentation"><a href="#">Article</a></li>
                                    <li role="presentation"><a href="#">Feedback</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-left" target="_self">
                            <div class="form-group">
                                <label class="control-label" for="search-field"><i class="glyphicon glyphicon-search"></i></label>
                                <input class="form-control search-field" type="search" name="search" id="search-field">
                            </div>
                        </form>
                        <p class="navbar-text navbar-right"><a id="log" class="navbar-link login" href="account/login.php">Log In</a><a id="reg" class="btn btn-default action-button" role="button" href="account/registration.php">Sign Up</a></p> 
                        <!-- end modal-->
                        <!-- end modal-->
                    </div>
                </div>
            </nav>
            <div class="container hero">
                <div class="col-lg-5 col-lg-offset-1 col-md-6 col-md-offset-0">
                        <img src="../curs/img/logoCUP.png" width="380" height="320">
                        <h1>Discovered the undiscovery Places in Cavite.</h1>
                        <p>Lets go! Lets dicovered the beatiful places in Cavite that you didn't know they exist. It's more fun in the Philippines, more fun in the province of Cavite. <small> You can download it on phone simply click the phone on the right side.</small> </p>
                        <button class="btn btn-default btn-lg action-button" type="button">Learn More</button>
                    </div>
               <?php 
                        include ('accountmodule/login.php');
                ?>
            </div>

        </div>
        <footer>all rights reserved | 2017</footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
