<?php include('dbcon.php');

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
				header("Location:home_admin.php");
			}
			else
				header("Location:home.php");
		}
		else
			echo("fail");
	}}
	?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="" enctype="multipart/form-data" >

ENTER EMAIL:<input type="text" name="username" required /><br><br>
ENTER PASSWORD:<input type="password" name="password" required /> <br><br>
		<input type="submit" name="submit" value="LOGIN" />
		<a href="do_signup.php">register</a>
			
									
</form>

</body>
</html>