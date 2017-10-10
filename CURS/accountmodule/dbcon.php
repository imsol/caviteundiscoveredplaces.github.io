<?php
//conncection for database
$db_con=mysqli_connect('localhost','root','');
mysqli_select_db($db_con,'db_info') or die(mysql_error());
?>

<?php 
//register function
  if(isset($_POST['submit2']))
{
  
  $password=$_POST['password'];
  $confirmpassword=$_POST['confirmpassword'];

if ($password == $confirmpassword) {
  $fname =$_POST['fname'];
  $email = $_POST['email'];
  $username= $_POST['username'];
 $query = $db_con->prepare("INSERT INTO users SET fname = '$fname', email = '$email', addr = '$addr',phone_no = '$phone_no', username = '$username', password = MD5('$password')");
  $query->execute();
 // redirect('login.php');
  header("Location: ../curs/intro.php");
      exit;
}
else{
  echo '<p style="text-align: center;">Your Password Does not Match</p>';
} 
}

 ?>