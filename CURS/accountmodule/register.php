<?php require_once 'dbcon.php';?>
<?php 
  //if form submitted, insert values into the database
  if(isset($_REQUEST['Submit2']))
{
  
  $password=$_POST['password'];
  $confirmpassword=$_POST['confirmpassword'];
    //removes backslashes
if ($password == $confirmpassword) {
   $image=$_FILES['image']['name'];
  $fname = stripslashes($_REQUEST['fname']);
  $email = stripslashes($_REQUEST['email']);
  $username = stripslashes($_POST['username']);
  $password = stripslashes($_REQUEST['password']);
  //escapes special character in a string
  $fname = mysqli_real_escape_string($con,$fname); 
  $email = mysqli_real_escape_string($con,$email);
  $username = mysqli_real_escape_string($con,$username); 
  $password = mysqli_real_escape_string($con,$password);
  $check="SELECT * FROM users WHERE username = '$username'";
        $rs = mysqli_query($con,$check);
        $data = mysqli_fetch_array($rs);
        if($data[0] > 1) {
               echo "<div class='form'>
                        <h3>The username in already exist EZ.</h3>
                        <br/>Click here to <a href='registration.php'>BACK</a></div>";

            }
        else{
        $query = "INSERT into users (fname, username, email, password, image)
        VALUES ('$fname', '$username', '$email','".md5($password)."','$image')";
        $result = mysqli_query($con,$query);
         $target="images/".basename($_FILES['image']['name']);
    if ($result){
        if(move_uploaded_file($_FILES['image']['image'], $target)){
        
            echo "<div class='form'>
            <h3>You are registered successfully.</h3>
            <br/>Click here to <a href='userlogin.php'>Login</a></div>";
        }
        else{
            echo"<div><h3>You are registered Unsuccessfully. <a href='registration.php'>Login</a></h3></div>";
        }
    }
        }

}
}

 ?>
<!DOCTYPE html>
<html>
<head>
<title>Personal Info</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
  
<form method="post">
  <h2>Create Account</h2>
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
      <input type="password" name="password" id="password" MaxLength="32"  placeholder="Enter password"  required />
    </div>
    <div class="input-group">
       <input type="password" name="confirmpassword" id="confirmpassword"  MaxLength="32"  placeholder="Enter repassword"  required>
    </div>
    <div>
      <input type="file" name="image" title="Upload Image is optional">
    </div>
    <div class="input-group">
      <input type="Submit" value="Submit" name="Submit2" onClick="validatePassword();"  required>
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
</body>
</html>
