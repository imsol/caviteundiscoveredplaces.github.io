<?php require 'accountmodule/dbcon.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
  /* reg css*/
  .reg, .content {
    width: 30%;
    margin: 0px auto;
    padding: 10px;
    border: 1px solid blue;
    background: rgba(27, 96, 141, 0.38);
    border-radius: 10px 10px 10px 10px;

    /*nandito yung size yung padding*/
}
.input-group {
    margin: 10px 0px 10px 0px;
}
/* margin kung gaano kalaki*/

form {

  padding: 4em 4em 2em;
  max-width: 400px;
  margin: 50px auto 0;
  box-shadow: 0 0 1em #222;
  border-radius: 2px;
}

input[type=text], input[type=password], input[type= email] {
    width: 100%;
    padding: 12px 19px;
    color: black;
    margin: 2px 8px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
 body  {
    background-color: rgba(217, 246, 247, 0.73);
  }
  .login {
margin-bottom:5px;
}

.dropdown-menu {
    width: 300px !important;
} 
legend {
  color: white;
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
                            <li  role="presentation"><a href="intro.php">Home</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Explore <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a href="guest-content/travguide.php">Travel Guide</a></li>
                                    <li role="presentation"><a href="guest-content/about.php">About</a></li>
                                    <li role="presentation"><a href="guest-content/blog">Blog</a></li>
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
                                        <h3 style="color: #b7af40; ">Login</h3>
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
                <style type="text/css">
                  /*<a id="log" class="navbar-link login" href="accountmodule/login.php">Log In</a>*/
                </style>
                 <div class="col-lg-5 disc">
                     <img src="assets/img/logoCUP.png" width="380" height="320">
                     <h1>Discovered the undiscovery Places in Cavite.</h1>
                     <p>This site is for those People who didn't know the existing tourist spot in Cavite specially for the people outside Cavite. Let us dicovered the beatiful places in Cavite that you didn't know they exist. It's more fun in the Philippines, more fun in the province of Cavite. <small> Join us to see more Undiscovered PLaces and i will show you how the easiest way to go there <br><em style="font-size: 40px; ">🗺.</em></small> </p>
                     <button class="btn btn-default btn-lg action-button" type="button"><a style="color: lightgreen; text-decoration: none;" href="guest-content/about.php">Learn More!</a></button>
                </div>
                <div class="col-log-5 regs">
                  <form class="reg" method="post">  
                  <legend>Register</legend>      
               <div class="input-group">
                <input type="text" name="fname" MaxLength="100" onkeyPress="return OnlyLet(event);"  placeholder ="Name"  required />  
              </div>
              <div class="input-group">
                <input type="email" name="email" MaxLength="32"  placeholder="Enter Email"  required />
              </div>
              <div class="input-group">
                <input type="text" name="username" MaxLength="32"  placeholder="Enter username"  required />
              </div>
              <div class="input-group">
                <input type="password" name="password" id="password" minlength="6" MaxLength="32"  placeholder="Enter password"  required />
              </div>
              <div class="input-group">
                 <input type="password" name="confirmpassword" id="confirmpassword" minlength="6"  MaxLength="32"  placeholder="Enter repassword"  required/>
              </div>
              <div class="input-group">
                <input type="file" name="image" title="Upload Image is optional">
              </div>
              <div class="input-group">
                <input style="background: transparent" type="submit" value="submit" name="submit2" onClick="validatePassword();"  required/>
              </div>
              </form>
               
        <script type="text/javascript">
          
          function AlphaNumeric(evt) 
         {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 64 && charCode < 91 || charCode > 96 && charCode < 123 || charCode > 47 && charCode < 58 || charCode == 127 || charCode == 8 || charCode == 32 || charCode == 46 || charCode == 50) 
            {
                return true;
            }
            else 
            {
                alert("AlphaNumeric Only!");
                return false;
            }
          }
        function OnlyLet(evt) 
          {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 64 && charCode < 91 || charCode > 96 && charCode < 123 || charCode == 127 || charCode == 8 || charCode == 32 ) 
            {
                return true;
            }
            else 
            {
                alert("Letters Only!");
                return false;
            }
        }
        function OnlyNum(evt) 
        {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 64 && charCode < 91 || charCode > 96 && charCode < 123 || charCode == 127 || charCode == 8 || charCode == 32 ) 
            {
                alert("Numbers Only!");
                return false;
            }
            else 
            {

                return true;
            }
          }
        </script>
      </div>
    </div>
 </div>     
                    
    <div class="social-Media">
            <a href="#"><img src="assets/img/icon/fbIcon.png" width="30" height="30" alt="facebook"></a>
            <a href="#"><img src="assets/img/icon/tweetIcon.png" width="30" height="30" alt="Twitter"></a>
            <a href="#"><img src="assets/img/icon/ig.png" width="30" height="30" alt="Instagram"></a>
        </div>
    <footer><p>all rights reserved | 2017 Alternative Searching Travel Guide in the Province of Cavite
</div> 


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
