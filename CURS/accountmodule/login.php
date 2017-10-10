<?php require 'dbcon.php';
?>
<?php
  if(isset($_POST['Submit1']))
  {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query1 = $db_con->prepare("SELECT COUNT('id') FROM users WHERE username='$username' and password ='$password'");
        $query1->execute();
        $row=$query1->fetchColumn();

        if($row=='1')
        { 

          $_SESSION['username'] = $username;
          $_SESSION['password'] = $password;
        header("Location:info.php?username=$username");
        }   
        //hellow     
  }
?>

<!DOCTYPE>
<html>
<head>
<meta>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="styles.css">


</head>
<body>
  
<form action="" method="post">
  <fieldset>
    <legend><h2>Login</h2></legend>
  
  
<div class="input-group">
      <input type="text" name="username" MaxLength="16" onkeyPress="return AlphaNumeric(event);" placeholder ="Username" />  
    </div>
<div class="input-group">
      <input type="password" name="password"  MaxLength="8" onkeyPress="return AlphaNumeric(event);" placeholder ="Enter Password" />  
    </div>
<div class="input-group" >
      <input type="submit" name="Submit1"  value="Submit" />
      <a style="float: right;" href="register.php">Register HERE!</a>  
    </div>
</form>
</fieldset>
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
        return false;
    }
}
</script>
</body>
</html>
