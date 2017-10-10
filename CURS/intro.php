<?php 

$db_con=mysqli_connect('localhost','root','');
mysqli_select_db($db_con,'db_info');

if(isset($_POST["submit"])){
  $username=$_POST["username"];
  $password=$_POST["password"];
  
  $query=mysqli_query($db_con,"SELECT username,password,type FROM users");
  while($row=mysqli_fetch_array($query))
  {
    $db_username=$row["username"];
    $db_pass=$row["password"];
    $db_type=$row["type"];
    
    if($username==$db_username && $password==$db_pass){
      session_start();
      $_SESSION["username"]=$db_username;
      $_SESSION["type"]=$db_type;
      
      if($_SESSION["type"]=='admin'){
        header("Location:Admin/admin-managecontent.php");
      }
      else
        header("Location:user/user-home.php");
    }
    else
      echo("your account is not registered yet!");
  }}
  ?>

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
  body  {
    background-color: rgba(24, 84, 86, 0.73);;
  }
  .login {
margin-bottom:5px;
}

.dropdown-menu {
    width: 300px !important;
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
                                <ul class="dropdown-menu" role="menu" style="padding: 15px; padding-bottom: 10px; background: rgba(27, 96, 141, 0.38); ">
                                    <li role="presentation"><a href="guest-content/travguide.php">Travel Guide</a></li>
                                    <li role="presentation"><a href="guest-content/about.php">About</a></li>
                                    <li role="presentation"><a href="guest-content/blog.php">Blog</a></li>
                                    <li role="presentation"><a href="#forum-guest">Feedback</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-left" target="_self">
                            <div class="form-group">
                                <label class="control-label" for="search-field"><i class="glyphicon glyphicon-search"></i></label>
                                <input class="form-control search-field" type="search" name="search" id="search-field">
                            </div>
                        </form>
                        <table class="navbar-text navbar-right" >
                            <tr>
                                <td>
                                     <ul class="nav navbar-nav">
                                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span>  Login</a>
                                    <div class="dropdown-menu" style="padding: 15px; padding-bottom: 10px; background: linear-gradient(135deg, #194581, #1d7f9b);">
                                        <h3 style="color: #b7af40;; ">Login</h3>
                                      <br>
                                    <form class="form-horizontal"  method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                                       <input id="sp_uname" class="form-control login" type="text" name="username" MaxLength="16" onkeyPress="return AlphaNumeric(event);" placeholder ="Username" required/><br>
                                      <input id="sp_pass" class="form-control login" type="password" name="password"  MaxLength="8" onkeyPress="
                                      return AlphaNumeric(event);" placeholder ="Enter Password" required/><br>
                                      <input  class="btn " type="submit" name="submit"  value="submit" />
                                    </form>
                                    </div>
                                  </li>
                                </ul>
                                </td>
                                <td><a id="reg" class="btn btn-default action-button" role="button" href="call-register.php"><span class="glyphicon glyphicon-user"></span> Register</a></td>
                            </tr>
                        </table>
                        
                        
                    </div>
                </div>
            </nav>
            <div class="container disc">
                <div class="col-lg-5 col-lg-offset-1 col-md-6 col-md-offset-0">
                        <img src="assets/img/logoCUP.png" width="380" height="320">
                        <h1>Discovered the undiscovery Places in Cavite.</h1>
                        <p>This site is for those People who didn't know the existing tourist spot in Cavite specially for the people outside Cavite. Let us dicovered the beatiful places in Cavite that you didn't know they exist. It's more fun in the Philippines, more fun in the province of Cavite. <small> You can download it on mobilephone simply click the phone on the right side.</small> </p>
                        <button class="btn btn-default btn-lg action-button" type="button"><a style="color: lightgreen; text-decoration: none;" href="guest-content/about.php">Learn More!</a></button>
                    </div>
                    <div>                
               <?php 
                        include ('phone.php');
                ?>
            </div>

        </div>
    </div>
    <div class="social-Media">
      <footer>
            <a href="#"><img src="assets/img/icon/fbIcon.png" width="30" height="30" alt="facebook"></a>
            <a href="#"><img src="assets/img/icon/tweetIcon.png" width="30" height="30" alt="Twitter"></a>
            <a href="#"><img src="assets/img/icon/ig.png" width="30" height="30" alt="Instagram"></a>
            <p>all rights reserved | 2017 Alternative Searching Travel Guide in the Province of Cavite</p>
      </footer>
  </div>   
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
