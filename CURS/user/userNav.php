<!DOCTYPE html>
<html>
<head>
  <title>Admin Nav</title>
  <link rel="icon" type="image/png" href="img/logoCUP.png" />
</head>
<body>
  <header>
          <img src="../assets/img/logoCUP.png" width="180px" height="150px" title=" my logo" />
      </header>
  <nav class="nav navbar-default col-lg-12"  style="background: transparent;  ">
         <div class="col-lg- col-md-7 col-sm-5 col-xs-5">
             <ul class="nav nav-tabs">
                <li id="t-guide"><a  href="../intro.php" title="Home" >Travel Guide</a></li>
                <li id="l-userr"><a href="admin-home.php" title="list of user">About</a></li>
                <li id="b-post"><a href="blog.php" title="blog posting">My profile</a></li>
                <li>
                  <div class="form-group">
                    <input class="form-control search-field" type="search" name="search" id="search-field">
                    <label class="control-label" for="search-field"><i class="glyphicon glyphicon-search"><a href="#">search</a></i></label>
                  </div>
                </li>
              </ul>            
            </div>
             <form class="navbar-form navbar-right" target="_self">
              <form method="post" action="../accountmodule/logout.php">
               <input type="submit" name="logout" value="LOGOUT" />  
              </form>
        </nav>
        </div>
</body>
</html>