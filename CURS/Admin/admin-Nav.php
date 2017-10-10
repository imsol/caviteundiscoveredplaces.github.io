<!DOCTYPE html>
<html>
<head>
	<title>Admin Nav</title>
  <style type="text/css">
    hr {
      background-color: white;
    }
  </style>
</head>
<body>
	<header>
      <img src="../assets/img/logoCUP.png" width="180px" height="150px" title=" my logo" />
  </header>
  <nav class="nav navbar-default col-lg-12"  style="background: transparent;  ">
       <div class="col-lg-9  col-md-7 col-sm-5 col-xs-5">
         <ul class="nav nav-tabs">
          <li id="t-guide"><a  href="../intro.php" title="manage travel guide" >Feedback</a></li>
          <li id="l-userr"><a href="admin-home.php" title="list of user">Home</a></li>
          <li id="f-back"><a  href="admin-travguide.php" title="their feedback">Travel guide</a></li>
          <li id="b-post"><a href="blog.php" title="blog posting">BLOG</a></li>
          <li id="l-userr"><a href="admin-managecontent.php" title="list of user">Manage</a></li>
          <li class="form-group" target="_self" >
             <label class="control-label" for="search-field"><i class="glyphicon glyphicon-search"></i></label>
             <input style="border-color: transparent;" class="form-control search-field" type="search" name="search" id="search-field">
          </li>
        </ul>            
      </div>
      <div class="col-lg-3 ">
        <p id="n-admin" style="float: right"><a href="../call-register.php" title="add new admin">register new admin</a></p>
        <form method="post" action="../accountmodule/logout.php">
           <input type="submit" name="logout" value="LOGOUT" />  
        </form>                             
  </nav>
</body>
</html>