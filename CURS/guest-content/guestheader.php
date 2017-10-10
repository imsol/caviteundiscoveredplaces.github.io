
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="../assets/img/logoCUP.png" />
</head>
<style type="text/css">
  header, .logo img {
        display: block;
        margin: auto;
  }
 .logo {
    background-image: url('../assets/img/bg6.png');
      max-width: 1200px; /* corresponds to max height of 450px */
      margin: 0 auto;
      background-size:cover;
      background-color: no-repeat;
  }
  
.search-field{
  background:transparent;
  border:none;
  border-bottom:1px solid transparent;
  border-radius:0;
  color: blue;
  box-shadow:3px;
  color:inherit;
  transition:border-bottom-color 0.3s;
}
li {

      FONT-SIZE: large;
    FONT-WEIGHT: bold;
    FONT-FAMILY: -webkit-pictograph;
    color: green;
}
.nav-tabs {
    border-bottom: TRANSPARENT;
}
a {
  color: lightgreen;
}
.nav-tabs {
    margin-bottom: 15px;
}
.sign-with {
    margin-top: 25px;
    padding: 20px;
}
div #OR {
    height: 30px;
    width: 30px;
    border: 1px solid #C2C2C2;
    border-radius: 50%;
    font-weight: bold;
    line-height: 28px;
    text-align: center;
    font-size: 12px;
    float: right;
    position: absolute;
    right: -16px;
    top: 40%;
    z-index: 1;
    background: #DFDFDF;
}
/*.fixnav {
    overflow: hidden;
    position: fixed; /* Set the navbar to fixed position */
   /* top: 0; /* Position the navbar at the top of the page */
   /* width: 100%; /* Full width 
    margin-bottom: 20%; */

</style>
<body >
  <div class="fixnav">
  <header class="logo">
          <img src="../assets/img/logoCUP.png" width="180px" height="150px" title=" my logo" />
      </header>
  <div >
  <nav class="guestnav navbar-default col-lg-12"  style="background: transparent;">
         <div class="guest-nav col-lg-8 col-md-7 col-sm-5 col-xs-5">
             <ul class="nav nav-tabs">
                <li id="home"><a  href="../intro.php" title="Home" >Home</a></li>
                <!--<li id="Destination"><a  href="../intro.php" title="Destination" >Destination</a></li>
                <li id="Hotel"><a  href="#" title="Hotel" >Hotel and Restaurant</a></li> -->
                <li id="about"><a href="about.php" title="About">About</a></li>
                <li id="travguide"><a href="travguide.php" title="Travel Guide">Travel guide</a></li>
                <li id="blog"><a href="blog.php" title="blog">Blog</a></li>
                <li id="contact"><a href="contact.php" title="Contact us">Contact</a></li>
                <li id="join and see more undiscovered places" style="float: right;margin-top: 8px;">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">login</button>
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">Login/Registration</h4>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                             <!-- Nav tabs -->
                             <ul class="nav nav-tabs">
                                <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                                <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                              </ul>
                              <!-- Tab panes -->
                              <div class="tab-content">
                                  <div class="tab-pane active" id="Login">
                                      <form role="form" class="form-horizontal">
                                        <div class="form-group">
                                          <label for="email" class="col-sm-2 control-label">Email</label>
                                          <div class="col-sm-10">
                                              <input type="email" class="form-control" id="email1" placeholder="Email" />
                                          </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                                Password</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-2">
                                            </div>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    Submit</button>
                                                <a href="javascript:;">Forgot your password?</a>
                                            </div>
                                        </div>
                                      </form>
                                   </div>
                                  <div class="tab-pane" id="Registration">
                                      <form role="form" class="form-horizontal"  method="post">        
                                     <div class="form-group">
                                      <label for="email" class="col-sm-2 control-label">Name</label>
                                      <input type="text" class="form-control" name="fname" MaxLength="100" onkeyPress="return OnlyLet(event);"  placeholder ="Name"  required />  
                                    </div>
                                    <div class="form-group">
                                      <label for="email" class="col-sm-2 control-label">email</label>
                                      <input type="email" class="form-control" name="email" MaxLength="32"  placeholder="Enter Email"  required />
                                    </div>
                                    <div class="form-group">
                                      <label for="address" class="col-sm-2 control-label">address</label>
                                      <input type="text" class="form-control" name="addr" MaxLength="100" onkeyPress="return OnlyLet(event);"  placeholder ="address"  required />  
                                    </div>
                                    <div class="form-group">
                                      <label for="email" class="col-sm-2 control-label">username</label>
                                      <input type="text" class="form-control" name="username" MaxLength="32"  placeholder="Enter username"  required />
                                    </div>
                                    <div class="form-group">
                                      <label for="email" class="col-sm-2 control-label">password</label>
                                      <input type="password" class="form-control" name="password" id="password" MaxLength="32"  placeholder="Enter password"  required />
                                    </div>
                                    <div class="form-group">
                                      <label for="email" class="col-sm-2 control-label">Confirm Password</label>
                                       <input type="password" class="form-control" name="confirmpassword" id="confirmpassword"  MaxLength="32"  placeholder="Enter repassword"  required>
                                    </div>
                                    <div class="form-group">
                                      <input type="file" class="form-control" name="image" title="Upload Image is optional">
                                    </div>
                                    <div class="form-group">
                                      <input type="submit" value="submit" name="submit2" onClick="validatePassword();"  required>
                                    </div>
                                </form>
                                  </div>
                                </div>
                                <div id="OR" class="hidden-xs">
                                    OR</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row text-center sign-with">
                                        <div class="col-md-12">
                                            <h3>
                                                Sign in with</h3>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="btn-group btn-group-justified">
                                                <a href="#" class="btn btn-primary">Facebook</a> <a href="#" class="btn btn-danger">
                                                    Google</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                          </div>
                      </div>
                  </div>
              </div>
            </li>
            </ul>            
            </div>
             <form class="navbar-form navbar-left" target="_self">
                <div class="form-group">
                    <form class="navbar-form navbar-left" target="_self">
                            <div class="form-group">
                                <label class="control-label" for="search-field"><i class="glyphicon glyphicon-search"></i></label>
                                <input class="form-control search-field" type="search" placeholder="search places inside Cavite" name="search" id="search-field">
                            </div>
                        </form>
                 </div>
            </form>
            <script type="text/javascript">
              $('#myModal').modal('show');
              // www.jquery2dotnet.com
            </script>
        </nav>
        </div>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>